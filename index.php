<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Komunitas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">

    <!-- Sweet Alert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>


    <style>
        .card {
            margin-bottom: 20px;
        }

        #kartu {
            margin-bottom: 3%;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-clipboard-list"></i> Data Komunitas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="add.php"><i class="fa-solid fa-plus"></i> Tambah Data Komunitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="album py-5 bg-light">
        <script>
            function hapusData(id) {
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus saja!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'delete.php?id=' + id;
                    }
                })
            }
        </script>

        <div class="container">
            <div class="row">
                <?php
                //include koneksi ke database
                include 'koneksi.php';

                //mengambil data dari tabel data_komunitas
                $sql = "SELECT * FROM data_komunitas";
                $result = mysqli_query($conn, $sql);

                //menampilkan data ke dalam card
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div id="kartu" class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['nama'] ?></h5>
                                    <p class="card-text"><?= substr($row['deskripsi'], 0, 90) . '...' ?></p>
                                    <p class="card-text"><?= $row['alamat'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal<?= $row['id'] ?>">Lihat</button>
                                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="hapusData(<?php echo $row['id']; ?>)">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?= $row['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel<?= $row['id'] ?>"><?= $row['nama'] ?></h5>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>" class="img-fluid">
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $row['deskripsi'] ?></p>
                                                <p>
                                                    <b>
                                                        Alamat:
                                                    </b>
                                                </p>
                                                <p><?= $row['alamat'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<div class='col-md-12'><p>Tidak ada data</p></div>";
                }
                mysqli_close($conn); //menutup koneksi ke database
                ?>
            </div>
        </div>
    </div>
    <footer class="text-center text-white bg-dark py-3">
        <p>&copy; 2023 Data Komunitas</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>

</body>

</html>