<?= $this->include('template/header'); ?>

<section>
    <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
    
    <h2>Artikel Terbaru</h2>
    <?php 
    // Jika ingin menampilkan artikel terbaru di halaman home
    $artikelModel = new \App\Models\ArtikelModel();
    $artikel = $artikelModel->findAll(3); // Ambil 3 artikel terbaru
    
    if($artikel): foreach($artikel as $row): ?>
    <article class="entry">
        <h3><a href="<?= base_url('/artikel/' . $row['slug']);?>"><?= $row['judul']; ?></a></h3>
        <p><?= substr($row['isi'], 0, 100); ?>...</p>
    </article>
    <?php endforeach; else: ?>
    <p>Belum ada artikel.</p>
    <?php endif; ?>
    
    <p><a href="<?= base_url('/artikel'); ?>" class="btn">Lihat semua artikel</a></p>
</section>

<?= $this->include('template/footer'); ?>