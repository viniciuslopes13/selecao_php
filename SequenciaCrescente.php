<?php

class SequenciaCrescente {
    
    function verifica($vet){
        for ($i=1;$i<count($vet);$i++){
            if($vet[$i-1]>=$vet[$i]){
                return 0;
            }
        }
        return 1;
    }
    
    function seqCrescente($seq){
        $temp = $seq;
        $tamanho=count($seq);
        if($tamanho==1||$tamanho==2){
            return true;
        }
        $contador=0;
        for($i=0;$i<$tamanho;$i++){
            unset($seq[$i]);
            if($this->verifica(array_values($seq))){
                $contador++;
            }
            $seq = $temp;
        }
        if($contador){
            return true;
        }else{
            return false;
        }
    }
}
$vet = array(3, 5, 67, 98, 3);
print_r($vet);
print "<br>";
$teste = new SequenciaCrescente();
if($teste->seqCrescente($vet)){
    print "True";
}else{
    print "False";
}