<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Form Absensi</title>
</head>

<?php $session = session(); ?>

<body class="container mt-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url("/absen") ?>">Absen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Form Absensi</h1>
            <form action="<?= base_url("/save"); ?>" method="post">
                <div class="form-group">
                    <label for="nik">Masukkan NIK</label>
                    <input type="number" class="form-control" id="nik" placeholder="15 digit NIK" name="nik" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            <?php if ($session->getFlashdata("success")) : ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <?= $session->getFlashData("success"); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif ($session->getFlashdata("error")) : ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <?= $session->getFlashData("error"); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>