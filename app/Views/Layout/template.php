<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <link rel="icon" href="<?= base_url("assets/img/logo_unsika.png") ?>" type="image/gif">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Absensi Dosen</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom css -->
    <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/css/card.css") ?>" rel="stylesheet">

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

</head>

<body>
    <br><br>
    <?= $this->include("layout/navbar"); ?>
    <?= $this->renderSection('content') ?>

    <!-- Your scripts should be placed at the end of the body for better performance -->

    <!-- jQuery -->
    <script src="<?= base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url("assets/js/bootstrap.js"); ?>"></script>
    <!-- Custom JS -->
    <script src="<?= base_url("assets/js/custom.js"); ?>"></script>

    <!-- Your specific script -->
    <script>
        // Your JavaScript code here
    </script>
</body>

</html>