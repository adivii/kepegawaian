<?php

ob_start();

session_start();

if(!(isset($_SESSION['role']) && isset($_SESSION['username']))){
    header("location: ../index.php");
}else{
    if($_SESSION['role'] != "calon"){
        header("location: ../index.php");
    }else{
        include "../script/connection.php";

        $user = $_SESSION['username'];
        $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `calon_pegawai` WHERE `username`='$user';"));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepegawaian | Register</title>
    <link rel="shortcut icon" href="https://radarlampung.disway.id/assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/layout.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/font.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>
</head>
<body class="d-flex flex-column p-2">
    <!-- As a link -->
    <nav class="navbar bg-transparent sticky-top">
        <div class="container-fluid">
            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </a>
        </div>
    </nav>

    <div class="card login-box align-self-center" style="width: 30rem;">
        <img src="https://images.pexels.com/photos/1036808/pexels-photo-1036808.jpeg?cs=srgb&dl=pexels-dominika-roseclay-1036808.jpg&fm=jpg&w=640&h=410" class="card-img-top" height="250px">
        <div class="card-body">
            <h5 class="card-title">Update Account</h5>
            <p class="card-text">
                <form method="post" action="../script/update-calon-pegawai-account.php">
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" value="<?= $data['nik'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="posisi" class="form-label">Posisi yang Dilamar</label>
                        <select class="form-select" id="posisi" name="posisi" aria-label="Default select example">
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun-lulus" class="form-label">Tahun Lulus</label>
                        <input type="number" class="form-control" id="tahun-lulus" name="tahun-lulus" value="<?= $data['tahun_lulus'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan-terakhir" class="form-label">Pendidikan Terakhir</label>
                        <select class="form-select" id="pendidikan-terakhir" name="pendidikan-terakhir" aria-label="Default select example">
                            <option value="SD" <?php if($data['pendidikan_terakhir'] == "SD"){echo "selected";} ?>>SD</option>
                            <option value="SMP" <?php if($data['pendidikan_terakhir'] == "SMP"){echo "selected";} ?>>SMP</option>
                            <option value="SMA" <?php if($data['pendidikan_terakhir'] == "SMA"){echo "selected";} ?>>SMA</option>
                            <option value="S1" <?php if($data['pendidikan_terakhir'] == "S1"){echo "selected";} ?>>S1</option>
                            <option value="S2" <?php if($data['pendidikan_terakhir'] == "S2"){echo "selected";} ?>>S2</option>
                            <option value="S3" <?php if($data['pendidikan_terakhir'] == "S3"){echo "selected";} ?>>S3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </p>
        </div>
    </div>

    <!-- Sidebar Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a href="./home.php" class="offcanvas-title" id="offcanvasExampleLabel" style="font-weight: bold;">
                <img src="https://radarlampung.disway.id/assets/logo.png" height="20px" alt="Logo">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mt-3" id="profile">
                <a class="nav-link" href="./profile.php">Profile</a>
                <hr>
            </div>
            <div class="mt-3" id="add-hrd">
                <a class="nav-link" href="./register-hrd.php">Buat Akun HRD</a>
                <hr>
            </div>
            <div class="mt-3" id="list-calon">
                <a class="nav-link" href="./list-pegawai.php">List Calon Pegawai</a>
                <hr>
            </div>
            <div class="mt-3" id="data-calon-input">
                <a class="nav-link" href="./calon-pegawai-input.php">Edit Data</a>
                <hr>
            </div>
            <div class="mt-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Agenda
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div id="lihat-agenda">
                        <li><a class="dropdown-item" href="#">Lihat Agenda</a></li>
                    </div>
                    
                    <div id="tambah-agenda">
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Tambah Agenda</a></li>
                    </div>
                </ul>
            </div>
            <div class="mt-3">
                <a class="btn btn-danger" href="../script/logout.php" role="button">Logout</a>
            </div>
        </div>
    </div>

    <script>
        load_posisi_available("edit");
        home_load("<?= $_SESSION['role'] ?>");
    </script>
</body>
</html>