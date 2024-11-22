<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Density Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/css/paper-dashboard.css?v=2.0.1'); ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>assets/demo/demo.css" rel="stylesheet" /> -->
    <link
        href="https://cdn.datatables.net/v/bs5/dt-2.1.8/af-2.7.0/b-3.1.2/b-html5-3.1.2/b-print-3.1.2/r-3.0.3/datatables.min.css"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="<?php echo base_url('assets/user/images/density-logo2.png'); ?>">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                    Density Living
                    <!-- <div class="logo-image-big">
            <img src="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?php echo is_active_menu('guest'); ?>">
                        <a href="<?php echo site_url('guest'); ?>">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Guest</p>
                        </a>
                    </li>
                    <li class="<?php echo is_active_menu('room'); ?>">
                        <a href="<?php echo site_url('room'); ?>">
                            <i class="nc-icon nc-bank"></i>
                            <p>Rooms</p>
                        </a>
                    </li>
                    <li class="<?php echo is_active_menu('guestcheckin'); ?>">
                        <a href="<?php echo site_url('guestcheckin'); ?>">
                            <i class="nc-icon nc-key-25"></i>
                            <p>Check In & Check Out</p>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Density Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-magnify" href="javascript:;">
                                    <i class="nc-icon nc-layout-11"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="javascript:;">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <?php echo isset($content) ? $this->load->view($content, NULL, TRUE) : ''; ?>
            </div>
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#" target="_blank">2024 @ Density Living</a></li>
                                <!-- <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li> -->
                            </ul>
                        </nav>
                        <!-- <div class="credits ml-auto">
                            <span class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                            </span>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/admin/js/core/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/core/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/core/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url('assets/admin/js/plugins/chartjs.min.js'); ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-notify.js'); ?>"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url('assets/admin/js/paper-dashboard.min.js?v=2.0.1'); ?>"
        type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <!-- <script src="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>assets/demo/demo.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.datatables.net/v/bs5/dt-2.1.8/af-2.7.0/b-3.1.2/b-html5-3.1.2/b-print-3.1.2/r-3.0.3/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    <script>
        new DataTable('#example');
        new DataTable('#guest');
        new DataTable('#checkin');

        $(document).ready(function () {
            $('#room_id').select2({
                placeholder: "Select Room(s)",
                allowClear: true
            });

            // Fungsi untuk menghitung total harga
            function calculateTotalPrice() {
                const checkinDate = new Date($('#checkin_date').val());
                const checkoutDate = new Date($('#checkout_date').val());
                const duration = Math.max(1, (checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));
                $('#duration').val(duration);

                let total = 0;

                $('#room_id option:selected').each(function () {
                    const price = $(this).data('price');
                    total += price * duration;
                });

                const formattedTotalPrice = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(total);

                $('#total_price').val(formattedTotalPrice);
            }

            // Tambahkan event listener
            $('#room_id').on('change', calculateTotalPrice);
            $('#checkin_date, #checkout_date').on('change', calculateTotalPrice);
        });

        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('.sidebar-wrapper .nav li a');

            links.forEach(link => {
                const icon = link.querySelector('i');

                // Warna default berdasarkan apakah item aktif
                if (link.parentElement.classList.contains('active')) {
                    link.style.color = '#D2AB67';
                    if (icon) {
                        icon.style.color = '#D2AB67';
                    }
                }

                // Tambahkan efek hover menggunakan JavaScript
                link.addEventListener('mouseover', function () {
                    this.style.color = '#D2AB67';
                    if (icon) {
                        icon.style.color = '#D2AB67';
                    }
                });

                link.addEventListener('mouseout', function () {
                    this.style.color = '#D2AB67';
                    if (icon) {
                        icon.style.color = '#D2AB67';
                    }
                });
            });
        });

        $('#reservationSelect').change(function () {
            var reservationId = $(this).val();

            if (reservationId) {
                // Lakukan AJAX request untuk mendapatkan data reservasi
                $.ajax({
                    url: '<?php echo site_url('guest/get_reservation_data/'); ?>' + reservationId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            var data = response.data;
                            // Isi data pada field form berdasarkan data reservasi
                            $('#name').val(data.name);
                            $('#phone_number').val(data.phone);
                            $('#email').val(data.address);
                            $('#city').val(data.city);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('Failed to retrieve data. Please try again.');
                    }
                });
            } else {
                // Kosongkan fields jika tidak ada reservasi yang dipilih
                $('#name').val('');
                $('#phone_number').val('');
                $('#address').val('');
                $('#city').val('');
            }
        });

    </script>

</body>

</html>