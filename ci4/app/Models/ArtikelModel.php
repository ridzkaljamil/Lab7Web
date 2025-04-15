<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar', 'kategori'];
    
    public function getByKategori($kategori)
    {
        return $this->where('kategori', $kategori)
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }
}