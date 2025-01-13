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
                                <h4 class="card-title">Apppointment</h4>
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
                                                <th>Application Date</th>
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





<div class="modal fade bs-example-modal" id="immunization" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Immunization</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="/crud/addresident" method="post" enctype="multipart/form-data">
                <div class="container my-5">
                    <div class="container my-5">
                        
                    <div class="custom-container">
                        <div class="custom-header">
                        <h3>Immunization Form</h3>
                        </div>
                        <form class="mt-3">
                        <div class="mb-3">
                            <label for="patientName" class="custom-label">Patient Name</label>
                            <input type="text" class="form-control custom-input" id="patientName" placeholder="Enter patient name">
                        </div>
                        <div class="mb-3">
                            <label for="patientAge" class="custom-label">Patient Age</label>
                            <input type="number" class="form-control custom-input" id="patientAge" placeholder="Enter patient age">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">Vaccine Name</label>
                            <input type="text" class="form-control custom-input" id="vaccine" placeholder="Enter vaccine name">
                        </div>
                        <div class="mb-3">
                            <label for="doseNumber" class="custom-label">Dose Number</label>
                            <input type="text" class="form-control custom-input" id="doseNumber" placeholder="Enter dose number (e.g., TT1, TT2)">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="custom-label">Date of Administration</label>
                            <input type="date" class="form-control custom-input" id="date">
                        </div>
                        <div class="mb-3">
                            <label for="healthWorker" class="custom-label">Administered By</label>
                            <input type="text" class="form-control custom-input" id="healthWorker" placeholder="Enter health worker's name">
                        </div>
                        <button type="submit" class="custom-button">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


 
        <?=include_page("footer.php")?>
 

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


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


<?= jspost_script()?>
<script>
    window_loaded(async()=>{
        let datatable = $("#appointmenttbl").DataTable();
        let resolt= await direct_get("/Crud/getappointment");
        let data = resolt.backend.data;
        
        log(data);
        data.forEach(column => {
            datatable.row.add([
                column.appointmentID || "1",
                column.fullname || "1",
                column.Date || "1",
                column.ServicesType || "1",
                column.ApplicationDate || "1",
                column.Status || "1",
            ]).draw();
        });
    });
</script>