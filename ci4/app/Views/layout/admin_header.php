<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Tambahkan di bagian head -->
<meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title><?= $title ?? 'Admin Panel' ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css') ?>">
    <style>
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .btn { padding: 8px 16px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 2px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-info { background: #17a2b8; color: white; }
        .btn-danger { background: #dc3545; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn-sm { padding: 4px 8px; font-size: 12px; }
        .table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .table th { background: #f8f9fa; }
        .form-control { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        .form-inline { display: flex; gap: 10px; align-items: center; }
        .alert { padding: 15px; margin: 20px 0; border-radius: 4px; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .mb-3 { margin-bottom: 1rem; }
        .row { display: flex; flex-wrap: wrap; }
        .col-md-6 { flex: 0 0 50%; }
        .col-md-12 { flex: 0 0 100%; }
        .mr-2 { margin-right: 0.5rem; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Admin Panel</h1>
            <nav>
                <a href="<?= base_url('/admin/dashboard') ?>" class="btn btn-primary">Dashboard</a>
                <a href="<?= base_url('/admin/artikel') ?>" class="btn btn-primary">Kelola Artikel</a>
                <a href="<?= base_url('/') ?>" class="btn btn-secondary">Lihat Website</a>
                <a href="<?= base_url('/user/logout') ?>" class="btn btn-danger">Logout</a>
            </nav>
            <hr>
        </header>
        <main>