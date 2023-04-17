<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet_login.css">
    <link rel="icon" type="image/png" href="../admin/images/Asset%202.png" />
</head>
<body>
<section class="Form my-5 mx-5">
   <center> 
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <div class="mb-3">
                    <img src="../lemlang/Lelang_onlie.png" alt="" width="70%">
                </div>
                <h3>Register</h3>
                <form method="POST" action="proses_daftar.php">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <!-- name -->
                            <input type="text" class="form-control my-2 p-2" name="nama" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <!-- alamat -->
                            <textarea name="telp" class="form-control my-2 p-2" rows="3" placeholder="telepon" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <!-- Username -->
                            <input type="text" class="form-control my-2 p-2" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <!-- Password -->
                            <input type="password" class="form-control my-2 p-2" name="password" placeholder="********" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <!-- button -->
                            <button type="submit" class="btn1 mb-4">Register</button>
                        </div>
                    </div>
                    <p>Back to <a href="login.php" style="text-decoration: none">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</section> </center>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>