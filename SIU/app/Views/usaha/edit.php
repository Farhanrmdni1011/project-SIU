<!DOCTYPE html>
<html>
<head>
    <title>Edit Usaha</title>
</head>
<body>
    <h1>Edit Usaha</h1>
    <form action="/usaha/update/<?= $usaha['id']; ?>" method="post" enctype="multipart/form-data">
        <label>Nama Usaha:</label>
        <input type="text" name="nama_usaha" value="<?= $usaha['nama_usaha']; ?>"><br>
        <label>Jenis Usaha:</label>
        <input type="text" name="jenis_usaha" value="<?= $usaha['jenis_usaha']; ?>"><br>
        <label>Lokasi:</label>
        <input type="text" name="lokasi" value="<?= $usaha['lokasi']; ?>"><br>
        <label>Kontak:</label>
        <input type="text" name="kontak" value="<?= $usaha['kontak']; ?>"><br>
        <label>Gambar:</label>
        <?php if ($usaha['gambar']): ?>
            <img src="/<?= $usaha['gambar']; ?>" width="100"><br>
            <input type="hidden" name="existing_gambar" value="<?= $usaha['gambar']; ?>">
        <?php endif; ?>
        <input type="file" name="gambar"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
