<!DOCTYPE html>
<html lang="en">

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
    <center>
        <div class="card bg-light mb-5 mt-5" style="max-width: 18rem;">
            <div class="card-header bg-primary text-light">Login</div>
            <div class="card-body">
                <form action="<?= base_url(); ?>AuthController/cekUser" method="post">
                    <div class="form-group">
                        <label for="username" class="float-left">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <label for="password" class="float-left mt-3">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <input type="submit" value="Login" class="btn btn-success mt-4" style="width: 100%;">
                </form>
            </div>
        </div>
    </center>
</body>

</html>