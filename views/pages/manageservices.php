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
        <div class="card d-flex flex-row align-items-center" style="height: 200px; cursor:pointer;" data-toggle="modal" data-target="#referral" >
          <img src="<?=img("referral.jpg")?>" class="" alt="Card Image 1" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Referral</h5>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 200px; cursor:pointer;" data-toggle="modal" data-target="#immunization">
          <img src="<?=img("family.jpg")?>" class="" alt="Card Image 2" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Services</h5>
          </div>
        </div>
      </div>

      
      <!-- Card 2 -->
      
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>












<div class="modal fade bs-example-modal" id="referral" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Referral</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            
    <form id="referrarf">
      
      
      
    <div class="form-container" id="printable">
            <!-- Left Section -->
            <div class="form-section">
                <h3>Referred to Location</h3>
                <label for="referred_location">Referred to:</label>
                <input type="text" id="referred_location" name="referred_location">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time">
                <label for="referred_from">Referred from Location:</label>
                <input type="text" id="referred_from" name="referred_from">
                <h3>Reasons for Referral</h3>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="reason[]" value="Further Evaluation"> Further Evaluation and Management</label>
                    <label><input type="checkbox" name="reason[]" value="For Work Up"> For Work Up</label>
                    <label><input type="checkbox" name="reason[]" value="For Medico Legal"> For Medico-Legal</label>
                    <label><input type="checkbox" name="reason[]" value="Patient Request"> Patient's Request</label>
                    <label><input type="checkbox" name="reason[]" value="OPD Consult"> OPD Consult</label>
                    <label><input type="checkbox" name="reason[]" value="Others"> Others</label>
                </div>
                <h3>Philhealth Information</h3>
                <label><input type="radio" name="philhealth" value="PHIC ID No."> PHIC ID No.</label>
                <label><input type="radio" name="philhealth" value="NON-PHIC"> NON-PHIC</label>
                <div class="signature-section">
                    <label for="referred_by">Referred By:</label>
                    <input type="text" id="referred_by" name="referred_by">
                    <label for="designation">Designation:</label>
                    <input type="text" id="designation" name="designation">
                </div>
            </div>

            <!-- Right Section -->
            <div style="display: flex;" class="form-section">
                <div>
                <h3>Personal Details</h3>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name">
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="bday">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact">
                <label for="contact">Occupation:</label>
                <input type="text" id="occupation" name="occupation">
                <label for="address">Address:</label>
                <textarea id="address" name="address"></textarea>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age">
                <label for="sex">Sex:</label>
                <select id="sex" name="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="civil_status">Civil Status:</label>
                <input type="text" id="civil_status" name="civilstatus">
                <label for="religion">Religion:</label>
                <input type="text" id="religion" name="religion">

                <h3>Chief Complaints</h3>
                <textarea id="chief_complaints" name="chief_complaints"></textarea>
                </div>

                <div style="margin-left: 50px;">
                <h3>Vital Signs</h3>
                <label for="bp">BP:</label>
                <input type="text" id="bp" name="bp">
                <label for="hr">HR:</label>
                <input type="text" id="hr" name="hr">
                <label for="temp">Temperature:</label>
                <input type="text" id="temp" name="temp">
                <label for="weight">Weight:</label>
                <input type="text" id="weight" name="weight">

                <h3>OB History</h3>
                <label for="g">G:</label>
                <input type="text" id="g" name="g">
                <label for="p">P:</label>
                <input type="text" id="p" name="p">
                <label for="mp">MP:</label>
                <input type="text" id="mp" name="mp">
                <label for="edc">EDC:</label>
                <input type="text" id="edc" name="edc">
                <label for="ach">ACH:</label>
                <input type="text" id="ach" name="ach">
                <label for="fh">FH:</label>
                <input type="text" id="fh" name="fh">
                <label for="fhr">FHR:</label>
                <input type="text" id="fhr" name="fhr">
                <label for="pelvic_exam">Pelvic Exam:</label>
                <input type="text" id="pelvic_exam" name="pelvic_exam">
            </div>
        </div>
        
    </div>
                <div class="form-section" align="right">
                <button type="submit">Submit</button>
                </div>
      
      
      
    </form>
  
        </div>
    </div>
