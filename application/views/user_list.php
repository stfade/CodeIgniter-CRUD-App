<?php
  // print_r($directory);

  // die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("../"); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("../"); ?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <button type="button" class="btn btn-tool" onclick="addPanel()">
                    <ion-icon name="Add"></ion-icon>
                </button>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 12%">
                          Avatar
                      </th>
                      <th style="width: 15%">
                          Isim
                      </th>
                      <th style="width: 15%">
                          Soyisim
                      </th>
                      <th style="width: 20%">
                          Numara
                      </th>
                      <th style="width: 15%">
                          Mail
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody> <?php foreach ($directory as $users) { ?>
                <tr>
                      <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="<?php echo base_url("../"); ?>assets/dist/img/<?php echo $users->avatar; ?>">
                            </li>
                        </ul>
                      </td>
                      <td>
                        <a>
                          <?php echo $users->name; ?>
                        </a>
                      </td>
                      <td>
                        <a>
                          <?php echo $users->surname; ?>
                        </a>
                      </td>
                      <td>
                        <?php echo $users->number; ?>
                      </td>
                      <td class="project_progress">
                        <?php echo $users->mail; ?>
                      </td>
                      <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="<?php echo base_url("updatePage/test/$users->id"); ?>">
                            <i class="fas fa-pencil-alt"></i>
                            Edit 
                        </a>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url("crud/delete/$users->id"); ?>">
                              <i class="fas fa-trash"></i>
                              Delete  
                          </a>
                      </td>
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
  </div>

<form action="../crud/create" method="post"> 
  <div id="add_table">
    <div class="">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Yeni Kisi Ekle</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

    <div class="card-body">
      <div class="form-group">
        <label for="inputName">Ad</label>
        <input type="text" id="inputName" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label for="inputSurname">Soyad</label>
        <input type="text" id="inputSurname" name="surname" class="form-control">
      </div>

      <div class="form-group">
        <label for="inputNo">Numara</label>
        <input type="text" id="inputNo" name="number" class="form-control">
      </div>

      <div class="form-group">
        <label for="inputMail">Mail</label>
        <input type="text" id="inputMail" name="mail" class="form-control">
      </div>

      <div class="form-group">
        <label>
          <input type="radio" name="img" id="img1" value="avatar.png" checked>
          <img alt="Avatar" class="table-avatar" src="<?php echo base_url("../"); ?>assets/dist/img/avatar.png">
        </label>
      </div>

      <div class="form-group">
        <label>
          <input type="radio" name="img" id="img2" value="avatar2.png">
          <img alt="Avatar" class="table-avatar" src="<?php echo base_url("../"); ?>assets/dist/img/avatar2.png">
        </label>
      </div>

      <div class="form-group">
        <label>
          <input type="radio" name="img" id="img3" value="avatar3.png">
          <img alt="Avatar" class="table-avatar" src="<?php echo base_url("../"); ?>assets/dist/img/avatar3.png">
        </label>
      </div>

      <div class="form-group">
        <label>
          <input type="radio" name="img" id="img4" value="avatar4.png">
          <img alt="Avatar" class="table-avatar" src="<?php echo base_url("../"); ?>assets/dist/img/avatar4.png">
        </label>
      </div>

      <div class="form-group">
        <label>
          <input type="radio" name="img" id="img5" value="avatar5.png">
          <img alt="Avatar" class="table-avatar" src="<?php echo base_url("../"); ?>assets/dist/img/avatar5.png">
        </label>
      </div>
      <button class="btn btn-primary btn-block" type="submit" value="<?php echo $this->crud_model->get_session_id($_SESSION['mail']); ?>" name="submit">Ekle</button>
    </div>
  </div>

</form>
    <!-- jQuery -->
<script src="<?php echo base_url("../"); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url("../"); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("../"); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("../"); ?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url("../"); ?>assets/custom.js"></script>
</body>
</html>