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
                                <h4 class="card-title">History</h4>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table id="appointmenttbl" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Services</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
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
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            color: black;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<?= jspost_script()?>
<script>
    window_loaded(async()=>{
        let datatable = $("#appointmenttbl").DataTable();
        let resolt= await direct_get("/Crud/appointmenthistory");
        let data = resolt.backend.data;
        
        log(data);
        data.forEach(column => {
            let status = column.Status;
            let stat = ``;
          
            if(status == "Completed"){
                datatable.row.add([
                column.appointmentID || "1",
                column.fullname || "1",
                column.Date || "1",
                column.ServicesType || "1",
                 "Completed"
            ]).draw();
            }
        });
    });
</script>