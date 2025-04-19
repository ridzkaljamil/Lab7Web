<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }

    public function view($slug)
    {
        $model = new ArtikelModel();
        $artikel = $model->where('slug', $slug)->first();
        
        // Jika artikel tidak ditemukan, tampilkan 404
        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }
        
        $title = $artikel['judul'];
        return view('artikel/detail', compact('artikel', 'title'));
    }

    public function admin_index()
{
    $title = 'Daftar Artikel';
    $q = $this->request->getVar('q') ?? '';
    $kategori = $this->request->getVar('kategori') ?? '';
    
    $model = new ArtikelModel();
    $query = $model;
    
    if ($q) {
        $query = $query->like('judul', $q);
    }
    
    if ($kategori) {
        $query = $query->where('kategori', $kategori);
    }
    
    $data = [
        'title'     => $title,
        'q'         => $q,
        'kategori'  => $kategori,
        'artikel'   => $query->paginate(10),
        'pager'     => $model->pager,
        'kategoris' => $model->distinct()->select('kategori')->findAll()
    ];
    
    return view('artikel/admin_index', $data);
}

    public function add()
    {
        // Validasi form jika ada POST request
        if ($this->request->getMethod() === 'post') {
            // Ambil data dari form
            $data = [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul'), '-', true),
                'kategori' => $this->request->getPost('kategori'),
                'status' => $this->request->getPost('status') ?? 'published'
            ];
            
            // Upload gambar jika ada
            $file = $this->request->getFile('gambar');
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/gambar', $newName);
                $data['gambar'] = $newName;
            }
            
            // Simpan artikel
            $model = new ArtikelModel();
            $model->insert($data);
            
            return redirect()->to('/admin/artikel');
        }
        
        $title = 'Tambah Artikel';
        return view('artikel/form_add', compact('title'));
    }

    public function edit($id = null)
    {
        $model = new ArtikelModel();
        $artikel = $model->where('id', $id)->first();
        
        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }
        
        // Validasi form jika ada POST request
        if ($this->request->getMethod() === 'post') {
            // Ambil data dari form
            $data = [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul'), '-', true),
                'kategori' => $this->request->getPost('kategori'),
                'status' => $this->request->getPost('status') ?? $artikel['status']
            ];
            
            // Upload gambar jika ada
            $file = $this->request->getFile('gambar');
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/gambar', $newName);
                $data['gambar'] = $newName;
                
                // Hapus gambar lama jika ada
                if ($artikel['gambar'] && file_exists(ROOTPATH . 'public/gambar/' . $artikel['gambar'])) {
                    unlink(ROOTPATH . 'public/gambar/' . $artikel['gambar']);
                }
            }
            
            // Update artikel
            $model->update($id, $data);
            
            return redirect()->to('/admin/artikel');
        }
        
        $title = 'Edit Artikel';
        return view('artikel/form_edit', compact('artikel', 'title'));
    }

    public function delete($id = null)
    {
        $model = new ArtikelModel();
        $artikel = $model->where('id', $id)->first();
        
        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }
        
        // Hapus gambar jika ada
        if ($artikel['gambar'] && file_exists(ROOTPATH . 'public/gambar/' . $artikel['gambar'])) {
            unlink(ROOTPATH . 'public/gambar/' . $artikel['gambar']);
        }
        
        $model->delete($id);
        return redirect()->to('/admin/artikel');
    }
}