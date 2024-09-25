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

    <div class="container p-4 bg-body-secondary mt-5 rounded isi">
        <div class="judul d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                class="bi bi-file-text mt-2 me-2" viewBox="0 0 16 16">
                <path
                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z" />
                <path
                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1" />
            </svg>
            <h2>Chat</h2>
        </div>
        <div class="garis rounded mb-3"></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="card bs-emphasis-color p-4 col-md-6 d-flex">
                <div class="d-flex userchat">
                    <h5 class="align-item-center mb-4">Admin</h5>
                </div>

                <!-- chat me -->
                <div class="mychat d-flex mt-2">
                    <div class="pembatas d-flex">
                        <div class="isichat bg-primary-subtle p-3 me-2" style="">
                            jadi gini pak saya tuh sebenarnya resah
                        </div>
                        <div class="d-flex flex-column">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray"
                                class="bi bi-person-circle me-2 mt-auto" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- end chat me  -->

                <!-- chat your -->
                <div class="yourchat d-flex mt-3">
                    <div class="d-flex">
                        <div class="d-flex flex-column">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray"
                                class="bi bi-person-circle me-2 mt-auto" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </div>
                        <div class="isichat p-3 me-2" style="">
                            Kamu emang kenapa?
                        </div>
                    </div>
                </div>
                <!-- end chat your  -->

                <!-- chat me -->
                <div class="mychat d-flex mt-2">
                    <div class="pembatas d-flex">
                        <div class="isichat bg-primary-subtle p-3 me-2" style="">
                            gk tau juga saya pak
                        </div>
                        <div class="d-flex flex-column">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray"
                                class="bi bi-person-circle me-2 mt-auto" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- end chat me  -->

                <!-- chat your -->
                <div class="yourchat d-flex mt-3">
                    <div class="d-flex">
                        <div class="d-flex flex-column">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray"
                                class="bi bi-person-circle me-2 mt-auto" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </div>
                        <div class="isichat p-3 me-2" style="">
                            gtu tah, yaudah deh sehat2 orang baik
                        </div>
                    </div>
                </div>
                <!-- end chat your  -->

                <div class="mt-5 p-1 sending d-flex">
                    <div class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="ketik disini...">
                    <div class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>