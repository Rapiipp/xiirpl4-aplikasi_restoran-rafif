<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="gambar/logo hisana.png" alt="" height="80" width="80">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-light">Hisana Freid Chicken</h1>
                </div>
            </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
            </a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Start Home -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="gambar/slide-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/hisana-menu-varian-1-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/hisana-menu-varian-2-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/hisana-menu-varian-2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <hr class="mg">
                <h1 class="text-center" id="menu"><u>Menu Paket</u></h1>
                <!-- End Home -->

                <hr class="mt-3">

                <div class="row">
                    <?php
                    $menupakets =
                        [
                            [
                                'kode' => 'p1',
                                'nama_paket' => 'Paket Combo 1',
                                'isi_paket' => '<br>
                                                3 Cheese Burger <br>
                                                3 French Fries <br>
                                                4 Potong Ayam <br>
                                                2 Coca-cola <br>
                                                1 Saus Keju <br>
                                                1 Saus Sambal',
                                'harga_paket' => '150000',
                                'gambar' => 'gambar/gambar-1.jpg'
                            ],
                            [
                                'kode' => 'p2',
                                'nama_paket' => 'Paket Combo 2',
                                'isi_paket' => '  <br>
                                                2 Cheese Burger <br>
                                                2 French Fries <br>
                                                3 Potong Ayam <br>
                                                2 Saus Keju',
                                'harga_paket' => '125000',
                                'gambar' => 'gambar/gambar 2.jpg'
                            ],
                            [
                                'kode' => 'p3',
                                'nama_paket' => 'Paket Combo 3',
                                'isi_paket' => ' <br>
                                                1 Cheese Burger <br>
                                                1 Coca-cola <br>
                                                1 French Fries',
                                'harga_paket' => '100000',
                                'gambar' => 'gambar/gambar-3.jpg'
                            ],
                            [
                                'kode' => 'p4',
                                'nama_paket' => 'Paket Combo 4',
                                'isi_paket' => ' <br>
                                                1 Cheese Burger <br>
                                                1 Coca-cola <br>
                                                1 French Fries',
                                'harga_paket' => '100000',
                                'gambar' => 'gambar/gambar-4.png'
                            ],
                        ];
                    foreach ($menupakets as $data) {
                        ?>
                        <div class="col">
                            <div class="card mb-3" style="width: 18rem;">
                                <img src="<?php echo $data['gambar'] ?>" alt="....">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_paket'] ?></h5>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalToggle<?php echo $data['kode'] ?>">
                                        Detail Paket
                                    </button>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#pesanModal<?php echo $data['kode'] ?>">
                                        Pesan Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Detail-->
                        <div class="modal fade" id="exampleModalToggle<?php echo $data['kode'] ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail
                                            <?php echo $data['nama_paket'] ?>
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <tr>
                                                <th>Isi Paket</th>
                                                <td><?php echo $data['isi_paket']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Harga Per Paket</th>
                                                <td><?php echo $data['harga_paket']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#pesanModal<?php echo $data['kode'] ?>">Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                        <!-- Modal Pesan-->
                        <div class="modal fade" id="pesanModal<?php echo $data['kode'] ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lengkapi Data Pesanan
                                            <?php echo $data['nama_paket'] ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="order.php" method="post"
                                            id="pesanForm<?php echo $data['kode'] ?>" target="_blank">
                                            <div class="form-group">
                                                <label for="namaPelanggan<?php echo $data['kode'] ?>" required>Nama Pelanggan</label>
                                                <input type="text" id="namaPelanggan<?php echo $data['kode'] ?>"
                                                    name="namaPelanggan" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlahPesanan<?php echo $data['kode'] ?>" required>Jumlah Pesanan</label>
                                                <input type="number" id="jumlahPesanan<?php echo $data['kode'] ?>"
                                                    name="jumlahPesanan" class="form-control" required>
                                            </div>
                                            <input type="hidden" name="kodePaket" value="<?php echo $data['kode'] ?>">
                                            <input type="hidden" name="hargaPaket"
                                                value="<?php echo $data['harga_paket'] ?>">
                                            <input type="hidden" name="namaPaket" value="<?php echo $data['nama_paket'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Pesan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->


                    <?php } ?>
                </div>
                <!-- Start Contact -->
                <div class="container" id="kontak">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col bg-danger">
                            <p class="text-center text-warning fs-1">08111 537 537</p>
                            <p class="text-center text-light fs-2">Kepuasan Anda Adalah Tujuan Kami</p>
                            <img src="gambar/gambar kontak.png" alt="" class="rounded-bottom">
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <!-- End Contact -->
                <!-- Start Footer -->
                <div class="row mt-2 fixed-bottom">
                    <div class="col text-center pt-2 pb-2 bg-danger text-light">
                        Copyright &copy; Rafif An Nizar Ramadhan - <?php echo date('Y')?>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous"></script>
</body>

</html>