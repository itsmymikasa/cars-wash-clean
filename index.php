<?php
session_start();
include 'database/database.php';
include 'config/flasher.php';

function paket()
{
    return mysqli_query($GLOBALS['db'], "SELECT * FROM paket_pencucian");
}

function antrian()
{
    $tgl = date("Y-m-d");
    return mysqli_query($GLOBALS['db'], "SELECT * FROM antrian INNER JOIN mobil ON antrian.no_plat = mobil.no_plat WHERE tanggal = '$tgl'");
}

$noa = mysqli_num_rows(antrian());
$merk = mysqli_query($db, "SELECT * FROM merk_mobil");
$tipe = mysqli_query($db, "SELECT * FROM tipe_mobil");
$paket = paket();
$pkt = paket();
$pktc = paket();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanCars</title>
    <link rel="icon" href="https://www.iconpacks.net/icons/2/free-car-icon-2901-thumb.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="resources/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="resources/modules/prism/prism.css">
    <link rel="stylesheet" href="resources/modules/datatables/css/datatables.min.css">
    <link rel="stylesheet" href="resources/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="resources/modules/select2/dist/css/select2.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/components.css">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!--style manual-->
</head>

<body id="grad1">
    <div id="app">
        <section class="jumbotron">
            <div align="right"><a href="../carwash/admin/index.php"><button type="button" id="lgn-admin" class="btn btn-primary text-dark">Login Admin</button></a></div>
            <div class="container">
                <h1 class="display-1" style="color: black; font-family: sans-serif;" align="center">
                    <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/aaodnvls.json" trigger="loop" colors="primary:#242424,secondary:#242424" style="width:120px;height:120px">
                    </lord-icon>
                    <br> Cuci mobil <br>
                    di <b>CleanCars</b>
                </h1>
                <br>
                <div align="center">
                    <button type="button" id="btnmd" class="btn btn-primary text-dark">Antri Sekarang!</button>
                    <button type="button" id="crant" class="btn btn-primary text-dark">Check Antri</button>
                </div>
                <br><br>
                <h3 class="display-3" style="color: black; font-size: 24px; font-family: sans-serif;" align="center">Booking cuci mobil,
                    Lihat harga cuci, Dijamin Bersih <br> Cepat selesai dan banyak lagi</h3> 
                <!-- card -->   
                <div align="center">
                    <div class="row mt-5">
                        <div class="col-lg" data-aos="zoom-in">
                            <div style="font-size: 20px; color: black;" class="text-dark login-brand">About Us</div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg" data-aos="zoom-in">
                            <div class="card-title" style="color: black;">Perfectly Clean</div>
                            <div>
                                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/gazjnoea.json" trigger="hover" colors="primary:#6777ef,secondary:#eee966" style="width:100px;height:100px">
                                </lord-icon>
                            </div>
                            <div style="color: black;">CleanCars will assure you to have a <br> perfectly clean car</div>
                            <div>
                            </div>
                        </div>
                        <div class="col-lg" data-aos="zoom-in">
                            <div class="card-title" style="color: black;">Save your money!</div>
                            <div>
                                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/yeallgsa.json" trigger="hover" colors="primary:#6777ef,secondary:#eee966" style="width:100px;height:100px">
                                </lord-icon>
                            </div>
                            <div style="color: black;">CleanCars provide a cheap service</div>
                            <div>
                            </div>
                        </div>
                        <div class="col-lg" data-aos="zoom-in">
                            <div class="card-title" style="color: black;">Look at the progress</div>
                            <div>
                                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/tvyxmjyo.json" trigger="hover" colors="primary:#6777ef,secondary:#eee966" style="width:100px;height:100px">
                                </lord-icon>
                            </div>
                            <div style="color: black;">You can look what is happening to your <br> car while its cleaning.</div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <!-- end about us -->
                    <div class="row mt-5">
                        <div class="col-lg" data-aos="zoom-in">
                            <div style="font-size: 20px; color: black;" class="text-dark mb-4 login-brand">Paket tersedia</div>
                        </div>
                    </div>
                    <div class='row mt-4 d-flex justify-content-center'>
                        <?php while ($d = mysqli_fetch_assoc($pkt)) : ?>
                            <div class="col-4" data-aos="zoom-in">
                                <div class="card-title" style="color: black;"><?= $d['nama_paket'] ?></div>
                                <div style="color: black;" class="mb-3">RP. <?= $d['harga_paket'] ?></div>
                                <div style="color: black;"><?= $d['desc_paket'] ?></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-lg" data-aos="zoom-in">
                    </div>
                    <!-- Contact us -->
                    <div class="row mt-5">
                        <div class="col-lg" data-aos="zoom-in">
                            <div style="font-size: 20px; color: black;" class="text-dark mb-4 login-brand">Kontak Kami</div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg" data-aos="zoom-in">
                            <a name="" id="" class="btn btn-info" href="contact.php" role="button">Klik disini!</a>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="fixed-bottom b-example-divider"></div>
                    <div class="container">
                        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                            <div class="col-md-4 d-flex align-items-center">
                                <span class="text-muted">&copy; 2022 CleanCars</span>
                            </div>
                        </footer>
                    </div>
                </div>
        </section>
    </div>
    <div class="modal modal-xl" id="cariAntrian" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-2" id="exampleModalToggleLabel">Data Antrian</h1>
                </div>
                <div class="modal-body modal-dialog-scrollable row m-0 p-0">
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for="search" class="form-label">Masukan No Plat</label>
                            <input class="form-control" type="text" name="search" id="search" maxlength="20">
                            <div id="pwindicator" class="pwindicator">
                                <div id="pwindicate" class="label text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div id="result" class="col-12 row mt-2 d-none m-0 p-0">
                        <div class="col-12 mb-3">
                            <label for="plt" class="form-label">No Plat</label>
                            <input id="plt" class="form-control" disabled>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="pkt" class="form-label">Nama Paket</label>
                            <input id="pkt" class="form-control" disabled>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="ant" class="form-label">No Antrian</label>
                            <input id="ant" class="form-control" disabled>
                        </div>
                        <div class="col-12">
                            <label for="sta" class="form-label">Status</label>
                            <input id="sta" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-xl" id="tambahAntrian" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-2" id="exampleModalToggleLabel">Daftar</h1>
                </div>
                <form method="POST" id="formAntrian">
                    <div class="modal-body modal-dialog-scrollable m-0">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input maxlength="50" type="text" class="form-control" autoComplete="off" name="nama" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="no" class="form-label">Nomor HP</label>
                            <input type="number" min="0" class="form-control" autoComplete="off" name="no" id="no" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="plat" class="form-label">Nomor plat</label>
                                <input maxlength="12" type="text" class="form-control" autoComplete="off" name="plat" id="plat" required>
                            </div>
                            <div class="col">
                                <label for="merk" class="form-label">Merk Mobil</label>
                                <select type="text" class="form-control select2" data-width="100%" name="merk" id="merk" required />
                                <option selected disabled>Pilih Merk</option>
                                <?php while ($d = mysqli_fetch_assoc($merk)) : ?>
                                    <option value="<?= ucFirst($d['merk_mobil']) ?>"><?= ucFirst($d['merk_mobil']) ?></option>
                                <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="tipe" class="form-label">Tipe Mobil</label>
                                <select type="text" class="form-control select2" data-width="100%" name="tipe" id="tipe" required />
                                <option selected disabled>Pilih Tipe</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="ukuran" class="form-label">Ukuran</label>
                                <input class="form-control" name="ukuran" id="ukuran" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="paket" class="form-label">Paket Pencucian</label>
                                <select class="form-control" name="paket" id="paket" required>
                                    <option value="" selected disabled>Pilih Paket</option>
                                    <?php while ($d = mysqli_fetch_assoc($paket)) : ?>
                                        <option value="<?= $d['id_paket'] ?>"><?= ucWords($d['nama_paket']) ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="harga" class="form-label">Biaya Biaya Pencucian</label>
                                <input type="number" name="harga" class="form-control" id="harga" disabled value="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="tanggal" class="form-label">Tanggal Antrian</label>
                                <input id="tanggal" type="text" class="form-control" disabled value="<?= $tgl = date("Y-m-d"); ?>" required>
                            </div>
                            <div class="col">
                                <label for="no" class="form-label">No Antrian</label>
                                <input id="no" type="text" class="form-control" disabled value="<?= (mysqli_num_rows(mysqli_query($db, "SELECT id_antrian from antrian WHERE tanggal = '$tgl'")) + 1) ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <a class="btn btn-info px-4" href="contact.php" role="button">Contact</a>
                        <span>
                            <button id="submit" type="submit" class="btn btn-success mx-2">Submit</button>
                            <button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancel</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Footer -->

    <!-- General JS Scripts -->
    <script src="resources/modules/jquery.min.js"></script>
    <script src="resources/modules/popper.js"></script>
    <script src="resources/modules/tooltip.js"></script>
    <script src="resources/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="resources/modules/moment.min.js"></script>
    <script src="resources/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="resources/modules/prism/prism.js"></script>
    <script src="resources/modules/datatables/datatables.min.js"></script>
    <script src="resources/modules/izitoast/js/iziToast.min.js"></script>
    <script src="resources/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="resources/modules/chart.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="resources/js/page/bootstrap-modal.js"></script>
    <script src="resources/js/page/modules-toastr.js"></script>
    <script src="resources/js/page/modules-chartjs.js"></script>

    <!-- Template JS File -->
    <script src="resources/js/scripts.js"></script>
    <script src="resources/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            <?php Flash() ?>

            var biaya = 0;
            var paket = 0;
            var controller = 'admin/controllers/ControllerHome.php'

            $('#btnmd').click(function(e) {
                $('#tambahAntrian').modal('show')
            });

            $('#crant').click(function(e) {
                $('#cariAntrian').modal('show')
            });

            $('#search').change(function(e) {
                $.ajax({
                    url: controller,
                    method: 'GET',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response['plt']) {
                            $('#pwindicate').html(" ");
                            $('#result').removeClass('d-none');
                            $.each(response, function(key, value) {
                                $('#' + key).val(value);
                            });
                        } else {
                            $('#result').addClass('d-none');
                            $('#pwindicate').html("Data antrian tidak ada");
                        }
                    }
                })
            });

            $('#plat').on('change', function(e) {
                $.ajax({
                    url: controller,
                    method: 'GET',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        biaya = parseInt(response['biaya'])
                        $.each(response, function(key, value) {
                            $('#' + key).val(value);
                        });
                        $('#harga').val(biaya + paket)
                    },
                })
            })

            $('#merk').on('change', function(e) {
                $.ajax({
                    url: controller,
                    method: 'GET',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        $('#tipe').html('<option selected disabled> Pilih Tipe </option>')
                        $.each(response['tipe'], function(i, item) {
                            $('#tipe').append($('<option>', {
                                value: item,
                                text: item
                            }));
                        });
                    }
                })
            })

            $('#tipe').on('change', function(e) {
                $.ajax({
                    url: controller,
                    method: 'GET',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        biaya = parseInt(response['biaya'])
                        console.log(response)
                        $('#ukuran').val(response['ukuran'])
                        $('#harga').val(biaya + paket)
                    }
                })
            })

            $('#paket').on('change', function(e) {
                $.ajax({
                    url: controller,
                    method: 'GET',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        paket = parseInt(response['harga'])
                        $('#harga').val(biaya + paket)
                    }
                })
            })

            $('#formAntrian').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: $(this).attr('method'),
                    url: controller,
                    data: $(this).serialize(),
                    success: function(response) {
                        window.location = window.location
                    }
                });
            });
        })
    </script>
</body>

</html>