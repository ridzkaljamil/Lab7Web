<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<h1><?= $title; ?></h1>
<hr>

<!-- Form Pencarian dan Filter -->
<div class="search-filter">
    <form method="GET" action="<?= base_url('/admin/artikel'); ?>">
        <div class="form-row">
            <div class="form-group">
                <input type="text" name="q" placeholder="Cari artikel..." value="<?= esc($q); ?>" class="form-control">
            </div>
            <div class="form-group">
                <select name="kategori_id" class="form-control">
                    <option value="">Semua Kategori</option>
                    <?php if (!empty($kategori) && is_array($kategori)): ?>
                        <?php foreach ($kategori as $kat): ?>
                            <?php if (is_array($kat) && isset($kat['id_kategori']) && isset($kat['nama_kategori'])): ?>
                                <option value="<?= $kat['id_kategori']; ?>" <?= ($kategori_id == $kat['id_kategori']) ? 'selected' : ''; ?>>
                                    <?= esc($kat['nama_kategori']); ?>
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cari</button>
                <a href="<?= base_url('/admin/artikel'); ?>" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>
</div>

<!-- Tombol Tambah Artikel -->
<div class="actions">
    <a href="<?= base_url('/admin/artikel/add'); ?>" class="btn btn-primary">Tambah Artikel</a>
</div>

<!-- Flash Messages -->
<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>

<!-- Tabel Artikel -->
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($artikel) && is_array($artikel)): ?>
                <?php $no = 1; ?>
                <?php foreach ($artikel as $item): ?>
                    <?php if (is_array($item)): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <?= isset($item['judul']) ? esc($item['judul']) : 'Tidak ada judul'; ?>
                            </td>
                            <td>
                                <?= isset($item['nama_kategori']) ? esc($item['nama_kategori']) : 'Tidak ada kategori'; ?>
                            </td>
                            <td>
                                <span class="badge <?= (isset($item['status']) && $item['status'] == 'published') ? 'badge-success' : 'badge-warning'; ?>">
                                    <?= isset($item['status']) ? ucfirst($item['status']) : 'Draft'; ?>
                                </span>
                            </td>
                            <td>
                                <?= isset($item['created_at']) ? date('d/m/Y H:i', strtotime($item['created_at'])) : '-'; ?>
                            </td>
                            <td class="actions">
                                <?php if (isset($item['id'])): ?>
                                    <a href="<?= base_url('/admin/artikel/edit/' . $item['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="<?= base_url('/admin/artikel/delete/' . $item['id']); ?>" 
                                       class="btn btn-sm btn-danger" 
                                       onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</a>
                                    <?php if (isset($item['slug'])): ?>
                                        <a href="<?= base_url('/artikel/' . $item['slug']); ?>" 
                                           class="btn btn-sm btn-info" target="_blank">Lihat</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada artikel ditemukan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<?php if (isset($pager) && $pager): ?>
    <div class="pagination-wrapper">
        <?= $pager->links(); ?>
    </div>
<?php endif; ?>

<style>
.search-filter {
    background: #f8f9fa;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.form-row {
    display: flex;
    gap: 15px;
    align-items: center;
    flex-wrap: wrap;
}

.form-group {
    flex: 1;
    min-width: 200px;
}

.form-control {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.actions {
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    font-size: 14px;
}

.btn-primary { background: #007bff; color: white; }
.btn-secondary { background: #6c757d; color: white; }
.btn-warning { background: #ffc107; color: #212529; }
.btn-danger { background: #dc3545; color: white; }
.btn-info { background: #17a2b8; color: white; }
.btn-sm { padding: 4px 8px; font-size: 12px; }

.table-responsive {
    overflow-x: auto;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th,
.table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #f8f9fa;
    font-weight: 600;
}

.badge {
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
}

.badge-success { background: #28a745; color: white; }
.badge-warning { background: #ffc107; color: #212529; }

.alert {
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 4px;
}

.alert-success {
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
}

.text-center {
    text-align: center;
}

.pagination-wrapper {
    margin-top: 20px;
    text-align: center;
}

.actions a {
    margin-right: 5px;
}
</style>

<?= $this->endSection() ?>