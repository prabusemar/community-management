<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simpan Data</title>

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Sweet Alert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>

</head>

<body>

    <?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];

    // Cek apakah file gambar sudah dipilih
    if ($_FILES['gambar']['name']) {
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $dir = "assets/logo/";

        // Set path file yang akan disimpan
        $path_file = $dir . $nama_file;

        // Check apakah file sudah ada di folder temp
        if (is_uploaded_file($tmp_file)) {
            // Upload file ke folder assets/logo
            if (!move_uploaded_file($tmp_file, $path_file)) {
                echo "Maaf, terjadi kesalahan saat menyimpan gambar.";
            }
        }
    } else {
        // Jika tidak ada file yang dipilih, set path_file ke null
        $path_file = null;
    }

    // Update data ke dalam tabel data_komunitas
    if ($path_file) {
        // Update data komunitas beserta gambar
        $sql = "UPDATE data_komunitas SET nama='$nama', deskripsi='$deskripsi', alamat='$alamat', gambar='$path_file' WHERE id=$id";
    } else {
        // Update data komunitas tanpa gambar
        $sql = "UPDATE data_komunitas SET nama='$nama', deskripsi='$deskripsi', alamat='$alamat' WHERE id=$id";
    }

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        // Menampilkan SweetAlert setelah berhasil mengupdate data
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js'></script>";
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil diupdate.',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'index.php';
                }
            });
        </script>";
    } else {
        echo "Error updating record";
    }
    ?>


</body>

</html>