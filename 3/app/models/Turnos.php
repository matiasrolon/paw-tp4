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
    
    public function getDiagnostico($idTurno)
    {
        $atribute = 'diagnostico';
        return $this->db->selectAtributeByID($idTurno,$atribute, $this->table);
    }
    
    
    public function getTurno($idTurno)
    {
        return $this->db->selectByID($idTurno, $this->table);
    }
    
    public function insert(array $turno)
    {
        $this->db->insert($this->table, $turno);
    }
    
}
