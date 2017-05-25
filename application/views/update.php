<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Masukkan Data</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="container">

    <form class="well form-horizontal" action="<?php echo base_url();?>index.php/Home/updateData"  enctype="multipart/form-data" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Silahkan Masukkan Data</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nomor Kain :</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"></span>
  <input  name="nomor_kain" placeholder="Nomor Kain" class="form-control"  type="text" value="<?php echo $nomor_kain ;?>">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Jenis Kain : </label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="jenis_kain" placeholder="Jenis Kain" class="form-control"  type="text" value="<?php echo $jenis_kain ;?>">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Panjang Kain (/m) : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></i></span>
  <input name="panjang_kain" placeholder="Panjang kain" class="form-control"  type="text" value="<?php echo $panjang_kain ;?>">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Harga Kain (/m) : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></i></span>
  <input name="harga_kain" placeholder="Harga Kain" class="form-control" type="text" value="<?php echo $harga_kain ;?>">
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Jenis Barang yang akan dihasilkan : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></i></span>
  <input name="jenis_barang" placeholder="Jenis Barang" class="form-control" type="text" value="<?php echo $jenis_barang ;?>">
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Detail Barang : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></i></span>
  <input name="detail_barang" placeholder="Detail Barang" class="form-control" type="text" value="<?php echo $detail_barang ;?>">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Hasil Jumlah Barang : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></i></span>
  <input name="hasil_jumlah_barang"" placeholder="Hasil Jumlah Barang Dari Kain" class="form-control" type="text" value="<?php echo $hasil_jumlah_barang ;?>">
    </div>
  </div>
</div>
<!-- Button -->
<div class="form-group" action=<?php echo base_url()."index.php/home/updateData/"?>>
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >SUBMIT<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
