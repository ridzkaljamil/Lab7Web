<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $title = 'Daftar User';
        $model = new UserModel();
        $users = $model->findAll();
        return view('user/index', compact('users', 'title'));
    }

    public function login()
    {
        // Untuk debugging, tambahkan pesan sederhana
        echo "Halaman Login";
        
        helper(['form']);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        if (!$email)
        {
            return view('user/login');
        }

        $session = session();
        $model = new UserModel();
        $login = $model->where('useremail', $email)->first();
        if ($login)
        {
            $pass = $login['userpassword'];
            if (password_verify($password, $pass))
            {
                $login_data = [
                    'user_id' => $login['id'],
                    'user_name' => $login['username'],
                    'user_email' => $login['useremail'],
                    'logged_in' => TRUE,
                ];
                $session->set($login_data);
                return redirect()->to('admin/dashboard');
            }
            else
            {
                $session->setFlashdata("flash_msg", "Password salah.");
                return redirect()->to('/user/login');
            }
        }
        else
        {
            $session->setFlashdata("flash_msg", "email tidak terdaftar.");
            return redirect()->to('/user/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/user/login');
    }
    public function register()
{
    helper(['form']);
    $data = [];
    
    if ($this->request->getMethod() == 'post') {
        // Validasi input
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email|is_unique[user.useremail]',
            'password' => 'required|min_length[6]',
            'password_confirm' => 'matches[password]',
        ];
        
        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'username' => $this->request->getVar('username'),
                'useremail' => $this->request->getVar('email'),
                'userpassword' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
            
            return redirect()->to('/user/login')->with('success', 'Registrasi berhasil! Silakan login.');
        } else {
            $data['validation'] = $this->validator;
        }
    }
    
    return view('user/register', $data);
}
public function dashboard()
{
    // Pastikan user sudah login
    if (!session()->get('logged_in')) {
        return redirect()->to('/user/login');
    }
    
    $title = 'Dashboard Admin';
    $user_id = session()->get('user_id');
    $user_name = session()->get('user_name');
    
    // Ambil data artikel untuk ditampilkan di dashboard
    $artikelModel = new \App\Models\ArtikelModel();
    $artikel_count = $artikelModel->countAll();
    $artikel_published = $artikelModel->where('status', 'published')->countAllResults();
    
    return view('user/dashboard', compact('title', 'user_name', 'artikel_count', 'artikel_published'));
}
}