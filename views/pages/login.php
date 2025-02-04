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
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="/log/login" method="post">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" >
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="time" id="timerror" style="display: none;"> Try again in <span id="timerz"></span> 's </span>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="/Log/register">Sign up</a></p>
                                    </div>
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
    <script src="<?=assets?>/js/custom.min.js"></script>

</body>

</html>

<style>
    .time{
        color: red;
    }
</style>



<?php if(isset($_SESSION['blocked'])): ?>
    <script>
        window.addEventListener("load", function(){
            document.getElementById('timerror').style.display = '';
            var min = parseInt("<?=$_SESSION['min']?>");
            var sec = "<?=$_SESSION['sec']?>";
            //console.log("");
            function looping(){
                if(min<0){
                    window.location.href = "/log/unblock";
                    return;
                }
                sec--;
                document.getElementById("timerz").innerText = min+":"+sec;
                if(sec<=0){
                    min--;
                    sec = 59;
                }
                setTimeout(looping, 1000);
            }
            looping();
        });

    </script>
<?php endif; ?>