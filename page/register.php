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
<body class="d-flex flex-column align-items-center p-2">
    <div class="card login-box" style="width: 18rem;">
        <img src="https://images.pexels.com/photos/1036808/pexels-photo-1036808.jpeg?cs=srgb&dl=pexels-dominika-roseclay-1036808.jpg&fm=jpg&w=640&h=410" class="card-img-top" height="100px">
        <div class="card-body">
            <h5 class="card-title">Register Account</h5>
            <p class="card-text">
                <form method="post" action="../script/add-account.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password-re" class="form-label">Re-Type Password</label>
                        <input type="password" class="form-control" id="password-re" name="password-re" required>
                    </div>
                    <div class="mb-3">
                        Already Have Account? <a href="../index.php" class="link-info" style="text-decoration: none;">Login Here</a>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </p>
        </div>
    </div>
</body>
</html>