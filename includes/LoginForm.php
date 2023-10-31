<?php  

    include ("connection.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ABES - Login</title>
    <link rel="icon" type="text/css" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))        
    </script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Styles.css">
</head>


  <style>
    /* CSS styles for the tooltip */
    .tooltip {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 200px;
      background-color: #000;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }

    .custom-tooltip {
      --bs-tooltip-bg: var(--bs-primary);
    }    
  </style>

  <script>
    // JavaScript code to show the tooltip
    function showTooltip() {
      var tooltip = document.getElementById("tooltipText");
      tooltip.style.visibility = "visible";
      tooltip.style.opacity = 1;
    }

    // JavaScript code to hide the tooltip
    function hideTooltip() {
      var tooltip = document.getElementById("tooltipText");
      tooltip.style.visibility = "hidden";
      tooltip.style.opacity = 0;
    }
  </script>


<body class="bg-gradient-primary" style="align-items: center;display: flex;height: 100vh;background: url(&quot;assets/img/ABES.jpg&quot;) center / cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10" style="width: 1500px;">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4 col-xxl-4">
                                <!-- Choose Account Type -->
                                <div id="back" class="p-5">

                                    <div style="display: flex;margin-bottom: 50px;transform: translateX(-45px);">

                                        <i class="fa fa-backward" style="font-size: 36px;margin-left: 30px;color: #c81113;border-color: #c81113;" onclick="window.location.href='../index.php';" style="cursor:pointer;">
                                        </i>

                                        <div onclick="window.location.href='index.php';" style="cursor:pointer;" style="display: flex;place-items: center;color: #c81113;border-color: #c81113;"><span style="margin-left: 11px;color: #c81113;border-color: #c81113;">Choose Account Type&nbsp;</span></div>
                                    </div>
                                    <!-- Choose Account Type -->

                                    <div class="text-center" style="margin-bottom: 50px;">
                                        <h5 class="text-dark mb-2">Welcome to</h5><img src="assets/img/LOGOS.png" width="194" height="170">
                                        <footer><span>Login to get access to Andres Bonfacio Elementary School Smart Navigating tool system.</span></footer>
                                    </div>

                                    <!-- Form -->
                                    <form class="user" action="LoginForm.php" method="post">
                                        <div class="mb-3"                       

                                        data-toggle="tooltip" data-placement="top" title="Please enter valid name or phone number e.g. Carlo / 09182647253">

                                            <!-- Name / Phone Number -->
                                            <input class="form-control" type="text" 
                                                name="Name" required 


                                            placeholder="Name / Phone Number" style="background: #dddddd;border-color: var(--bs-gray);font-size: 13px;">
                                            <!-- Name / Phone Number -->
                                        </div>

                                        <div class="mb-3" style="background: #dddddd;font-size: 13px;"

                                            data-toggle="tooltip" data-placement="top" title="e.g. BDLG 1 Room 1, CR, Principal Office, Faculty, Canteen etc.."                                        
                                        >

                                            <!-- Purpose of Visit -->
                                            <input class="form-control" type="text" 
                                            name="PurposeVisit" 
                                            required style="border-color: var(--bs-gray);background: #dddddd;font-size: 13px;" placeholder="Purpose of visit">
                                            <!-- Purpose of Visit  --> 

                                        </div>
                                        <div class="" onclick="return confirm('Are you sure you want to proceed?');">
                                            <a href="MainForm.php" style="text-decoration: none">
                                                <button class="btn btn-primary d-block w-100 mb-2" type="submit" name="login" value="Login" type="button" style="margin-top: 55px;background: #c81113;border-style: none;">&nbsp; Proceed
                                                </button>
                                            </a>
                                        </div>

                                </div>
                            </div>

                            <!-- Backend for Logging in -->
                            <?php

                                if (isset($_POST['login'])) {

                                    $Name= $_POST["Name"];
                                    $PurposeVisit= $_POST["PurposeVisit"];

                                    $query = "INSERT INTO user_account 
                                    (Name, PurposeVisit) 
                                    VALUES ('$Name', '$PurposeVisit')";

                                    $result = mysqli_query($con,$query);

                                    if ($result){
                                        echo "<script>location.href = 'MainForm.php';</script>";
                                    }else {
                                        die(mysqli_error($con));
                                    }
                                }

                            ?>  
                            <!-- Backend for Logging in -->
                                    </form>

                            <div class="col-lg-8 col-xl-8 col-xxl-8 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background: url(&quot;assets/img/dogs/NO%20LOGO%20BG.jpg&quot;) center / cover no-repeat;filter: brightness(139%) contrast(102%) saturate(128%);"><img style="margin-top: 40px;margin-left: 38px;" src="assets/img/334884081_147769091509936_1398855499473521271_n-removebg-preview.png" width="117" height="107">
                                    <p style="color: rgb(0,0,0);margin-top: 449px;margin-left: 0px;font-weight: bold;font-size: 19px;text-align: right;margin-right: 48px;">Andres Bonifacio Elementary School <br> Path Finding System</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>