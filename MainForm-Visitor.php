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
function search() {
  var searchValue = $('#searchInput').val();

  // Make an AJAX request to a PHP script
  $.ajax({
    url: 'search.php',
    type: 'POST',
    data: { searchValue: searchValue },
    success: function(response) {
      // Assuming that the response contains the image URL
      // You can adjust this part based on the actual response structure
      var imageURL = response; 

      // Update the src attribute of the imageContainer
      $('#imageContainer').attr('src', imageURL);
    }
  });
}

      </script>


    <!-- Asyncrhonous Request of Algorithm -->


    <!-- Asynchronous Request of Estimated Time of Arrival / ETA -->
    <script>
      function search() {
        var searchValue = $('#searchInput').val();

        // Make an AJAX request to a PHP script
        $.ajax({
          url: 'search.php',
          type: 'POST',
          data: { searchValue: searchValue },
          success: function(response) {
            $('#searchResult').html(response);
          }
        });
      }
    </script> 
    <!-- Asynchronous Request of Estimated Time of Arrival / ETA -->


<body class="bg-gradient-primary" style="align-items: center;display: flex;height: 100vh;background: url(&quot;assets/img/ABES.jpg&quot;) center / cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center" style="font-style: Assistant ExtraLight;">
            <div class="col-md-9 col-lg-12 col-xl-10" style="width: 1500px;">
                <div class="card shadow-lg o-hidden border-5 my-5">
                    <div class="card-body p-0" style="background-color: #E7E7E7">
                        
                        <div class="row">
                            <div class="col-lg-4 col-xl-4 col-xxl-4">
                                <div id="back" class="p-5">

                                    <!-- Greeting Remarks -->
                                    <div class="row" style="margin: 15px 0px 15px 0px;">
                                        <div class="col-7 col-sm-6 col-md-6 col-lg-8 col-xl-8 col-xxl-8"><span style="font-size: 16px;color: rgb(0,0,0);">

                                            <p id="hashcode"></p>
                                        </span></div>                                     
                                        
                                        <!-- Sign Out -->
                                        <div onclick="window.location.href='index.php';" class="col-5 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4" style="text-align: right;color: rgb(0,0,0);"><i class="fas fa-sign-out-alt" style="font-size: 20px;color: rgb(0,0,0); cursor:pointer;"></i>
                                        </div>
                                        <!-- Sign Out -->
                                    </div>
                                    <!-- Greeting Remarks -->

                                    <!-- Search Bar -->                                  
                                    <div>
                                        <input type="text" class="form-control-sm" id="searchInput" onkeyup="search()"
                                        style="width: 100%;margin-bottom: 10px;border-radius: 10px;background: rgb(242,242,242);border: 1px solid #D6D6D6;" 
                                            placeholder="Where to go?">

                                    </div>
                                    <!-- Quick Actions -->
                                    <div class="row px-5 d-flex justify-content-center">

                                        <div class="col-sm w-50" id="btn">
                                            <button class="btn btn-primary" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);box-shadow: 0px 0px;">
                                                Canteen
                                            </button>
                                        </div>
                                        
                                        <div class="col-sm w-50" id="btn" style="border-radius: 23px;">

                                            <button class="btn btn-primary" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);">
                                                    Restroom
                                            </button>

                                         </div>
                                    </div>                                
                                    <!-- ETA -->
                                        <div id="searchResult" class="py-5 pt-5 pb-5 fs-3 text-center">                                    
                                        </div>
                                    <!-- Footer -->
                                    <p class="text-muted" style="text-align: center;margin-top: 30px;">
                                        Copyright&nbsp;© 2023 Brand
                                    </p>

                                    <!-- Footer -->
                                </div>
                            </div>

                            <!-- Wayfinding System -->
                            <div class="col-sm d-flex justify-content-center">
                                    <img id='imageContainer' src="mapping/newdefault.jpg"
                                        class="rounded image-fluid" style="width: 75vh" >
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