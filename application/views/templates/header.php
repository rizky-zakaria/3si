<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>3si</title>

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <!-- customize -->
    <link rel="stylesheet" href="<?= base_url(); ?>../assets/css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>../assets/css/index.css">
    <link rel="stylesheet" href="<?= base_url(); ?>../assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>../assets/css/tabel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>../assets/css/dataTables.bootstrap4.min.css">

    <script defer src="<?= base_url(); ?>../assets/js/solid.js"></script>
    <script defer src="<?= base_url(); ?>../assets/js/fontawesome.js"></script>

    <script src="<?= base_url(); ?>../assets/js/jquery-3.3.1.js"></script>
    <script src="<?= base_url(); ?>../assets/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>../assets/js/dataTables.bootstrap4.min.js"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color: #fc0703;">
            <div class="sidebar-header" style="background-color: #fc0703;">
                <h3>3SI</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?= base_url('Dashboardkepala'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard </a>
                </li>
                <!-- <li>
                    <a href="<?= base_url('RapatController'); ?>"><i class="fas fa-calendar-alt"></i> Hasil Rapat </a>
                </li> -->
                <li>
                    <a href="<?= base_url('AgendaController'); ?>"><i class="fas fa-calendar-alt"></i> Rapat </a>
                </li>
                <!-- <?php
                        if ($this->session->userdata('role') == 1) {
                        ?>
                    <li>
                        <a href="<?= base_url('AbsensiController/view'); ?>"><i class="fas fa-calendar-alt"></i> Absensi </a>
                    </li>
                <?php
                        } elseif ($this->session->userdata('role') !== 2) {
                ?>
                    <li>
                        <a href="<?= base_url('AbsensiController'); ?>"><i class="fas fa-calendar-alt"></i> Absensi </a>
                    </li>
                <?php
                        }
                ?> -->
                <li>
                    <a href="<?= base_url('AnggotaController'); ?>"><i class="fas fa-user-friends"></i> Anggota</a>
                </li>
                <?php
                if ($this->session->userdata('role') != 3) { ?>
                    <li>
                        <a href="<?= base_url('UserController'); ?>"><i class="fas fa-user-friends"></i> User </a>
                    </li>
                <?php } ?>
                <li>
                    <a href="<?= base_url('DashboardController/logout'); ?>"><i class="fas fa-arrow-right"></i> Keluar</a>

                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-primary " style="background-color: #fc0703;">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-light">
                        <i class="fas fa-align-justify text-danger"></i>
                    </button>
                    <div class="text-white">
                        <span>Hallo <?= $this->session->userdata('username'); ?></span>
                    </div>
                </div>

            </nav>