<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query($conn, "select * from Tabel_pegawai where Id = '" . $_GET['Id'] . "'");
    $data_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>

    <section class="vh-100" style="background-color: #2779e2;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 align="center" class="text-white mb-4">Ubah Pegawai</h1>

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <form action="proses_ubah_pegawai.php" method="post">
                                <input type="hidden" name="Id" value="<?= $data_pegawai['Id'] ?>" />

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">NIK</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" name="NIK" class="form-control form-control-lg" value="<?= $data_pegawai['NIK'] ?>" required />
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Nama</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" name="Nama" class="form-control form-control-lg" value="<?= $data_pegawai['Nama'] ?>" required />
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <textarea name="Alamat" class="form-control form-control-lg" rows="3" required><?= $data_pegawai['Alamat'] ?></textarea>
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <select name="Jenis_kelamin" class="form-select form-select-lg" required>
                                            <option value="" disabled>Pilih Jenis Kelamin</option>
                                            <option value="L" <?= $data_pegawai['Jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                            <option value="P" <?= $data_pegawai['Jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Nomor Telepon</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" name="No_telp" class="form-control form-control-lg" value="<?= $data_pegawai['No_telp'] ?>" required />
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Jabatan</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <select name="id_jabatan" class="form-select form-select-lg" required>
                                            <option value="" disabled>Pilih Jabatan</option>
                                            <?php
                                            $qry_jabatan = mysqli_query($conn, "select * from tabel_jabatan");
                                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                                $selected = ($data_jabatan['id_jabatan'] == $data_pegawai['id_jabatan']) ? 'selected' : '';
                                                echo '<option value="' . $data_jabatan['id_jabatan'] . '" ' . $selected . '>' . $data_jabatan['Nama_jabatan'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="password" name="Password" class="form-control form-control-lg" placeholder="Masukkan Password Baru" />
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Ubah Pegawai</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>