<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ABES - Mapping System</title>

    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- jQuery CDN Core -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <link rel="icon" type="text/css" href="assets/img/favicon.png">
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
                                    <div>

                                        <input type="text" class="form-control-sm" id="searchInput" style="width: 100%; margin-bottom: 10px; border-radius: 10px; background: rgb(242, 242, 242); border: 1px solid #D6D6D6; font-size: 15px;" placeholder="Where to go?">

                                             <button id="searchButton" class="btn btn-primary" onclick="performSearch()">Search</button>

                                    </div>
                                    <!-- Search Bar -->



                                    <!-- Quick Actions -->
                                    <div class="row d-flex justify-content-center">

                                        <!-- Canteen Action -->
                                        <div class="col-sm" id="btn">
                                            <button class="btn w-100 btn-primary" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);box-shadow: 0px 0px;"
                                              onclick="addCanteenQueryParam()"
                                            >
                                                   Canteen
                                            </button>
                                        </div>
                                        <!-- Canteen Action -->
                                        
                                        <!-- Restroom Action -->
                                        <div class="col-sm" id="btn" style="border-radius: 23px;" onclick="addRestroomQueryParam()">

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

                                        <hr class="pt-5">    

                                        <?php 

                                            include ('modal.php');

                                        ?>                                     
                                    </div>
                                    
                                    <!-- Footer -->
                                    <p class="text-muted" style="text-align: center;margin-top: 30px;">
                                        Copyright&nbsp;© 2023 Brand
                                    </p>

                                    <!-- Footer -->
                                </div>
                            </div>

                            <!-- Wayfinding System -->
                            <div class="col-sm d-flex flex-column align-items-center py-5">
                              <canvas id="myCanvas" style="width: 512px !important; height: 512px !important;"></canvas>

                              <!-- ETA -->
                              <div id="searchResult" class="fs-3 text-center"></div>
                              <!-- ETA -->
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
    <script>
      function refreshImage(){
        const img = new Image
        img.src = (window.location.href.includes('?restroom')) ? "mapping/Restrooms.jpg" : (window.location.href.includes('?canteen')) ? "mapping/Canteens.jpg" : "mapping/chuchumap3.jpg"

        img.onload = () => {
          let element = document.getElementById('myCanvas')
          ctx = element.getContext('2d')
          element.width = 512
          element.height = 512
          ctx.drawImage(img, 0, 0, 512, 512)
        }
      }

      refreshImage()

      function addRestroomQueryParam() {
        removeAllQueryParam()

        const currentUrl = window.location.href;
        const updatedUrl = currentUrl + '?restroom';
        window.history.replaceState(null, '', updatedUrl);

        refreshImage()
        if(endPosLog) endPosLog = []
      }

      function addCanteenQueryParam() {
        removeAllQueryParam()
        
        const currentUrl = window.location.href;
        const updatedUrl = currentUrl + '?canteen';
        window.history.replaceState(null, '', updatedUrl);

        refreshImage()
        if(endPosLog) endPosLog = []
      }

      function removeAllQueryParam() {
        const currentUrl = window.location.href;

        if (currentUrl.includes('?restroom')) {
          const updatedUrl = currentUrl.replace('?restroom', '');
          window.history.replaceState(null, '', updatedUrl);
        }

        if (currentUrl.includes('?canteen')) {
          const updatedUrl = currentUrl.replace('?canteen', '');
          window.history.replaceState(null, '', updatedUrl);
        }
      }
    </script>
</body>

</html>