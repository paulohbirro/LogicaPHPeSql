<?php

//RESPOSTA DA QUESTAO 6

class Pilha {

    private $lista = [];
    private $topo = -1;

    public function empilha($valor) {
        $this->topo++;
        $this->lista[$this->topo] = $valor;
    }

    public function remove() {
        if($this->_isset())
            unset($this->lista[$this->topo]);
            $this->topo--;
    } 

    public function _isset() {
        $ret = true;

        if($this->topo < 0) {
            $ret = false;
        }

        return $ret;
    }

    public function getTopo(){
        return $this->lista[$this->topo];
    }
}


//RESPOSTA DA QUESTAO 7

//lista principal
$pilha = new Pilha();


//preenche pilha de ex. 1,2,3...100
for($i = 1; $i < 101; $i++) {
    $pilha->empilha($i);
    echo $i."</br>";
}