<div class="widget-box">
    <h3>Artikel Terkini <?= $kategori ? "- Kategori $kategori" : "" ?></h3>
    <ul>
        <?php if(empty($artikel)): ?>
            <li>Belum ada artikel terbaru<?= $kategori ? " dalam kategori $kategori" : "" ?>.</li>
        <?php else: ?>
            <?php foreach ($artikel as $row): ?>
            <li>
                <a href="<?= base_url('/artikel/' . $row['slug']) ?>"><?= $row['judul'] ?></a>
                <small>(<?= $row['kategori'] ?>)</small>
            </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>