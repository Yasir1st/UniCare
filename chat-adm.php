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
    <link rel="stylesheet" href="adminStyle.css">
</head>

<body>
    <div class="main row">
        <!-- navbar  -->
        <div class="navigasi col-md-2">
            <h2 class="text-light fw-bolder mb-3 p-3">Unicare</h2>

            <div class="d-flex user-login p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="white"
                    class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <div class="ms-1">
                    <h5 class="fw-bold text-light">Mulyono</h5>
                    <p class="text-light">Admin</p>
                </div>
            </div>

            <div class="mt-4 menus">
                <div class="menu d-flex p-3 ps-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                        class="bi bi-envelope-arrow-down" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99zm1 7.105 4.708-2.897L1 5.383zM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1" />
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708z" />
                    </svg>
                    <a class="nav-link active text-light ms-2" aria-current="page" href="admin.php">Belum Dibaca</a>
                </div>
                <div class="menu d-flex p-3 ps-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                        class="bi bi-envelope-check" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                        <path
                            d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686" />
                    </svg>
                    <a class="nav-link active text-light ms-2" aria-current="page" href="telahDibaca.php">Telah
                        Dibaca</a>
                </div>
                <div class="menu d-flex p-3 ps-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                        <path fill-rule="evenodd"
                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                    </svg>
                    <a class="nav-link active text-light ms-2" aria-current="page" href="index.php">Keluar</a>
                </div>
            </div>

        </div>
        <!-- end  navbar-->

        <!-- isi -->
        <div class="container col-md-10 p-5">
            <div class="container p-4 bg-body-secondary rounded isi">
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
                            <h5 class="align-item-center mb-4">Userxyz</h5>
                        </div>

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
                                    jadi gini pak saya tuh sebenarnya resah
                                </div>
                            </div>
                        </div>
                        <!-- end chat your  -->

                        <!-- chat me -->
                        <div class="mychat d-flex mt-2">
                            <div class="pembatas d-flex">
                                <div class="isichat bg-primary-subtle p-3 me-2" style="">
                                    Kamu emang kenapa?
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
                                    gk tau juga saya pak
                                </div>
                            </div>
                        </div>
                        <!-- end chat your  -->

                        <!-- chat me -->
                        <div class="mychat d-flex mt-2">
                            <div class="pembatas d-flex">
                                <div class="isichat bg-primary-subtle p-3 me-2" style="">
                                    gtu tah, yaudah deh sehat2 orang baik
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
        </div>
        <!-- end isi -->
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>