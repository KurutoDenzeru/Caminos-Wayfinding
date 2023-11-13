<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ABES - Mapping System</title>

    <!-- Bootstrap CDN CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap CDN Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Bootstrap CDN JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- jQuery CDN Core -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="icon" type="text/css" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/Styles.css">
</head>

    <!-- Asynchronous Request Data Image -->
    <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                var searchText = $(this).val();
                $.ajax({
                    url: "MainFormSearch.php",
                    type: "post",
                    data: {searchText: searchText},
                    success: function(response) {
                        $("#image").attr("src", response);
                    }
                });
            });
        });
    </script>   
    <!-- Asynchronous Request Data Image -->


    <!-- Asynchronous Request of Algorithm -->

      <script>
        $(document).ready(function() {
          $('#searchMap').on('input', function() {
            var searchText = $(this).val();

            $.ajax({
              url: 'searchMap.php',
              type: 'POST',
              data: { searchMap: searchMap },
              success: function(response) {
                $('#imageContainer').html(response);
              }
            });
          });
        });
      </script>
    <!-- Asyncrhonous Request of Algorithm -->


      



    <!-- Asynchronous Request of Estimated Time of Arrival / ETA -->
    <script>
      function performSearch() {
        var searchText = $('#searchInput').val(); // Get the search input value

        // Make an AJAX request to perform the search and update the result
        $.ajax({
            url: 'search.php', // Replace with the actual URL for your search functionality
            type: 'POST',
            data: { searchValue: searchText },
            success: function(response) {
                $('#searchResult').html(response); // Update the search result section
            }
        });
    }
    </script> 
    <!-- Asynchronous Request of Estimated Time of Arrival / ETA -->

    <style>
      canvas {
        border-radius: 10px ;
        border: 3px solid black;
      }
    </style>    
    <!-- Asynchronous Request of Estimated Time of Arrival / ETA -->

    <!-- Tooltip -->
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
      <!-- Tooltip -->

      <!-- Canteen -->

      <script>
        function changeImage() {
          var imageElement = document.getElementById("myImage");
          imageElement.src = "mapping/Canteens.jpg";
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

                                    <!-- Carousel Promotion -->
                                    <div class="carousel slide" data-bs-ride="false" id="carousel-1" >
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="w-100 d-block border-5" 

                                                src="assets/img/carousel/first.jpg" 

                                                alt="Slide Image" style="border-radius: 15px; width: 15vh;">
                                            </div>
                                            
                                            <div class="carousel-item"><img class="w-100 d-block" style="border-radius: 15px" 
                                                src="assets/img/carousel/second.jpg" 

                                                alt="Slide Image"></div>
                                            
                                            <div class="carousel-item"><img class="w-100 d-block" style="border-radius: 15px" 
                                                src="assets/img/carousel/third.jpg" 

                                                alt="Slide Image"></div>

                                        </div>

                                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                                        
                                        <ol class="carousel-indicators">
                                            
                                            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                                            
                                            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                                            
                                            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                                        </ol>

                                    </div>
                                    <!-- Carousel Promotion -->

                                    <!-- Greeting Remarks -->
                                    <div class="row py-2">
                                        <div class="col-sm"><span style="font-size: 20px;color: rgb(0,0,0);">
                                            <p id="hashcode"></p>
                                        </span></div>

                                        <!-- Math Floor Random Hashcode  -->

                                          <script>
                                            function generateHashcode(length) {
                                              let result = '';
                                              const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

                                              for (let i = 0; i < length; i++) {
                                                const randomIndex = Math.floor(Math.random() * characters.length);
                                                result += characters.charAt(randomIndex);
                                              }

                                              return result;
                                            }

                                            const hashcodeElement = document.getElementById('hashcode');
                                            const generatedHashcode = generateHashcode(15);

                                            hashcodeElement.textContent = `Hello, ${generatedHashcode}`;

                                          </script>    

                                        <!-- Math Floor Random Hashcode  -->                                        
                                        
                                        <!-- Sign Out -->
                                        <div onclick="window.location.href='index.php';" class="col-sm" 

                                        data-toggle="tooltip" data-placement="top" 
                                        title="Are you sure you want to logout?"                                        

                                        style="text-align: right;color: rgb(0,0,0);"><i class="fas fa-sign-out-alt" style="font-size: 20px;color: rgb(0,0,0); cursor:pointer;"></i>
                                        </div>
                                        <!-- Sign Out -->
                                    </div>
                                    <!-- Greeting Remarks -->

                                    

                                    <!-- Search Bar -->                                  
                                    <form class="user" action="MainForm-Search.php" method="post">
                                    <div>
                                         <input type="text" class="form-control-sm" id="searchInput" style="width: 100%; margin-bottom: 10px; border-radius: 10px; background: rgb(242, 242, 242); border: 1px solid #D6D6D6; font-size: 15px;" placeholder="Where to go?">

                                             <button id="searchButton" class="btn btn-primary" onclick="performSearch()">Search</button>

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