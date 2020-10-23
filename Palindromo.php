<?php

class Palindromo {
    function palin($str){
        $palavra = str_split($str);
        $tamanho = count($palavra);
        $reverso = array_reverse($palavra);
        $contador = 0;
        for($i=0;$i<$tamanho;$i++){
            if($palavra[$i]==$reverso[$i]){
                $contador++;
            }
        }
        if($contador==$tamanho){
            return true;
        }else{
            return false;
        }
    }
}

$teste = new Palindromo();
$str = "a";
print "Palavra a ser verificada: ".$str;
print "<br>";
if($teste->palin($str)){
    echo "É um palindromo!";
}else{
    echo "Não é um palíndromo!";
};
