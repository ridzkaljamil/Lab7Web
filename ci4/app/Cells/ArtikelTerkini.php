<?php

namespace App\Cells;

use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function render($kategori = null)
    {
        $model = new ArtikelModel();
        
        if ($kategori) {
            $artikel = $model->where('kategori', $kategori)
                            ->orderBy('created_at', 'DESC')
                            ->limit(5)
                            ->findAll();
        } else {
            $artikel = $model->orderBy('created_at', 'DESC')
                            ->limit(5)
                            ->findAll();
        }
        
        return view('components/artikel_terkini', [
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }
}