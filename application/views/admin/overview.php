<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

  <?php $this->load->view("admin/_partials/navbar.php") ?>
  
  <div class="container-fluid">
    <div class="row">

      <?php $this->load->view("admin/_partials/sidebar.php") ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>
        <img src="https://garudacyber.co.id/an-component/media/upload-gambar-artikel/SPP_ONLINE.jpg" >
          <?php
          foreach ($siswa as $DataSiswa) :
          ?>
           
          <?php
          endforeach;
          ?>

      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>