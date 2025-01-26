                                           

          <?php 
                                                            
          $first_name = $column["first_name"];
          $surname = $column["surname"];
          $age = $column["age"];
          $number = $column["contact"];
          $bday = $column["bday"];
          $cstatus = $column["civil_status"];
          $occupation = $column["occupation"];
          $religion = $column["religion"];
          $sex = $column["sex"];
          $address = $column["home_address"];
          ?>







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
          
        <section class="card-section">
        <?php $res = db_select("patient")['data']; ?>

        <?php while($column = fetch_array($res)): ?>
        
        <?php
          $id =  $column['patientID'];
          $fname = $column['first_name'];
          $surname = $column['surname'];
          $cont = $column['age'];
          $add = $column['home_address'];
          ?>
        
        <div class="card">
            <a href="#" data-toggle="modal" data-target="#details-modal">
            
              <img src="<?=img("user.png")?>" alt="Profile Image">
            
              
            
            <h3></h3>
            <p><strong><?=$fname?><?=" "?><?=$surname?></strong> </p>
            <p><strong>Age: <?=$cont?></strong> </p>
            <p><strong><Address><?=$add?></Address></strong> </p>
            </a>
        </div>

        

        <?php endwhile; ?>
        </section>

        </div>
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

                <div class="row">
                <div class="col-6">
                <div class="form-group">
                  <label for="">Birthday:</label>
                  <input type="date" name="bday" class="form-control">
                </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                  <label for="">Contact Number:</label>
                  <input type="text" name="contact" class="form-control">
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-6">
                <div class="form-group">
                  <label for="">Home Address:</label>
                  <input type="text" name="address" class="form-control">
                </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                  <label for="">Age:</label>
                  <input type="text" name="age" class="form-control">
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-6">
                <div class="form-group">
                  <label for="">Sex:</label>
                  <input type="text" name="sex" class="form-control">
                </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                  <label for="">Civil Status:</label>
                  <input type="text" name="civilstatus" class="form-control">
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-6">
                <div class="form-group">
                  <label for="">Occupation:</label>
                  <input type="text" name="occupation" class="form-control">
                </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                  <label for="">Religion:</label>
                  <input type="text" name="religion" class="form-control">
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-6">
                <div class="form-group">
                  <label for="">Profile:</label>
                  <input type="file" name="photo" required class="form-control">
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


            <!-- -->


  <div class="modal fade bs-example-modal" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Update Resident</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="/crud/addresident" method="post" enctype="multipart/form-data">
            <div class="modal-body">

                

            <form action="<?=$id?>" method="post" >
                                              
                                        <div">
                                        <div>
                                        <div class="form-group">
                                            <label><strong>First name</strong></label>
                                            <input value="<?=$first_name?>" name="first_name" type="text" class="form-control" placeholder="Medicine Name">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><strong>Surname</strong></label>
                                            <input value="<?=$surname?>" name="surname" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Age</strong></label>
                                            <input value="<?=$age?>" name="hc_quantity" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Contact Number</strong></label>
                                            <input value="<?=$number?>" name="number" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Birthday</strong></label>
                                            <input value="<?=$bday?>" name="bday" type="date" class="form-control" placeholder="">
                                        </div>

                                        </div>


                                        <div>

                                        <div class="form-group">
                                            <label><strong>Civil status</strong></label>
                                            <input value="<?=$cstatus?>" name="cstatus" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Occupation</strong></label>
                                            <input value="<?=$occupation?>" name="occupation" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Religion</strong></label>
                                            <input value="<?=$religion?>" name="Religion" type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Sex</strong></label>
                                            <select class="form-select" id="dropdown1" name="sex">
                                            <option value="<?=$sex?>">Select</option>
                                           <?php
                                            $options = ["Male","Female"];
                                            foreach ($options as $id=>$name) {
                                            echo "<option value='$id'>$name</option>";
                                            }
                                            ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Address</strong></label>
                                            <input value="<?=$address?>" name="address" type="text" class="form-control" placeholder="">
                                        </div>

                                        
                                        </div>

                                        </div>

                                        <div align="right"">
                                        <button  style="width: 100px;";type="submit" class="btn btn-primary" >Save</button>
                                        </div>
                                        
                                    </form>
            </div>

            



            </div>
            <div class="modal-footer">
                
            </div>
            </form>
        </div>
    </div>
</div>


        <?=include_page("footer.php")?>
 

</body>

</html>

<style>
  .profile-card {
  width: 100%;
  max-width: 400px;
  margin: 0 auto;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  padding: 20px;
}

.profile-picture {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid #4caf50;
  margin-bottom: 15px;
}

.profile-details {
  list-style: none;
  padding: 0;
  margin: 10px 0 0 0;
  text-align: left;
}

.profile-details li {
  margin: 10px 0;
  font-size: 16px;
}

.profile-details li strong {
  color: #555;
}

  .card-section {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 20px;
  padding: 20px;
  background-color: #f8f9fa; /* Light background for the section */
}

.card {
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  text-align: center;
  padding: 15px 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

.card img {
  width: 100px;
  height: 100px;
  border-radius: 50%; /* Makes the image circular */
  border: 2px solid #ddd;
  margin-bottom: 15px;
}

.card h3 {
  font-size: 1.2rem;
  margin: 10px 0;
  color: #333;
}

.card p {
  font-size: 0.95rem;
  color: #555;
  margin: 5px 0;
  line-height: 1.5;
}

.submit{
  height: 40px;
  width: 100px;
  border: solid 1px black;
  border-radius: 10px;
  
}

</style>