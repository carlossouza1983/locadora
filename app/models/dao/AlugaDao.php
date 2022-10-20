<?php
namespace app\models\dao;

use app\core\Model;

class AlugaDao extends Model{
public function lista(){
    $sql = "SELECT * FROM aluga a, produto p, contato c WHERE
                a.id_produto = p.id_produto and
                a.id_contato = c.id_contato
            ";
    
    return $this->select($this->db, $sql); 
    
}


}

