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
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;" data-toggle="modal" data-target="#referral" >
          <img src="<?=img("referral.jpg")?>" class="" alt="Card Image 1" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Referral</h5>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;" data-toggle="modal" data-target="#family">
          <img src="<?=img("family.jpg")?>" class="" alt="Card Image 2" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Family Planning</h5>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;" data-toggle="modal" data-target="#immunization">
          <img src="<?=img("immunazation.jpg")?>" class="" alt="Card Image 3" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">Immunization</h5>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6">
        <div class="card d-flex flex-row align-items-center" style="height: 100px; cursor:pointer;" data-toggle="modal" data-target="#prenatal">
          <img src="<?=img("busong.jpg")?>" class="" alt="Card Image 4" style="width: 150px;" height="100%">
          <div class="">
            <h5 class="">prenatal</h5>
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







<div class="modal fade bs-example-modal" id="prenatal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myLargeModalLabel">Prenatal Form</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="/crud/addresident" method="post" enctype="multipart/form-data">
                <div class="container my-5">
                    <div class="container my-5">
                                                    <!-- Header -->
                        <div class="text-center mb-4">
                            <h3>PRENATAL RECORD</h3>
                        </div>

                        <!-- Patient Information -->
                        <div class="border-box">
                            <h5 class="section-header">PATIENT INFORMATION</h5>
                            <div class="row g-3 mt-2">
                            <div class="col-md-4">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Age</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Middle Initial</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Occupation</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Husband's Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Husband's Age</label>
                                <input type="number" class="form-control">
                            </div>
                            </div>
                        </div>

                        <!-- Obstetric History -->
                        <div class="border-box">
                            <h5 class="section-header">OBSTETRIC HISTORY</h5>
                            <div class="row g-3 mt-2">
                            <div class="col-md-2">
                                <label class="form-label">Gravida</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Term</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Abortion</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Para</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Living</label>
                                <input type="number" class="form-control">
                            </div>
                            </div>
                            <div class="row g-3 mt-2">
                            <div class="col-md-2">
                                <label class="form-label">LMP</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Fundal Height</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">EDC</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Weight</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Position</label>
                                <input type="number" class="form-control">
                            </div>
                            </div>
                            <div class="row g-3 mt-2">
                            <div class="col-md-2">
                                <label class="form-label">Engage</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Floating</label>
                                <input type="number" class="form-control">
                            </div>
                            </div>
                        </div>

                        <!-- Vital Signs -->
                        <div class="border-box">
                            <h5 class="section-header">VITAL SIGNS</h5>
                            <div class="row g-3 mt-2">
                            <div class="col-md-2">
                                <label class="form-label">Temperature</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">BP</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Pulse</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Respiration</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                        </div>

                        <!-- Immunization -->
                        <div class="border-box">
                            <h5 class="section-header">IMMUNIZATION</h5>
                            <div class="row g-3 mt-2">
                            <div class="col-md-2">
                                <label class="form-label">TT1</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">TT2</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">TT3</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">TT4</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">TT5</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                        </div>

                        <!-- Operation -->
                        <div class="border-box">
                            <h5 class="section-header">OPERATION</h5>
                            <div class="row g-3 mt-2">
                            <div class="col-md-2">
                                <label class="form-label">CS</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Appendectomy</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Hernia</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Others</label>
                                <input type="text" class="form-control">
                            </div>
                            </div>
                        </div>                            

                                <!-- Submit Button -->
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade bs-example-modal" id="family" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Family planning</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="/crud/addresident" method="post" enctype="multipart/form-data">
                <div class="container my-5">
                    <div class="container my-5">
                        <h2 style="color: black;" class="mb-4">Family Planning Form</h2>
                            <form>
                                <div class="row g-3">
                                    <!-- Left Column -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="number" class="form-control" id="age" placeholder="Enter your age" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contactNumber" class="form-label">Contact Number</label>
                                            <input type="tel" class="form-control" id="contactNumber" placeholder="Enter your contact number" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="maritalStatus" class="form-label">Marital Status</label>
                                            <select class="form-select" id="maritalStatus" required>
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="widowed">Widowed</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="childrenNumber" class="form-label">Number of Children</label>
                                        <input type="number" class="form-control" id="childrenNumber" placeholder="Enter the number of children (if any)">
                                    </div>
                                    <h5 class="mt-4">Medical History</h5>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="diabetes">
                                        <label class="form-check-label" for="diabetes">Diabetes</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="hypertension">
                                        <label class="form-check-label" for="hypertension">Hypertension</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="heartDisease">
                                        <label class="form-check-label" for="heartDisease">Heart Disease</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="allergies">
                                        <label class="form-check-label" for="allergies">Allergies</label>
                                    </div>
                                    </div>
                                </div>

                                <!-- Full Width Section -->
                                <div class="row g-3 mt-4">
                                    <div class="col-12">
                                    <div class="mb-3">
                                        <label for="otherConditions" class="form-label">Other Medical Conditions</label>
                                        <textarea class="form-control" id="prenatal" rows="3" placeholder="Please specify any other conditions"></textarea>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="preferredMethod" class="form-label">Preferred Method</label>
                                    <select class="form-select" id="preferredMethod" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="natural">Natural Family Planning</option>
                                        <option value="contraceptives">Contraceptives</option>
                                        <option value="permanent">Permanent Methods (e.g., sterilization)</option>
                                    </select>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="comments" class="form-label">Comments or Concerns</label>
                                    <textarea class="form-control" id="comments" rows="3" placeholder="Enter any questions or concerns"></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </form>
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
            <form action="/crud/addresident" method="post" enctype="multipart/form-data">
                <div class="container my-5">
                    <div class="container my-5">
                    <div class="form-container">
    <div class="form-header">Patient Referral Form</div>
    <div class="form-subheader">Please fax this form to CVI at 404-875-4568</div>
    <form>
      <div class="mb-3">
        <label for="patientName" class="form-label-custom">Patient Name</label>
        <input type="text" class="form-control form-input-custom" id="patientName" placeholder="Enter patient's name">
      </div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="dob" class="form-label-custom">Date of Birth</label>
          <input type="date" class="form-control form-input-custom" id="dob">
        </div>
        <div class="col-md-6">
          <label for="patientPhone" class="form-label-custom">Patient's Phone</label>
          <input type="tel" class="form-control form-input-custom" id="patientPhone" placeholder="Enter phone number">
        </div>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label-custom">Address</label>
        <input type="text" class="form-control form-input-custom" id="address" placeholder="Enter address">
      </div>
      <div class="mb-3">
        <label for="cityStateZip" class="form-label-custom">City/State/Zip</label>
        <input type="text" class="form-control form-input-custom" id="cityStateZip" placeholder="Enter city, state, and zip">
      </div>
      <div class="mb-3">
        <label for="contactName" class="form-label-custom">Preferred Contact Name and Number (if other than patient)</label>
        <textarea class="form-control form-input-custom form-textarea" id="contactName" rows="2"></textarea>
      </div>
      <div class="mb-3">
        <label for="diagnosis" class="form-label-custom">Diagnosis</label>
        <textarea class="form-control form-input-custom form-textarea" id="diagnosis" rows="2"></textarea>
      </div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="visualOD" class="form-label-custom">Visual Acuities: Distance cc OD</label>
          <input type="text" class="form-control form-input-custom" id="visualOD">
        </div>
        <div class="col-md-6">
          <label for="visualOS" class="form-label-custom">cc OS</label>
          <input type="text" class="form-control form-input-custom" id="visualOS">
        </div>
      </div>
      <div class="mb-3">
        <label for="visualFields" class="form-label-custom">Visual Fields (please fax field chart if available)</label>
        <textarea class="form-control form-input-custom form-textarea" id="visualFields" rows="2"></textarea>
      </div>
      <div class="mb-3">
        <label for="referredBy" class="form-label-custom">Referred by:</label>
        <textarea class="form-control form-input-custom form-textarea" id="referredBy" rows="2"></textarea>
      </div>
      <div class="row g-3 mb-3">
        <div class="col-md-4">
          <label for="upin" class="form-label-custom">UPIN</label>
          <input type="text" class="form-control form-input-custom" id="upin">
        </div>
        <div class="col-md-4">
          <label for="npi" class="form-label-custom">NPI</label>
          <input type="text" class="form-control form-input-custom" id="npi">
        </div>
        <div class="col-md-4">
          <label for="phone" class="form-label-custom">Phone</label>
          <input type="tel" class="form-control form-input-custom" id="phone" placeholder="Enter phone number">
        </div>
      </div>
      <div class="mb-3">
        <label for="physicianAddress" class="form-label-custom">Address</label>
        <input type="text" class="form-control form-input-custom" id="physicianAddress" placeholder="Enter address">
      </div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="referralDate" class="form-label-custom">Referral Date</label>
          <input type="date" class="form-control form-input-custom" id="referralDate">
        </div>
        <div class="col-md-6">
          <label for="officeVisitDate" class="form-label-custom">Date of Office Visit</label>
          <input type="date" class="form-control form-input-custom" id="officeVisitDate">
        </div>
      </div>
      <div class="mb-3">
        <label for="referralSource" class="form-label-custom">How did you hear about CVI?</label>
        <textarea class="form-control form-input-custom form-textarea" id="referralSource" rows="2"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
                    </div>
                </div>
            </form>
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

</html>
<style>
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