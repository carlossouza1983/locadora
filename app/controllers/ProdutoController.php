<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\ProdutoService;

class ProdutoController extends Controller{
   private $tabela = "produto";
   private $campo  = "id_produto";
   
    public function index(){        
       $dados["lista"] = Service::lista($this->tabela);        
       $dados["view"]  = "produto/index";
       $this->load("template", $dados);
    }
    
    public function create(){
        $dados["produto"]   = Flash::getForm();
        $dados["categorias"]= Service::lista("categoria");
        $dados["unidades"]  = Service::lista("unidade");
        $dados["view"]      = "produto/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id){
        $produto = Service::get($this->tabela, $this->campo, $id);       
        if(!$produto){
            $this->redirect(URL_BASE."produto");
        }
        
        $dados["produto"]   = $produto;
        $dados["categorias"]= Service::lista("categoria");
        $dados["unidades"]  = Service::lista("unidade");
        $dados["view"]      = "produto/Create";
        $this->load("template", $dados);
    }
    
    public function salvar(){
        $produto = new \stdClass();
        $produto->id_produto        = $_POST["id_produto"];
        $produto->titulo 		    = $_POST['titulo'];
        $produto->id_categoria 		= $_POST['id_categoria'];
        $produto->id_unidade 		= $_POST['id_unidade'];
        $produto->preco 		    = $_POST['preco'];
        $produto->eh_promocao 		= $_POST['eh_promocao'];
        $produto->eh_lancamento     = $_POST['eh_lancamento'];
        $produto->estoque_inicial   = $_POST['estoque_inicial'];
        $produto->sinopse           = $_POST['sinopse'];
  
        
        Flash::setForm($produto);
        if(produtoService::salvar($produto, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."produto");
        }else{
            if(!$produto->id_produto){
                $this->redirect(URL_BASE."produto/create");
            }else{
                $this->redirect(URL_BASE."produto/edit/".$produto->id_produto);
            }
        }
    }
    
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."produto");
    }
}

