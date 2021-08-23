<?php

if(isset($_POST)){
//Quando trabalhamos com arquivos, utilizamos a variável global, $_FILES
   $nome = $_FILES['arquivo']['name'];
   $temporario = $_FILES['arquivo']['tmp_name'];
//    $tipo =   $_FILES['arquivo']['type'];
}
//    if($tipo == 'image/jpeg'){
// //Função pede os parâmetros nesta ordem: 'nome-temporario', 'onde salvar', 'nome do arquivo'.
//        move_uploaded_file($temporario, 'arquivos/'.$nome);         //Função que faz o upload de arquivos.
//    }
// }

$extensoesAceitas = ['jpeg', 'jpg', 'png'];
$extensao = pathinfo($nome,PATHINFO_EXTENSION);     //Mostra somente a extensão do arquivo, atravéis da referência do nome.
// echo $extensao;

//Função in_aaray = Se tiver no array.
if(in_array($extensao,$extensoesAceitas)){   //Parâmetro 1 = Existe no array (oque tem), parâmetro 2 = qual array(onde).
//Para que os arquivos não tenham o mesmo nome e acabe sobrecrevento o arquivo anterior, utiliza-se uma funão que dá um nome aleatório para o arquivo. Logo após, concateno com a extensão.
    if(move_uploaded_file($temporario, 'arquivos/'.uniqid().'.'.$extensao)){
        echo 'Upload feito';
    }
}else{
    echo 'Extensão não aceita';
}
