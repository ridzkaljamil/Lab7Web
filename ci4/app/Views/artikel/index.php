<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<h1><?= $title; ?></h1>

<?php if($artikel): foreach($artikel as $row): ?>
<article class="entry">
    <h2><a href="<?= base_url('/artikel/' . $row['slug']);?>"><?= $row['judul']; ?></a></h2>
    <p><strong>Kategori:</strong> 
        <?php if(isset($row['nama_kategori'])): ?>
            <span class="badge"><?= $row['nama_kategori'] ?></span>
        <?php else: ?>
            <span class="badge">Tidak ada kategori</span>
        <?php endif; ?>
    </p>
    <?php if($row['gambar']): ?>
    <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?= $row['judul']; ?>" style="max-width: 300px;">
    <?php endif; ?>
    <p><?= substr($row['isi'], 0, 200); ?>...</p>
</article>
<hr class="divider" />
<?php endforeach; else: ?>
<article class="entry">
    <h2>Belum ada data.</h2>
</article>
<?php endif; ?>

<?= $this->endSection() ?>