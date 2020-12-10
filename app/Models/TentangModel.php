<?php namespace App\Models;

use CodeIgniter\Model;

class TentangModel extends Model
{
    protected $table = 'tentang_kami';

    protected $allowedFields = ['data_tentangkami'];
}