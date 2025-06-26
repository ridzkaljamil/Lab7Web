<div class="widget-box">
    <h3 class="title">Artikel Terkini</h3>
    <div class="widget-content">
        <?php if (!empty($artikel) && is_array($artikel)): ?>
            <ul class="artikel-list">
                <?php foreach ($artikel as $item): ?>
                    <?php if (is_array($item) && isset($item['judul']) && isset($item['slug'])): ?>
                        <li>
                            <a href="<?= base_url('artikel/' . $item['slug']); ?>">
                                <?= esc($item['judul']); ?>
                            </a>
                            <?php if (isset($item['created_at'])): ?>
                                <small class="date"><?= date('d/m/Y', strtotime($item['created_at'])); ?></small>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div class="alert alert-info">
                <p>Belum ada artikel yang dipublikasikan.</p>
            </div>
        <?php endif; ?>
    </div>
</div>