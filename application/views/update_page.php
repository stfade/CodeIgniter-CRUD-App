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

<?php foreach ($directory as $users) { ?>
    <form action="<?php echo base_url("updatePage/update") ?>" method="post"> 
    <div id="add_table">
      <div class="">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Duzenle</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
  
      <div class="card-body">
        <div class="form-group">
          <label for="inputName">Ad</label>
            <input type="text" id="inputName" name="name" class="form-control" value="<?php echo $users->name; ?>">
        </div>
  
        <div class="form-group">
          <label for="inputSurname">Soyad</label>
          <input type="text" id="inputSurname" name="surname" class="form-control" value="<?php echo $users->surname; ?>">
        </div>
  
        <div class="form-group">
          <label for="inputNo">Numara</label>
          <input type="text" id="inputNo" name="number" class="form-control" value="<?php echo $users->number; ?>">
        </div>
  
        <div class="form-group">
          <label for="inputMail">Mail</label>
          <input type="text" id="inputMail" name="mail" class="form-control" value="<?php echo $users->mail; ?>">
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
        <button class="btn btn-primary btn-block" type="submit" value="<?php echo $users->id; ?>" name="submit">Kaydet</button>
      </div>
    </div>
  
  </form>
<?php } ?>
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