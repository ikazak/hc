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

        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title"></h4>
                                <p class="mb-0 subtitle"><code></code></p>
                            </div>
                            <div class="card-body">
                            <button type="button" class="btn btn-square btn-outline-secondary button"><b>Immunization</b></button>   
                                <button type="button" class="btn btn-square btn-outline-secondary button"><b>Prenatal</b></button>
                                <button type="button" class="btn btn-square btn-outline-secondary button"><b>Family Planning</b></button>
                            </div>
                        </div>

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
        height: 300px;
    }
</style>