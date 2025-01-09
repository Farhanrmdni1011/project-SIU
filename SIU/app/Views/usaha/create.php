<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Usaha Warga</title>
</head>
<body>
    <h1>Daftar Usaha Warga</h1>
    <a href="/usaha/create">Tambah Usaha</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Usaha</th>
                <th>Jenis Usaha</th>
                <th>Lokasi</th>
                <th>Kontak</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usaha as $u): ?>
            <tr>
                <td><?= $u['nama_usaha']; ?></td>
                <td><?= $u['jenis_usaha']; ?></td>
                <td><?= $u['lokasi']; ?></td>
                <td><?= $u['kontak']; ?></td>
                <td>
                    <?php if ($u['gambar']): ?>
                        <img src="/<?= $u['gambar']; ?>" width="100">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="/usaha/edit/<?= $u['id']; ?>">Edit</a>
                    <a href="/usaha/delete/<?= $u['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
