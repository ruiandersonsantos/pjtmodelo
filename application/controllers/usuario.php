<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    private $uid;
    private $access_token;

    public function __construct() {
        parent::__construct();

        $this->load->library("facebook", array(
            "appId" => "1620118844976007",
            "secret" => "b15a46f284f9b9e1d00c175132654c0e"));
        
       
        $this->uid = $this->facebook->getUser();

        $this->access_token = $this->facebook->getAccessToken();

        $this->facebook->setAccessToken($this->access_token);
    }

    public function login() {
        //$this->load->view('adm/login');
        $contents['login_url'] = $this->googleplus->loginURL();
	$this->load->view('adm/login',$contents);
    }

    public function recuperasenha() {

        $this->load->view('adm/recuperasenha');
    }

    public function alterasenha() {

        autoriza();
        $this->load->view('adm/alterasenha');
    }

    public function trocarsenha() {
        $this->load->model("usuarios_model");

        $email = $this->input->post("email");
        $senha = $this->input->post("senha");

        $usuario = $this->usuarios_model->logarNoSitema($email, $senha);

        if ($usuario) {

            $novasenha = $this->input->post("novasenha");
            $confnovasenha = $this->input->post("confnovasenha");

            if ($novasenha === $confnovasenha) {

                //passando senha para atributo do objeto
                $usuario['senha'] = md5($novasenha);
                //alterando no banco
                $alterou = $this->usuarios_model->alteraSenha($usuario);

                if ($alterou) {
                    $this->session->set_flashdata("sucesso", "Alteração efetuada com sucesso!");
                }
            } else {
                $this->session->set_flashdata("erro", "Senha e confirmação estão diferentes!");
            }
        } else {
            $this->session->set_flashdata("erro", "Senha atual não está correta!");
        }

        redirect('usuario/alterasenha');
    }
    
    public function logarGoogle()
	{
		
		if($this->session->userdata('usuario_logado') == true){
			redirect('usuario/login');
		}
		
		if (isset($_GET['code'])) {
			
			$this->googleplus->getAuthenticate();
			$this->session->set_userdata('login',true);
                        $usuario = array();
                        $usuario = $this->googleplus->getUserInfo();
                        $usuario['senha'] = '1111';
			$this->session->set_userdata('usuario_logado',$usuario);
                        $this->session->set_flashdata("sucesso", "Seja bem vindo ao painel de controle!");
			redirect('usuario/login');
			
		} 
		
                //redirect('usuario/login');
                
		$contents['login_url'] = $this->googleplus->loginURL();
		$this->load->view('adm/login',$contents);
		
	}

    public function logarFacebook() {

        if ($this->uid) {
            
          
            try {
                $usuario = $this->facebook->api('/me?fields=email,first_name,last_name,gender,name,id,birthday,picture');
               $usuario['senha'] = '0000';
                
                $this->session->set_userdata("usuario_logado", $usuario);
                $this->session->set_flashdata("sucesso", "Seja bem vindo ao painel de controle!");
                
            } catch (Exception $exc) {
                $this->uid = NULL;
                echo $exc->getTraceAsString();
            }
        } else {

            die("<script>top.location='" . $this->facebook->getLoginUrl(array(
                        "scope" => "email,user_likes,public_profile,user_friends",
                        "redirect_url" => site_url("/")
                    )) . "'</script>");
        }
        
        redirect('usuario/login');
    }

    public function logar() {

        $this->load->model("usuarios_model");

        $email = $this->input->post("email");
        $senha = $this->input->post("senha");

        $usuario = $this->usuarios_model->logarNoSitema($email, $senha);

        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("sucesso", "Seja bem vindo ao painel de controle!");
        } else {
            $this->session->set_flashdata("erro", "Usuario e ou senha invalidos");
        }


        redirect('usuario/login');
    }

    public function sair() {
        $this->session->unset_userdata("usuario_logado");
        redirect('usuario/login');
    }

    public function reenviandoSenha() {

        $this->load->model("usuarios_model");
        $this->load->model("email_model");

        $email = $this->input->post("email");
        $cpf = $this->input->post("cpf");

        // buscando usuario pelo e-mail e cpf no banco
        $usuario = $this->usuarios_model->buscarPorEmailCpf($email, $cpf);

        // verificando se foi retornado do banco
        if ($usuario) {
            // Gerando senha randomica 
            $senha = rand();

            //passando senha para atributo do objeto
            $usuario['senha'] = md5($senha);

            //montando mensagem (será melhorado em arquivo externo na aula explica)
            //$msg = "<html> Sua nova senha é " . $senha . ". Efetue a alteração para sua preferencia no menu alrerar senha! </html>";

            $dadosmensagem = array(
                "nome" => $usuario['email'],
                "senha" => $senha,
                "site" => ""
            );

            $dados = array("mensagem" => $dadosmensagem);
            $msg = $this->load->view("adm/mensagemrecuperasenha.php", $dados, TRUE);

            //Chamando metodo que envia email
            $retorno = $this->email_model->enviaEmail($usuario['email'], "Recuperação de Senha", $msg);

            //alterando no banco
            $alterou = $this->usuarios_model->alteraSenha($usuario);

            // verificando se o envio e a gravação no banco ocorreram com sucesso.
            if ($retorno && $alterou) {
                $this->session->set_flashdata("sucesso", "Uma nova senha foi enviada para: " . $usuario['email']);
            } else {
                $this->session->set_flashdata("erro", "Problemas no envio do email - tente novamente! ");
            }
        } else {
            $this->session->set_flashdata("erro", "Não foi encontrado usuario com os dados informados!");
        }

        redirect("usuario/recuperasenha");
    }

}
