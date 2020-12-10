<?php namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitor';

    protected $allowedFields = ['ip', 'date', 'hits'];
}