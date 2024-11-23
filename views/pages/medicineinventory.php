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
                                <h4 class="card-title">Medine Inventory</h4>
                                </div>
                                <div>
                                        <a href="/main/add"><input class="addm" type="submit" value="Add Medicine"></a>
                                    </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                            <th>Medicine Name</th>
                                                <th>Dosage form</th>
                                                <th>Strength</th>

                                                <th>quantity</th>
                                               
                                                <th>Expiry Date</th>
                                                
                                                <th>Manufacturer</th>
                                                
                                                <th>Quality Control Notes</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $data = db_select("hc_medicineinventory")["data"]?>
                                           
                                            <?php while($column = fetch_array($data)):?>
                                                <?php 
                                                    $hc_id = $column["hc_id"];
                                                    $hc_medicinename = $column["hc_medicinename"];
                                                    $hc_dosageform = $column["hc_dosageform"];
                                                    $hc_strength = $column["hc_strength"];
                                                    $hc_quantity = $column["hc_quantity"];
                                                    $hc_expirydate = $column["hc_expirydate"];
                                                    $hc_manufacturer = $column["hc_manufacturer"];
                                                    $hc_quality = $column["hc_quality"];
                                                    
                                                    ?>
                                                <tr>
                                                <td><?=$hc_medicinename?></td>
                                                <td><?=$hc_dosageform?></td>
                                                <td><?=$hc_strength?></td>
                                                <td><?=$hc_quantity?></td>
                                                <td><?=$hc_expirydate?></td>
                                                <td><?=$hc_manufacturer?></td>
                                                <td><?=$hc_quality?></td>
                                                <td><div><a href="/crud/editmedicine?med_id=<?=$hc_id?>"><button class="btn btn-warning"><img src="<?=assets?>/images/edit-text.png" alt="" height="20" width="20"></button></a></div><div><a href="/crud/deletemedicine?med_id=<?=$hc_id?>"><button class="btn btn-danger"><img src="<?=assets?>/images/delete.png" alt="" height="20" width="20"></button></a></div></td>
                                            </tr>
                                            <?php endwhile;?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


 
        <?=include_page("footer.php")?>
 

</body>

</html>
<style>
    .btn{
        width: 65px;
    }
    .addm{
        width: 120px;
        height: 40px;
        border-radius: 5px;
        border: solid 1px;
    }
    td{
        color: blue;
    }
</style>
