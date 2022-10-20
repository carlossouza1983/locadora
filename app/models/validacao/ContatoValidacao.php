<?php
namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class ContatoValidacao{
    public static function salvar($contato){
        $validacao = new Validacao();
        
        $validacao->setData("nome", $contato->nome);
        $validacao->setData("eh_cliente", $contato->eh_cliente);
        $validacao->setData("celular", $contato->celular);
        $validacao->setData("email", $contato->email);
        $validacao->setData("senha", $contato->senha);
        $validacao->setData("cep", $contato->cep);
        $validacao->setData("logradouro", $contato->logradouro); 
        $validacao->setData("uf", $contato->uf);
        $validacao->setData("cidade", $contato->cidade);
        $validacao->setData("bairro", $contato->cidade);
        $validacao->setData("cpf", $contato->cpf);
        $validacao->setData("cnpj", $contato->cnpj);

        
        //fazendo a validação
        $validacao->getData("nome")->isVazio()->isMinimo(5);
        $validacao->getData("celular")->isVazio();
        $validacao->getData("email")->isVazio()->isEmail();
        $validacao->getData("senha")->isVazio();
        $validacao->getData("cep")->isVazio();
        $validacao->getData("logradouro")->isVazio();
        $validacao->getData("uf")->isVazio();
        $validacao->getData("cidade")->isVazio();
        $validacao->getData("bairro")->isVazio();
        $validacao->setData("cpf", $contato->cpf);
        $validacao->setData("cnpj", $contato->cnpj);
        
        if (!$contato->eh_cliente && !$contato->eh_fornecedor && !$contato->eh_transportador){
            $validacao->getData("eh_cliente")->isVazio("você precisa definir o tipo de contato: Cliente, Fornecedor ou Transportadora");
        }
        
        if($contato->cpf){
            $validacao->getData("cpf")->isCPF();
           
        }
     
        if($contato->cnpj){
            $validacao->getData("cnpj")->isCNPJ();
            
        }
        
        if($contato->email){
            $tem = Service::get("contato", "email", $contato->email);
            if($tem && $tem->id_contato != $contato->id_contato){
                $validacao->getData("email")->isUnico(1);
           
         }
            
         if($contato->cnpj){
              $tem = Service::get("contato", "cnpj", $contato->cnpj);
              if($tem && $tem->id_contato != $contato->id_contato){
                    $validacao->getData("cnpj")->isUnico(1);
              }
         }
         
         if($contato->cpf){
             $tem = Service::get("contato", "cpf", $contato->cpf);
             if($tem && $tem->id_contato != $contato->id_contato){
                 $validacao->getData("cpf")->isUnico(1);
             }
         }
        }

        return $validacao;
        
    }
}

