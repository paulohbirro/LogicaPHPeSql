<?php

class  Balanca
{
    public $bolinhas = array( 
        "bolinha1" => 20,
        "bolinha2" => 5,
        "bolinha3" => 20,
        "bolinha4" => 20,
        "bolinha5" => 20
    );

    public function __construct()
    {
        shuffle($this->bolinhas);

        foreach (array_slice($this->bolinhas, 0) as $key => $value) 
        {
            $key++;
            echo "Bolinha numero: " . $key . "=" . $value . "</br>";
        }
    }

    public function pratoDireita(array $bolihhas)
    {
        foreach ($bolihhas as  $value)
        {
            $valor += $value;
        }
        
        return $valor;
    }

    public function pratoEsquerda(array $bolihhas)
    {
        foreach ($bolihhas as  $value)
        {
            $valor += $value;
        }

        return $valor;
    }

    public function compararPesoDireita($bolinha2, $bolinha3)
    {
        if ($bolinha2 == $bolinha3) 
        {
            return "bolinha mais leve é a  5 que está na sua mão " . $this->bolinhas[4];
        } 
        
        elseif ($bolinha2 > $bolinha3)
        {
            return "bolinha mais leve é a bolinha 4 de peso  " . $bolinha3;
        } 
        
        else 
        {
            return "bolinha mais leve é  bolinha 3 de peso " . $bolinha2;
        }
    }

    public function compararPesoEsquerda($bolinha2, $bolinha3)
    {

        if ($bolinha2 == $bolinha3) 
        {
            return "bolinha mais leve é a 5 que está na sua mão " . $this->bolinhas[4];
        } 
        
        elseif ($bolinha2 > $bolinha3) 
        {
            return "bolinha mais leve é a bolinha 2 de peso  " . $bolinha3;
        } 
        
        else 
        {
            return "bolinha mais leve é  bolinha 1 de peso " . $bolinha2;
        }
    }

    public function efetuarPesagem()
    {

    $bolinhasPratoEsquerdo = $this->pratoEsquerda(
        array(
            $this->bolinhas[0], 
            $this->bolinhas[1]
        )
    );
    
    $bolinhasPratoDireita = $this->pratoDireita(
        array(
            $this->bolinhas[2], 
            $this->bolinhas[3]
        )
    );

        if ($bolinhasPratoEsquerdo == $bolinhasPratoDireita)
        {
            echo "A bolinha mais leve é a 5 que está em sua mão com peso de " . $this->bolinhas[4];
        } 
        
        elseif ($bolinhasPratoEsquerdo > $bolinhasPratoDireita) 
        {                
            echo  $this->compararPesoDireita($this->bolinhas[2], $this->bolinhas[3]);
        } 
        
        else 
        {
            echo  $this->compararPesoEsquerda($this->bolinhas[0], $this->bolinhas[1]);
        }

    }
}

$balanca = new Balanca();
$balanca->efetuarPesagem();
