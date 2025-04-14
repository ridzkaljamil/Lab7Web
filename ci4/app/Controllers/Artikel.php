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
        $artikel = $model->where([
            'slug' => $slug
        ])->first();

        // Menampilkan error apabila data tidak ada.
        if (!$artikel)
        {
            throw PageNotFoundException::forPageNotFound();
        }

        $title = $artikel['judul'];
        return view('artikel/detail', compact('artikel', 'title'));
    }

    public function admin_index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        
        // Fitur pencarian
        $q = $this->request->getVar('q') ?? '';
        if (!empty($q)) {
            $model->like('judul', $q)->orLike('isi', $q);
        }
        
        $artikel = $model->findAll();
        return view('artikel/admin_index', compact('artikel', 'title', 'q'));
    }

    public function add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'gambar' => 'mime_in[gambar,image/jpg,image/jpeg,image/png]|max_size[gambar,1024]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $file = $this->request->getFile('gambar');
            $gambar = '';
            
            // Jika ada file yang diupload
            if ($file->isValid() && !$file->hasMoved()) {
                // Generate nama file random
                $gambar = $file->getRandomName();
                // Pindahkan file ke folder public/gambar
                $file->move('gambar', $gambar);
            }
            
            $artikel = new ArtikelModel();
            $artikel->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul')),
                'gambar' => $gambar
            ]);
            return redirect('admin/artikel');
        }
        $title = "Tambah Artikel";
        return view('artikel/form_add', compact('title'));
    }

    public function edit($id)
    {
        $artikel = new ArtikelModel();

        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $artikel->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
            ]);
            return redirect('admin/artikel');
        }

        // ambil data lama
        $data = $artikel->where('id', $id)->first();
        $title = "Edit Artikel";
        return view('artikel/form_edit', compact('title', 'data'));
    }

    public function delete($id)
    {
        $artikel = new ArtikelModel();
        $artikel->delete($id);
        return redirect('admin/artikel');
    }
}