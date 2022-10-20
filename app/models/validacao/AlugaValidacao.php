<?php
namespace app\models\validacao;

use app\core\Validacao;

class AlugaValidacao{
    public static function salvar($aluga){
        $validacao = new Validacao();
        
        $validacao->setData("datae", $aluga->datae);

        
        //fazendo a validação
        $validacao->getData("datae")->isVazio();
     
        
        return $validacao;
        
    }
}

