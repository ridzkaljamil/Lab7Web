<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<h1><?= $title; ?></h1>

<div class="content">
    <h2>Hubungi Kami</h2>
    <p>Silakan hubungi kami melalui:</p>
    <ul>
        <li>Email: info@example.com</li>
        <li>Telepon: (021) 123-4567</li>
        <li>Alamat: Jl. Contoh No. 123, Jakarta</li>
    </ul>
</div>

<?= $this->endSection() ?>