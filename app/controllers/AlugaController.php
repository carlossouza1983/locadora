<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\AlugaService;
use app\models\service\Service;

class AlugaController extends Controller{
   private $tabela = "aluga";
   private $campo  = "id_aluga";
   
    public function index(){        
       $dados["lista"] = AlugaService::lista();
       $dados["produtos"] = Service::lista("produto");
       $dados["contatos"] = Service::lista("contato");
       $dados["view"]  = "aluga/index";
       $this->load("template", $dados);
      
    }
    
    public function create(){
        $dados["aluga"] = Flash::getForm();
        $dados["produtos"]= Service::lista("produto");
        $dados["contatos"]  = Service::lista("contato");
        $dados["view"] = "aluga/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id){
        $aluga = Service::get($this->tabela, $this->campo, $id);       
        if(!$aluga){
            $this->redirect(URL_BASE."aluga");
        }
        
        $dados["aluga"]   = $aluga;
        $dados["view"]      = "aluga/Create";
        $this->load("template", $dados);
    }
    
    public function salvar(){
        $aluga = new \stdClass();
        $aluga->id_aluga            = $_POST["id_aluga"];
        $aluga->id_contato 		    = $_POST['id_contato'];
        $aluga->id_produto 		    = $_POST['id_produto'];
        $aluga->datae 		        = $_POST['datae'];
        $aluga->datad 		        = $_POST['datad'];
      
   
  
        
        Flash::setForm($aluga);
        if(alugaService::salvar($aluga, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."aluga");
        }else{
            if(!$aluga->id_aluga){
                $this->redirect(URL_BASE."aluga/create");
            }else{
                $this->redirect(URL_BASE."aluga/edit/".$aluga->id_aluga);
            }
        }
    }
    
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."aluga");
    }
}

