<?php

    //Declaração de variáveis nomeVar = (tipoDeDados) valorInicial

    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
    $nota4 = (double) 0;
    $media = (double) 0;

    //Recebendo os valores das caixas de texto utilizando o POST do formulário
    if(isset($_POST['btncalc'])){
        $nota1 = $_POST['txtn1'];
        $nota2 = $_POST['txtn2'];
        $nota3 = $_POST['txtn3'];
        $nota4 = $_POST['txtn4'];
        /*
          Operadores lógicos em php
          E - (and, &&) 
          OU - (or, ||)
          NAO - (!)

          Funções para validação de tipos de dados
          is_numeric(): verifica se é um número
          is_integer(): validação para números inteiros
          is_float(): validação para números reais
          is_double(): validação para números reais
          is_array(): validação para vetores e matrizes
          is_object(): validação para objetos
          is_bool(): validação para valores booleano
          is_string(): validação para valores de texto.
          */
        
    //Validação para tratamento de caixa vazia
    if( $_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == ""){
        echo('É obrigatório preencher todos os valores para realizar o cálculo!!');
    }else{
        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)){
                //Calculo da Média
            $media = ($nota1 + $nota2 + $nota3 + $nota4) /4 ;
        }else{
            echo('Digite apenas números');
        }

}
}
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo($nota1)?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo($nota2)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo($nota3)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo($nota4)?>" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?php echo($media);?>
            </footer>
        </div>
        
		
	</body>

</html>