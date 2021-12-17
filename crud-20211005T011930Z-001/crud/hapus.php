<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

    <?php include_once "menu.php"; ?>

    <div class="container">
        <h2>Konfirmasi Penghapusan Biodata Mahasiswa</h2>
        <div class="row mb-2">
            <div class="col-sm-12">
                <span class="m-1">
                    <a href="viewall.php" class="btn btn-info" role="button">Kembali</a>
                </span>
            </div>
        </div>
        <table class="table table-striped">
            <?php
            include "koneksi.php";
            include "fungsi.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nim = bersihkan_input($_POST['nim']);
                $strSQL = "DELETE FROM mahasiswa WHERE nim= '$nim'";
                $executeStrSQL = mysqli_query($conn, $strSQL);
                if ($executeStrSQL) {
            ?>
                    <div class="alert alert-success">
                        <b>Data berhasil</b> ditambahkan
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <b>Data tidak berhasil</b> dihapus di database
                    </div>
                <?php
                }
            } elseif (isset($_GET['nim'])) {
                $nim = bersihkan_input($_GET['nim']);
            }
            $strSQL = "SELECT * FROM mahasiswa WHERE nim='$nim'";
            $executeStrSQL = mysqli_query($conn, $strSQL);
            if (mysqli_num_rows($executeStrSQL)) {
                while ($row = mysqli_fetch_assoc($executeStrSQL)) {
                ?>
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th><?php echo $row["namadepan"] . " " . $row["namabelakang"] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NIM</td>
                            <td><?= $row["nim"] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $row["email"] ?></td>
                        </tr>
                    </tbody>
            <?php
                }
            }
            ?>
        </table>
        <div class="row mb-2">
            <div class="col-sm-12">
                <span class="m-1">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"></form>
                    <input type="hidden" name="nim" value="<?= $nim ?>">
                    <button type="submit" class="btn btn-danger">
                        Hapus
                    </button>
                </span>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>