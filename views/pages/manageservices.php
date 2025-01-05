<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=assets?>/images/favicon.png">
    <!-- Datatable -->
    <link href="<?=assets?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?=assets?>/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=assets?>//images/favicon.png">
    <link rel="stylesheet" href="<?=assets?>//vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=assets?>//vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="<?=assets?>//vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?=assets?>//css/style.css" rel="stylesheet">

</head>

<body>


        <?=include_page("nav.php")?>

        <?=include_page("header.php")?>

        <?=include_page("sidebar.php")?>

        

        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                <h4 class="card-title"><b>Services</b></h4>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;" data-toggle="modal" data-target="#bd-example-modal-lg" >
          <img src="<?=img("referral.jpg")?>" class="" alt="Card Image 1" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Referral</h5>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;">
          <img src="<?=img("family.jpg")?>" class="" alt="Card Image 2" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Family Planning</h5>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;">
          <img src="<?=img("immunazation.jpg")?>" class="" alt="Card Image 1" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Immunazation</h5>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;">
          <img src="<?=img("busong.jpg")?>" class="" alt="Card Image 2" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Prenatal</h5>
          </div>
        </div>
      </div>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="modal fade bs-example-modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add Resident</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="/crud/addresident" method="post" enctype="multipart/form-data">
            <div class="modal-body">

                <div class="row">
                  <div class="col-6">
                  <div class="form-group">
                    <label for="">First Name:</label>
                    <input type="text" name="fname" class="form-control">
                  </div> 
                  </div>
                  
                  <div class="col-6">
                  <div class="form-group">
                    <label for="">Surname:</label>
                    <input type="text" name="surname" class="form-control">
                  </div> 
                  </div>
                </div>

                

                



            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Send</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add Resident</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="/crud/addresident" method="post" enctype="multipart/form-data">
            <div class="modal-body">

                <div class="row">
                  <div class="col-6">
                  <div class="form-group">
                    <label for="">First Name:</label>
                    <input type="text" name="fname" class="form-control">
                  </div> 
                  </div>
                  
                  <div class="col-6">
                  <div class="form-group">
                    <label for="">Surname:</label>
                    <input type="text" name="surname" class="form-control">
                  </div> 
                  </div>
                </div>

                

                



            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Send</button>
            </div>
            </form>
        </div>
    </div>
</div>
                           
 
        <?=include_page("footer.php")?>
 

</body>

</html>
<style>
    .button{
        font-size: 20px;
        height: 80px;
        width: 300px;
    }
    .card-body{
        height: 400px;
    }
    td{
        color: blue;
        font-size: 17px;
    }
    .card-header{
        
        background-color: #011457;
        height: 70px;
    }
    .card-title{
        color: white;
        font-size: 20px;
    }
    
</style>