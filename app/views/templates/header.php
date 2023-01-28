<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title><?= $data["judul"]; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container container-fluid">
            <a class="navbar-brand mx-3" href="<?= BASEURL; ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="nav-link active mx-3" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link active mx-3" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                    <a class="nav-link active mx-3" href="<?= BASEURL; ?>/about">About</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">