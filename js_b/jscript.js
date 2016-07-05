$(document).ready(function () {
    
    var imagem_anterior = $("#img_id").val();
    
    $("#img_id").change(function(){
        var imagem_selecionada = $("#img_id").val();
        
        if(imagem_anterior != imagem_selecionada){
            $("#img_" + imagem_anterior).hide();
            $("#img_" + imagem_selecionada).show();
            
            imagem_anterior = imagem_selecionada;
        }
        
    });
    
    
    
     $(".scp_coluna").hide();
    

    $(".scp_btn").click(function () {

        var url = $(this).attr("itemid");

        var idBotao = $(this).attr("id");

        var id = url.substr(url.indexOf("=") + 1, 100000000);

        var status = "status" + id;

        var statuValor = $("#" + status).html();

        var ordem = "ordem" + id;
        
        var oredmValor = $("#" + ordem).val();
        if ( oredmValor!= 0) {

            $.get(url + "&status=" + statuValor+"&ordem="+oredmValor)
                    .success(function () {
                        //window.location.href = url;

                        if (statuValor == 0) {
                            $("#" + status).html(1);
                            status = 1;
                            $("#" + ordem).attr("disabled","disabled");
                            $("#" + idBotao).html("Desativar").removeClass("btn-primary").addClass("btn-success");
                        } else {
                            $("#" + status).html(0);
                            status = 0;
                            $("#" + ordem).removeAttr("disabled");
                            $("#" + ordem).val(0);
                            $("#" + idBotao).html("Ativar").removeClass("btn-success").addClass("btn-primary");
                        }

                    })
                    .error(function (error) {
                        alert('ERROR');
                    });

        }else{
            alert("Ordem não pode ser 0 ao ATIVAR o produto!")
        }



    });

});
