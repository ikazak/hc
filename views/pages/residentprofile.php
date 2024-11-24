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
          <div><button data-toggle="modal" data-target="#bd-example-modal-lg" type="button" id="sendfile">ADD</button></div>
        <section class="card-section">
        <div class="card">
            <img src="https://via.placeholder.com/250x150" alt="Profile Image">
            <h3>John Doe</h3>
            <p><strong>Contact:</strong> +1 234 567 890</p>
            <p><strong>Address:</strong> 123 Main St, Springfield</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/250x150" alt="Profile Image">
            <h3>Jane Smith</h3>
            <p><strong>Contact:</strong> +44 987 654 321</p>
            <p><strong>Address:</strong> 456 Elm St, Metropolis</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/250x150" alt="Profile Image">
            <h3>Emily Johnson</h3>
            <p><strong>Contact:</strong> +61 412 345 678</p>
            <p><strong>Address:</strong> 789 Oak St, Gotham</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/250x150" alt="Profile Image">
            <h3>Michael Brown</h3>
            <p><strong>Contact:</strong> +33 123 456 789</p>
            <p><strong>Address:</strong> 321 Pine St, Star City</p>
        </div>
        </section>

        </div>
    </div>
</div>


<div class="modal fade bs-example-modal" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Send files</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                  <label for="">Name:</label>
                  <input type="text" class="form-control">
                </div> 
                
                <div class="form-group">
                  <label for="">Name:</label>
                  <input type="text" class="form-control">
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
  .card-section {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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
  width: 100%;
  height: auto;
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

</style>