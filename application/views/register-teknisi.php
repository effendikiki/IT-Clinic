<body>
  <div style="background-image: url('<?php echo base_url(); ?>assets/img/bg-register-tech.jpg');background-repeat: repeat-y;">
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><strong>IT - Clinic</strong></a>
      </div>
    </nav>
    <!-- akhir navbar -->

    <main class="main">
      <span class="mask bg-tertiary alpha-9"></span>
      <div class="container d-flex align-items-center no-padding">
        <div class="col">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="card shadow-lg bg-tertiary text-white mt-5">
                <div class="card-body">
                  <span class="clearfix"></span>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"><img class="ml-3" src="<?php echo base_url(); ?>assets/img/stetoscope.png" style="width: 150px"></div>
                    <div class="col-md-4"></div>
                  </div>
                  <h4 class="heading h5 text-white text-center pt-4 pb-2">Halo :D<br><br>
                    silahkan isi data-data berikut untuk melengkapi pendaftaran sebagai mitra IT-Clinic</h4>
                  <?php
                  if ($this->session->flashdata('message') != '') {
                  ?>
                    <div class="alert alert-primary">
                      <?php echo $this->session->flashdata('message'); ?>
                    </div>
                  <?php
                  }
                  ?>
                  <form class="form-tertiary" action="<?php echo site_url(); ?>register/register_technician_process" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                      <label>Foto Profile</label>
                      <br>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="image" required />
                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label>Username</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Username" required>
                      </div>
                      <div class="col">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama lengkap" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class=" mt-3">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label class="">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label class=" mt-3">Alamat</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                      <label class="">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon" required>
                    </div>
                    <div class="form-group">
                      <label>Pendidikan Terakhir</label>
                      <select class="form-control" id="education" name="education" required>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="D1/D2">D1/D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                      </select>
                    </div>

                    <div class="mt-4 text-center">
                      <br>
                      <p><input type="checkbox" required> &nbsp Saya menerima <a href="#" class="text-white"> <u>Syarat & Ketentuan dari IT-Clinic</u></a> </p>
                    </div>
                    <button type="submit" class="btn btn-block btn-lg bg-white mt-4 text-tertiary">Daftar</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- cdn js -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
  <script>
    $('#inputGroupFile02').on('change', function() {
      //get the file name
      var fileName = $(this).val();
      var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(cleanFileName);
    })
  </script>
</body>

</html>