<?php

class SeculoAno {
    
    function secAno($ano){
        $separa;
        while($ano>10){
            $separa[] = $ano%10;
            $ano = $ano/10;
        }
        $separa[] = (int)$ano;
        $tamanhoArray = count($separa);
        if($tamanhoArray<3){
            $sec=1;
            return $sec;
        }
        $saida = array_slice($separa,2);
        $reverso = array_reverse($saida);
        $reverso = implode("",$reverso);
        if($separa[0]==0 && $separa[1]==0){
            $sec = (int)$reverso;
        }else{
            $sec = (int)$reverso+1;
        }
        return $sec;
    }
}

$teste = new SeculoAno();
print "<hr>";
print "Testando funcao SeculoAno()";
print "<br>";
print"O seculo eh: ".$teste->secAno(1905);
print "<hr>";
print "<br>";
/*for($i=301;$i<402;$i++){
    print"O seculo eh: ";
    print $teste->secAno($i);
    print "<br>";
}*/
