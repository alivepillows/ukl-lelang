<?php
session_start();
if($_SESSION['level']=="admin"){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

        
</head>
<body>

    <div class="card-body py-5 px-md-3">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form action="proses_daftar_admin.php" method ="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1">Nama Petugas</label>
                  <input type="text" name="nama_petugas" class="form-control" required/>
                </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Username</label>
              <input type="username" name="username" class="form-control" required/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4">Password</label>
              <input type="password" name="password" class="form-control" required/>
            </div>

            <label for="level">Pilih Level:</label>
                    <select name="level" class="mb-4"id="level">
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                    </select>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3">
              Sign up
            </button>
          </form>
          <a href='home.php?id=' class='btn btn-warning'>Kembali</a>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>