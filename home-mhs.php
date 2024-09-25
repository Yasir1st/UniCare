<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="userStyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid p-2">
            <a class="navbar-brand text-light ms-4 fw-bolder" href="#">Unicare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5">
                    <a class="nav-link active text-light me-3" aria-current="page" href="home-mhs.php">Home</a>
                    <a class="nav-link active text-light" aria-current="page" href="daftar-aduan-mhs.php">Daftar
                        Aduan</a>
                </div>
                <div class="d-flex me-5 pe-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                        class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <div class="dropdown ms-1">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Userxyz
                        </a>
                        <ul class="dropdown-menu mt-2 p-1">
                            <li><a class="dropper dropdown-item rounded" href="index.php">Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </nav>
    <div class="container p-4 bg-body-secondary mt-5 rounded">
        <div class="judul d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                class="bi bi-file-earmark-plus mt-2 me-2" viewBox="0 0 16 16">
                <path
                    d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5" />
                <path
                    d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
            </svg>
            <h2>Tambah Aduan Baru</h2>
        </div>
        <div class="garis rounded mb-3"></div>
        <form>
            <div class="input-group mb-3">
                <span class="input-group-text fw-bold" id="inputGroup-sizing-default">Judul Aduan</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="masukkan judul aduan disini ...">
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="masukkan deskripsi aduan disini ..." id="floatingTextarea2"
                    style="height: 200px"></textarea>
            </div>
            <div>
                <label for="exampleInputEmail1" class="form-label fw-bold">Bukti Pendukung :</label>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control bg-primary-subtle" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control bg-primary-subtle" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class=" row button-cus">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>