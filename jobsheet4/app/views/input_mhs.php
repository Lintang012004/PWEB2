<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-4 py-4">
    <h3>Tambah Data Mahasiswa</h3>
    <div class="py-3">
        <a class="btn btn-outline-primary" href="tampil_mhs.php">KEMBALI</a>
    </div>
    <form action="proses_mhs.php?aksi=tambah" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</div>