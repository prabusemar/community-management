<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delete Data</title>

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

    $id = $_GET['id'];

    $sql = "DELETE FROM data_komunitas WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        echo "<script>
            $(document).ready(function(){
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data berhasil dihapus.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(function() {
                    window.location = 'index.php';
                });
            });
         </script>";
    } else {
        echo "Error deleting record";
    }
    ?>

</body>

</html>