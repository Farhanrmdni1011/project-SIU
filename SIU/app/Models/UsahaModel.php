<?php
// File: app/Models/UsahaModel.php

namespace App\Models;

use CodeIgniter\Model;

class UsahaModel extends Model
{
    protected $table = 'usaha';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_usaha', 'jenis_usaha', 'lokasi', 'kontak', 'gambar'];
}
?>