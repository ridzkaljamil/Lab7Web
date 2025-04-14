<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact',
            'content' => 'Ini adalah halaman contact yang berisi informasi kontak.'
        ]);
    }

    public function faqs()
    {
        return view('faqs', [
            'title' => 'Halaman FAQ',
            'content' => 'Ini adalah halaman FAQ yang berisi pertanyaan yang sering diajukan.'
        ]);
    }
    
    public function tos()
    {
        return view('tos', [
            'title' => 'Halaman Terms of Service',
            'content' => 'Ini adalah halaman Terms of Service yang berisi ketentuan penggunaan layanan.'
        ]);
    }

    // File: app/Controllers/Page.php
public function index()
{
    $title = 'Halaman Home';
    $content = 'Selamat datang di website kami. Ini adalah halaman home yang menampilkan informasi terbaru.';
    return view('home', compact('title', 'content'));
}
}