<?php namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'paket';

    protected $allowedFields = [
        'nama', 'harga', 'deskripsi', 'fitur1', 
        'fitur2', 'fitur3', 'fitur4', 'fitur5', 
        'fitur6', 'fitur7', 'fitur8', 'fitur9', 
        'fitur10'
    ];
}