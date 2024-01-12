<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Contact &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="resources/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/modules/fontawesome/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/components.css">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container pt-5 mt-5">
                <div class="row pt-5">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1 p-5">
                        <div class="login-brand">
                            CleanCars
                        </div>
                        <div class="card card-primary m-5 p-2">
                            <div class="card-header text-center">
                                <h4>Kontak Kami</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="admin/controllers/ControllerContact.php">
                                    <div class="form-group floating-addon">
                                        <label>Nama</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="far fas fa-user"></i>
                                                </div>
                                            </div>
                                            <input id="name" type="text" class="form-control" name="name" autofocus maxlength="50" required>
                                        </div>
                                    </div>
                                    <div class="form-group floating-addon">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                            </div>
                                            <input id="email" type="email" class="form-control" name="email" maxlength="30" required>
                                        </div>
                                    </div>
                                    <div class="form-group floating-addon">
                                        <label>No HP</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fas fa-phone"></i>
                                                </div>
                                            </div>
                                            <input id="no" type="number" class="form-control" name="no" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea class="form-control" data-height="150" maxlength="130" required name="pesan"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-round btn-lg btn-primary">
                                            Kirim Pesan!
                                        </button>
                                        <a href="index.php" class="btn btn-round btn-lg btn-danger text-light">
                                            Cancel
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="resources/modules/jquery.min.js"></script>
    <script src="resources/modules/popper.js"></script>
    <script src="resources/modules/tooltip.js"></script>
    <script src="resources/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="resources/modules/moment.min.js"></script>
    <script src="resources/js/stisla.js"></script>

    <!-- Page Specific JS File -->
    <script src="resources/js/page/utilities-contact.js"></script>

    <!-- Template JS File -->
    <script src="resources/js/scripts.js"></script>
    <script src="resources/js/custom.js"></script>
</body>

</html>