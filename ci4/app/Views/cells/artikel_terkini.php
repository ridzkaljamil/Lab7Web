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

<style>
.widget-box {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 20px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.widget-box .title {
    background: #f5f5f5;
    border-bottom: 1px solid #ddd;
    margin: 0;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: 600;
}

.widget-content {
    padding: 15px;
}

.artikel-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.artikel-list li {
    border-bottom: 1px solid #eee;
    padding: 8px 0;
}

.artikel-list li:last-child {
    border-bottom: none;
}

.artikel-list a {
    color: #333;
    text-decoration: none;
    font-weight: 500;
}

.artikel-list a:hover {
    color: #007bff;
}

.artikel-list .date {
    display: block;
    color: #666;
    font-size: 12px;
    margin-top: 4px;
}

.alert {
    padding: 12px;
    border-radius: 4px;
    margin: 0;
}

.alert-info {
    background-color: #d1ecf1;
    border: 1px solid #bee5eb;
    color: #0c5460;
}
</style>