<?php namespace App\Models;

use CodeIgniter\Model;

class ProyekModel extends Model
{
    protected $table = 'proyek';

    protected $allowedFields = ['kota', 'alamat', 'paket', 'gambar'];
}