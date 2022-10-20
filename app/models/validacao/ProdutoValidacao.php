<?php
namespace app\models\validacao;

use app\core\Validacao;

class ProdutoValidacao{
    public static function salvar($produto){
        $validacao = new Validacao();
        
        $validacao->setData("titulo", $produto->titulo);
        $validacao->setData("preco", $produto->preco);
      
        
        //fazendo a validação
        
       $validacao->getData("titulo")->isVazio();
        $validacao->getData("preco")->isVazio();
      
        return $validacao;
        
    }
}

