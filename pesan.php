<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="cssblog/bootstrap.min.css" rel="stylesheet">
    

  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
           
            <form action="send_pendaftar.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Pesan</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="nickname" placeholder="Nama">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="nohp" placeholder="No Handphone">
                </div>

                <!-- <div class="form-group">
                    <input type="text" class="form-control" name="repassword" placeholder="Re-Password">
                </div> -->

                <input type="submit" class="" value="Daftar" />
                
               
            </form>
        </div>


    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>