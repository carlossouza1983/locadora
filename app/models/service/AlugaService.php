<?php
namespace app\models\service;

use app\models\dao\AlugaDao;
use app\models\validacao\AlugaValidacao;

class AlugaService{
    public static function lista(){
        $dao = new AlugaDao();
        return $dao->lista();
    }
    public static function salvar($aluga, $campo, $tabela){
        $validacao = AlugaValidacao::salvar($aluga);
        return Service::salvar($aluga, $campo, $validacao->listaErros(), $tabela);
    }
}

