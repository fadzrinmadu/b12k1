<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

    <title>Project</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="<?= base_url('assets/') ?>img/logo.png">
        <span class="h3 ml-3 text-uppercase">Arcademy Bootcamp</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <!-- Akhir Navbar -->

    <!-- FLASH DATA -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>

    <!-- Content -->
    <div class="container">
      <div class="row mb-4">
        <div class="col">
          <a href="#" class="btn btn-warning text-white float-right btn-add" data-toggle="modal" data-target="#exampleModal">Add</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Work</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($employee as $row) : ?>
              <tr>
                <th><?= $row['employeeName'] ?></th>
                <th><?= $row['workName'] ?></th>
                <th>Rp. <?= number_format($row['salary']) ?></th>
                <th>
                  <a href="<?= site_url('home/hapus/'. $row['employeeID']) ?>" class="mr-4 btn-hapus">
                    <img src="<?= base_url('assets/') ?>img/trash.png" width="30px">
                  </a>
                  <a href="#" class="btn-edit" data-id="<?= $row['employeeID'] ?>" data-toggle="modal" data-target="#exampleModal">
                    <img src="<?= base_url('assets/') ?>img/edit.png" width="30px" >
                  </a>
                </th>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Akhir Content -->

    <!-- Modal ADD -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post">
            <input type="hidden" name="id" id="id">
            <div class="modal-body border-0">
              <div class="form-group mb-4">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name ...">
              </div>
              <div class="form-group mb-4">
                <select class="custom-select" name="work" id="work">
                  <option selected>Work ...</option>
                  <?php foreach ($work as $row) : ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group mb-4">
                <select class="custom-select" name="kategori" id="kategori">
                  <option selected>Salary ...</option>
                  <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['id'] ?>">Rp. <?= number_format($row['salary']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="modal-footer border-0">
              <button type="submit" class="btn btn-warning text-white shadow-sm text-uppercase">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Akhir Modal ADD -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/') ?>js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/script.js"></script>
  </body>
</html>