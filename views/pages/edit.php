
<?php $id = get("med_id");
$column = db_set_query("select * from hc_medicineinventory where hc_id = $id")["first_row"];
$hc_id = $column["hc_id"];
$hc_medicinename = $column["hc_medicinename"];
$hc_dosageform = $column["hc_dosageform"];
$hc_strength = $column["hc_strength"];
$hc_quantity = $column["hc_quantity"];
$hc_expirydate = $column["hc_expirydate"];
$hc_manufacturer = $column["hc_manufacturer"];
$hc_quality = $column["hc_quality"];
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=assets?>/images/favicon.png">
    <link href="<?=assets?>/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div>
        <a href="/main/medicineinventory"><button style="height: 35; width: 70px; font-size:15px; border: solid 1px;">Back</button></a>
    </div>
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">ADD MEDICINE</h4>
                                    <form action="/crud/updatemedicine?medicine_id=<?=$id?>" method="post" >

                                        <div class="form-group">
                                            <label><strong>Medicine Name</strong></label>
                                            <input value="<?=$hc_medicinename?>" name="hc_medicinename" type="text" class="form-control" placeholder="Medicine Name">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><strong>Dosage Form</strong></label>
                                            <input value="<?=$hc_dosageform?>" name="hc_dosageform" type="text" class="form-control" placeholder="Dosage Form">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Strength</strong></label>
                                            <input value="<?=$hc_strength?>" name="hc_strength" type="text" class="form-control" placeholder="Strength">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>quantity</strong></label>
                                            <input value="<?=$hc_quantity?>" name="hc_quantity" type="text" class="form-control" placeholder="quantity">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Expiry Date</strong></label>
                                            <input value="<?=$hc_expirydate?>" name="hc_expirydate" type="date" class="form-control" placeholder="Expiry Date">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Manufacturer</strong></label>
                                            <input value="<?=$hc_manufacturer?>" name="hc_manufacturer" type="text" class="form-control" placeholder="Manufacturer">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Quality Control</strong></label>
                                            <input value="<?=$hc_quality?>" name="hc_quality" type="text" class="form-control" placeholder="Quality Control">
                                        </div>
                                        <div>
                                        <input class="btn btn-success" type="submit" value="Save">
                                    </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?=assets?>/vendor/global/global.min.js"></script>
    <script src="<?=assets?>/js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>

<style>
    .btn{
        height: 35px;
        width: 100%;
    }
</style>