</div>





<div class="modal fade bs-example-modal" id="immunization" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Services</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            
                <div class="container my-5">
                    <div class="container my-5">
                        
                    <div class="custom-container">
                        <div class="custom-header">
                        <h3>Services Form</h3>
                        </div>
                        <form class="mt-3" id="servicesform">
                        <div class="mb-3">
                            <label for="patientName" class="custom-label">Patient First Name</label>
                            <input type="text" name="first_name" class="form-control custom-input" id="patientName" placeholder="Enter First name">
                        </div>
                        <div class="mb-3">
                            <label for="patientName" class="custom-label">Patient Last Name</label>
                            <input type="text" name="surname" class="form-control custom-input" id="patientName" placeholder="Enter Surname name">
                        </div>
                        <div class="mb-3">
                            <label for="patientAge" class="custom-label">Patient Age</label>
                            <input type="number" name="age" class="form-control custom-input" id="patientAge" placeholder="Enter patient age">
                        </div>
                        <div class="mb-3">
                            <label for="patientAge" class="custom-label">Patient Contact Number</label>
                            <input type="number" name="contact" class="form-control custom-input" id="patientAge" placeholder="Enter patient contact number">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">Birthday</label>
                            <input type="date" name="bday" class="form-control custom-input" id="vaccine" placeholder="Enter vaccine name">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">Civil Status</label>
                            <input type="text" name="civilstatus" class="form-control custom-input" id="vaccine" placeholder="Enter Civil Status">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">Occupation</label>
                            <input type="text" name="occupation" class="form-control custom-input" id="vaccine" placeholder="Enter Occupation">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">religion</label>
                            <input type="text" name="religion" class="form-control custom-input" id="vaccine" placeholder="Enter Religion">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">Sex</label>
                            <select class="form-select" id="dropdown2" name="sex">
                                <option value="">Select</option>
                                <?php
                                    $options = ["Male","Female"];
                                    foreach ($options as $id=>$name) {
                                        echo "<option value='$id'>$name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">Address</label>
                            <input type="text" name="address" class="form-control custom-input" id="vaccine" placeholder="Enter Address">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="custom-label">Services</label>
                            <select class="form-select" id="dropdown1" name="options">
                                <option value="">Select Services</option>
                                <?php
                                    $options = ["1"=>"immunazation", "2"=>"Prenatal", "4"=>"Family Planning"];
                                    foreach ($options as $id=>$name) {
                                        echo "<option value='$id'>$name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div id="extra">
                        
                        
                        </div>

                        <button type="submit" class="custom-button">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>

                   
 
        <?=include_page("footer.php")?>
 

</body>

</html>
<style>

.form-container {
            display: grid;
            grid-template-columns: 2fr 3fr;
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .form-section {
            border: 1px solid #ccc;
            padding: 20px;
        }
        .form-section h3 {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .checkbox-group {
            display: flex;
            flex-direction: column;
        }
        .signature-section {
            margin-top: 20px;
        }
    .form-container {
      max-width: 700px;
      margin: 20px auto;
      padding: 20px;
      background-color: #f8f9fa;
      border: 2px solid #ced4da;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-header {
      text-align: center;
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 20px;
    }
    .form-subheader {
      text-align: center;
      font-size: 14px;
      margin-bottom: 10px;
      color: #6c757d;
    }
    .form-label-custom {
      font-weight: bold;
      color: #495057;
    }
    .form-input-custom {
      border: 1px solid #6c757d;
      border-radius: 5px;
    }
    .form-textarea {
      resize: none;
    }
    .custom-container {
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 2px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .custom-header {
      background-color: #4caf50;
      color: white;
      text-align: center;
      padding: 10px 0;
      border-radius: 5px;
      font-weight: bold;
    }
    .custom-label {
      font-weight: bold;
      color: #4caf50;
    }
    .custom-input {
      border: 1px solid #4caf50;
      border-radius: 5px;
    }
    .custom-button {
      background-color: #4caf50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .custom-button:hover {
      background-color: #45a049;
    }
    .form-size{
        width: 100px;
    }
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
    .title1{
        color: black;
    }
    .card-title{
        color: white;
        font-size: 20px;
    }
    
    .section-header {
      background-color: #ffc107;
      text-align: center;
      font-weight: bold;
      padding: 5px;
      border-radius: 5px;
    }
    .input-group-text {
      font-weight: bold;
    }
    .border-box {
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
    }
    
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?=jspost_script()?>

<script>
    let dd1 = get_element("dropdown1");

    dd1.onchange = ()=>{
        let val = dd1.value;
        if(val=="2"){
            set_html("extra", `<div class="mb-3">
                            <label for="vaccine" class="custom-label">set date</label>
                            <input type="date" name="setdate" class="form-control custom-input" id="vaccine" placeholder="Enter Address">
                        </div>`);
        }else if(val=="4"){
            set_html("extra", `<div class="mb-3">
                            <label for="vaccine" class="custom-label">Facility</label>
                            <input type="text" name="facility" value="Libacao health center" class="form-control custom-input" id="vaccine" placeholder="Enter Address">
                        </div>
                        <div class="mb-3">
                            <label for="vaccine" class="custom-label">set date</label>
                            <input type="date" name="setdate2" class="form-control custom-input" id="vaccine" placeholder="Enter Address">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="custom-label">Service Provided</label>
                            <select class="form-select" id="dropdown" name="options2">
                                <?php
                                    $options = ["Select","FP counselling", "Method used / FP", "commodity provided",];
                                    foreach ($options as $option) {
                                        echo "<option value='$option'>$option</option>";
                                    }
                                ?>
                            </select>
                        </div>`);
        }else{
            set_html("extra", ``);
        }
    }
</script>

<script>
    on_submit("referrarf",async()=>{
        event.preventDefault();
        
        
        let result = await direct_post("referrarf","/Form/insertreferral");
        if (result.backend.code == "-1"){
            Swal.fire({
                title: "FAILED",
                text: result.message,
                icon: "error"
            }).then(()=>{
                
            });
            return;
        }
        printDiv('printable');
        Swal.fire({
            title: "SUCCESS",
            text: result.message,
            icon: "success"
        }).then(()=>{
            reload();
        });
    })
</script>

<script>
    on_submit("servicesform",async()=>{
        event.preventDefault();
        
        let result = await direct_post("servicesform","/Form/forminsert");
        Swal.fire({
            title: "SUCCESS",
            text: result.message,
            icon: "success"
        }).then(()=>{
            reload();
        });
    })
</script>


<script>
   function printDiv(divId) {
            const originalDiv = document.getElementById(divId);
            const cloneDiv = originalDiv.cloneNode(true);

            // Include input values in the cloned div
            const inputs = cloneDiv.querySelectorAll('input');
            originalDiv.querySelectorAll('input').forEach((input, index) => {
                if (input.type === 'checkbox' || input.type === 'radio') {
                    inputs[index].checked = input.checked; // Copy checked state
                } else {
                    inputs[index].setAttribute('value', input.value); // Copy value
                }
            });

            // Open a new window for printing
            const printWindow = window.open('', '', 'height=600,width=800');

            // Get all the stylesheets from the current document
            const stylesheets = Array.from(document.styleSheets)
                .map(styleSheet => {
                    try {
                        if (styleSheet.href) {
                            return `<link rel="stylesheet" href="${styleSheet.href}">`;
                        } else if (styleSheet.cssRules) {
                            let css = Array.from(styleSheet.cssRules)
                                .map(rule => rule.cssText)
                                .join("\n");
                            return `<style>${css}</style>`;
                        }
                    } catch (e) {
                        console.warn("Could not access stylesheet:", styleSheet);
                        return "";
                    }
                })
                .join("\n");

            // Write content to the new window
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write(stylesheets); // Include styles
            printWindow.document.write('</head><body>');
            printWindow.document.write(cloneDiv.outerHTML); // Use the cloned div
            printWindow.document.write('</body></html>');
            printWindow.document.close(); // Apply styles and content
            printWindow.print(); // Trigger the print dialog
        }
</script>