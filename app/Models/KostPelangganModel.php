<?php

namespace App\Models;

use CodeIgniter\Model;

class KostPelangganModel extends Model
{
    protected $table = 'Kost_Pelanggan';
    protected $primaryKey = 'KostPelanggan_id';
    protected $allowedFields = ['KostPelanggan_Nama', 'KostPelanggan_Alamat', 'KostPelanggan_Tgl'];
}
