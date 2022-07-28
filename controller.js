$(function(){

    function exibirImagem(numero){
        return "<img src='images/dado" + numero + ".gif' width='100' height='100'>";
    }

    $("#jogador1").click(function(){
        $.ajax({
            type: "POST",
            url: "model_dado.php",
            success:function(numero){
                $("#dado1msg").val(numero);
                $("#dado1img").html(exibirImagem(numero));
            }
        });
    });

    $("#jogador2").click(function(){
        $.ajax({
            type: "POST",
            url: "model_dado.php",
            success:function(numero){
                $("#dado2msg").val(numero);
                $("#dado2img").html(exibirImagem(numero));
                var numero1 = $("#dado1msg").val();
                var numero2 = $("#dado2msg").val();
                $.ajax({
                    type: "POST",
                    url: "model_dado.php",
                    data: "numero1="  + numero1 + "&numero2=" + numero2,
                    success:function(msg){
                        $("#resultadoJogo").html(msg);
                    }
                });
            }
        });
    });
    
});