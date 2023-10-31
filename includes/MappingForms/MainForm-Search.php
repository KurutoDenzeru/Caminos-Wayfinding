<?php  

    include ('../header.php');
    session_start();

?>

<head>
    <title>ABES - Mapping System</title>
</head>

      <!-- Canteen -->
      <script>
        function changeImage() {
          var imageElement = document.getElementById("myImage");
          imageElement.src = "mapping/Canteen.jpg";
        }
      </script>

      <!-- Canteen -->


<body class="bg-gradient-primary"  style="align-items: 
    center;display: flex;height: 100vh;background: url(assets/img/ABES.jpg) center / cover no-repeat;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm">
                <div class="card shadow-lg">
                    <div class="card-body p-0" style="background-color: #E7E7E7">
                        
                        <div class="row">
                            <div class="col-sm">
                                <div id="back" class="p-5">

                                    <!-- Search Bar -->                                  
                                    <form class="user" action="MainForm-Search.php" method="post">
                                    <div>
                                        <input type="text" class="form-control-sm" 
                                        
                                            name="searchValue" 
                                        style="width: 100%;margin-bottom: 10px;border-radius: 10px;background: rgb(242,242,242);border: 1px solid #D6D6D6; font-size: 15px;" 
                                            placeholder="Where to go?">

                                    </div>
                                    <!-- Search Bar -->


                                    <!-- Search Button -->
                                    <div class="row d-flex justify-content-center">

                                        <div class="col-sm">
                                            <button class="btn w-100 btn-primary"

                                            type="submit" name="searchButton"

                                            style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);box-shadow: 0px 0px;">
                                                   Search
                                            </button>                                 
                                        </div>
                                    </div>
                                    </form>
                                    <!-- Search Button -->

  <?php
  // Check if the form is submitted
  if (isset($_POST['searchButton'])) {
    // Get the search term from the form    
    $searchValue = $_POST['searchValue'];
    $text = '';

if ($searchValue == 'B1 R1' || $searchValue == 'Building 1 Room 1') {
  $text = '

  <p>Building 1 Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid py-2" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          15 seconds 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    <!-- Building 1 Room 1 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 22, y: 42 - 1 },
          { x: 9, y: 40 - 8 }
        );
      
      </script>
    <!-- Building 1 Room 1 -->      

    </div>

    '

  ;
} 

elseif ($searchValue === 'end') {
    $text = 'end.jpg';
} 

else {
    $text = 'default.jpg';
}
    
}
  
?>                                    



                                    <!-- Quick Actions -->
                                    <div class="row d-flex justify-content-center">

                                        <!-- Canteen Action -->
                                        <div class="col-sm" id="btn" onclick="window.location.href='MainForm-Canteen.php';">
                                            <button class="btn w-100 btn-primary" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);box-shadow: 0px 0px;"
                                            >
                                                   Canteen
                                            </button>
                                        </div>
                                        <!-- Canteen Action -->

                                        <!-- Restroom Action -->
                                        <div class="col-sm" id="btn" style="border-radius: 23px;" onclick="window.location.href='MainForm-Restroom.php';">

                                            <button class="btn  w-100 btn-primary" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);">
                                                    Restroom
                                            </button>

                                         </div>
                                         <!-- Restroom Action -->

                                         <!-- Refresh -->
                                        <div class="col-sm" id="btn" style="border-radius: 23px;" onclick="window.location.href='MainForm.php';">

                                            <button class="btn  w-100 btn-primary" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);">
                                                    Refresh
                                            </button>

                                         </div>                                         
                                         <!-- Refresh -->
                                    </div>

                                    <!-- Quick Actions -->

                                    

                                    <!-- ETA -->
                                    <div id="searchResult" 
                                    class="py-5 pt-5 pb-5 fs-3 text-center">
                                    
                                        
                                    </div>
                                    <!-- ETA -->


                                    
                                    <!-- Footer -->
                                    <p class="text-muted" style="text-align: center;margin-top: 30px;">
                                        Copyright&nbsp;© 2023 Brand
                                    </p>

                                    <!-- Footer -->
                                </div>
                            </div>





                            <!-- Wayfinding System -->
                            <div class="col-sm d-flex justify-content-center py-5 ">
                                <img id="mapContainer" class="image-fluid py-5" 
                                style="width: 50vh;">



                            </div>
                            <!-- Wayfinding System -->


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