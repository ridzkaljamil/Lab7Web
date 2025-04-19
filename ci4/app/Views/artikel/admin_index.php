<?= $this->include('template/admin_header'); ?>
<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <select name="kategori">
        <option value="">Semua Kategori</option>
        <?php foreach ($kategoris as $k): ?>
        <option value="<?= $k['kategori']; ?>" <?= ($kategori == $k['kategori']) ? 'selected' : ''; ?>>
            <?= $k['kategori']; ?>
        </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Cari" class="btn btn-primary">
</form>
<p>Ditemukan <?= $pager->getTotal() ?> data</p>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if($artikel): foreach($artikel as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td>
            <b><?= $row['judul']; ?></b>
            <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
        </td>
        <td><?= $row['status']; ?></td>
        <td>
            <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']);?>">Ubah</a>
            <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']);?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="4">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>

</table>
<?= $pager->only(['q', 'kategori'])->links(); ?>
<?= $this->include('template/admin_footer'); ?>