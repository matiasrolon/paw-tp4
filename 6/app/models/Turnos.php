<?php

namespace App\Models;

use App\Core\Model;

class Turnos extends Model
{
    protected $table = 'turnos';

    public function get()
    {
        return $this->db->selectAll($this->table);
    }

    public function insert(array $turno)
    {
        $this->db->insert($this->table, $turno);
    }
    
    public function delete($id){
        $this->db->delete($this->table, $id);
    }
    
    public function getId($id){
        return $this->db->select($this->table, $id);
        
    
    }
    
    public function upload(array $turno,$id){
        $this->db->upload($this->table,$turno,$id);
    }
}
