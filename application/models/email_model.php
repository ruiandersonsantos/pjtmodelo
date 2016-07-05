<?php

class Email_model extends CI_Model{
    
    public function enviaEmail($destinatário, $assunto, $mensagem){
       $this->load->library("email");
       $config["protocol"] = "smtp";
       $config["smtp_host"] = "mail.soberanosaude.com.br";
       $config["smtp_user"] = "contato@soberanosaude.com.br";
       $config["smtp_pass"] = "42301886@";
       $config["charset"] = "utf-8";
       $config["mailtype"] = "html";
       $config["newline"] = "\r\n";
       $config["smtp_port"] = '587';
       $this->email->initialize($config);

       $this->email->from("contato@soberanosaude.com.br", "Sistema do Corretor");
       $this->email->to($destinatário);

       $this->email->subject($assunto);
       $this->email->message($mensagem);
       
       return $this->email->send();
    }
    
}