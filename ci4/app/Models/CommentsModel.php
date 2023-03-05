<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'anvillaflor_myguests';

    protected $allowedFields = ['name', 'email'];

    public function getComments()
    {       
        return $this->findAll();
    }
}