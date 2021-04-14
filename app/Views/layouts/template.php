<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/komik">Komik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <?php if (logged_in()) : ?>
                            <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
                        <?php else : ?>
                            <a class="nav-link active" aria-current="page" href="/login">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <?= $this->renderSection('content'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script>
        function previewImg() {
            const cover = document.querySelector('#cover');
            const imgPreview = document.querySelector('.img-preview');

            // const coverLabel = document.querySelector('.custom-file-label');
            // untuk mengubah label menjadi file name
            // coverLabel.textContent = cover.files[0].name;

            const fileCover = new FileReader();
            fileCover.readAsDataURL(cover.files[0]);

            fileCover.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>