<?= $this->include('layout/admin_header'); ?>

<h2><?= $title; ?></h2>

<?php if (session()->getFlashdata('error')): ?>
<div class="alert alert-danger">
    <?= session()->getFlashdata('error') ?>
</div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
<div class="alert alert-success">
    <?= session()->getFlashdata('success') ?>
</div>
<?php endif; ?>

<?php if (isset($validation) && $validation): ?>
<div class="alert alert-danger">
    <h5>Validation Errors:</h5>
    <?= $validation->listErrors() ?>
</div>
<?php endif; ?>

<form action="<?= base_url('/admin/artikel/add'); ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <div class="form-group">
        <label for="judul">Judul *</label>
        <input type="text" name="judul" id="judul" value="<?= old('judul') ?>" class="form-control" required>
        <?php if (isset($validation) && $validation->getError('judul')): ?>
            <small class="text-danger"><?= $validation->getError('judul') ?></small>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="isi">Isi Artikel *</label>
        <textarea name="isi" id="isi" cols="50" rows="10" class="form-control" required><?= old('isi') ?></textarea>
        <?php if (isset($validation) && $validation->getError('isi')): ?>
            <small class="text-danger"><?= $validation->getError('isi') ?></small>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="id_kategori">Kategori *</label>
        <select name="id_kategori" id="id_kategori" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            <?php if (isset($kategori) && is_array($kategori) && count($kategori) > 0): ?>
                <?php foreach($kategori as $k): ?>
                    <?php if (is_array($k) && isset($k['id_kategori']) && isset($k['nama_kategori'])): ?>
                        <option value="<?= $k['id_kategori']; ?>" <?= (old('id_kategori') == $k['id_kategori']) ? 'selected' : ''; ?>>
                            <?= esc($k['nama_kategori']); ?>
                        </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <option value="" disabled>Tidak ada kategori tersedia</option>
            <?php endif; ?>
        </select>
        <?php if (isset($validation) && $validation->getError('id_kategori')): ?>
            <small class="text-danger"><?= $validation->getError('id_kategori') ?></small>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="gambar">Gambar (Opsional)</label>
        <input type="file" name="gambar" id="gambar" accept="image/*" class="form-control">
        <small class="form-text text-muted">Format: JPG, PNG, GIF. Maksimal 2MB</small>
    </div>
    
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Simpan Artikel</button>
        <a href="<?= base_url('/admin/artikel'); ?>" class="btn btn-secondary">Batal</a>
    </div>
</form>

<style>
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
    color: #333;
}

.form-control {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    line-height: 1.4;
}

.form-control:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}

textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

.form-actions {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    margin-right: 10px;
}

.btn-primary {
    background: #007bff;
    color: white;
}

.btn-primary:hover {
    background: #0056b3;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background: #545b62;
}

.alert {
    padding: 12px 16px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid transparent;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.text-danger {
    color: #dc3545 !important;
    font-size: 12px;
    margin-top: 5px;
    display: block;
}

.form-text {
    font-size: 12px;
    color: #6c757d;
    margin-top: 5px;
    display: block;
}
</style>

<?= $this->include('layout/admin_footer'); ?>