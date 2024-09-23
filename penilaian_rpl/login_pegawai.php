<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
   <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">

    <!-- Form -->
    <form action="proses_login_pegawai.php" method="post">
        <div class="card-body py-5 px-md-5">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h2 class="fw-bold mb-5">Login Untuk Pegawai</h2>
              
              <!-- NIK input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example3" name="NIK" class="form-control" /> <!-- Tambahkan name="NIK" -->
                <label class="form-label" for="form3Example3">NIK</label>
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example4" name="password" class="form-control" /> <!-- Tambahkan name="password" -->
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Submit button -->
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
              Log In
              </button>
              
            </div>
          </div>
        </div>
    </form>
    <!-- End Form -->
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>

