<?php

namespace MovimentoUniforme;

class MovimentoUniforme implements MovimentoUniforme{
    function deslocamento($sf=null, $s0=null){
        return $sf-$s0;
    }

    function intervaloTempo($tf=null, $t0=null){
        return $tf-$t0;
    }

    function velocidadeMedia($sf = null, $s0 = null, $tf = null, $t0 = null){
        $desloc = $this->deslocamento($sf, $s0);
        $intTempo = $this->intervaloTempo($tf, $t0);

        return $desloc/$intTempo;
    }

    function kmhToMs($velocidade){
        $divisor = (float)3.6;

        return $velocidade/$divisor;
    }

    function msToKmh($velocidade){
        $multiplicador = (float)3.6;

        return $velocidade*$multiplicador;
    }
    
}
    
interface MovimentoUniforme{
    function kmhToMs($velocidade);
    function msToKmh($velocidade);
}