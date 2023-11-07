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

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>    

    <link rel="icon" type="text/css" href="assets/img/favicon.png">
</head>

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
                                            const generatedHashcode = generateHashcode(8);

                                            hashcodeElement.textContent = `Hello, Visitor: ${generatedHashcode}`;
                                            
                                          </script>    

                                        <!-- Math Floor Random Hashcode  -->                                        
                                        
                                        <!-- Sign Out -->
                                        <div onclick="window.location.href='index.php';" class="col-5 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4" style="text-align: right;color: rgb(0,0,0);"><i class="fas fa-sign-out-alt" style="font-size: 20px;color: rgb(0,0,0); cursor:pointer;"></i>
                                        </div>
                                        <!-- Sign Out -->
                                    </div>
                                    <!-- Greeting Remarks -->

                                    

                                    <!-- Search Bar -->                                  
                                    <div>

                                        <input type="text" class="form-control-sm" 
                                        
                                            id="searchInput" 

                                            onkeyup="search()"
                                        style="width: 100%;margin-bottom: 10px;border-radius: 10px;background: rgb(242,242,242);border: 1px solid #D6D6D6;" 
                                            placeholder="Where to go?">

                                    </div>
                                    <!-- Search Bar -->



                                    <!-- Quick Actions -->
                                    <div class="row px-5 d-flex justify-content-center">

                                        <div class="col-sm w-50" id="btn">
                                            <button class="btn btn-primary" onclick="removeRestroomQueryParam()" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);box-shadow: 0px 0px;">       Canteen
                                            </button>
                                        </div>
                                        
                                        <div class="col-sm w-50" id="btn" style="border-radius: 23px;">

                                            <button class="btn btn-primary" onclick="addRestroomQueryParam()" type="button" style="border-radius: 10px;background: rgb(242,242,242);color: rgb(0,0,0);border-color: rgb(214,214,214);">
                                                    Restroom
                                            </button>

                                         </div>
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
                            <div class="col-sm d-flex flex-column align-items-center py-5">
                              <canvas id="myCanvas" style="width: 512px !important; height: 512px !important;"></canvas>
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
      const img = new Image
      img.src = (window.location.href.includes('?restroom')) ? "mapping/Restroom.jpg" : "mapping/chuchumap.jpg"

      img.onload = () => {
        let element = document.getElementById('myCanvas')
        ctx = element.getContext('2d')
        element.width = 512
        element.height = 512
        ctx.drawImage(img, 0, 0, 512, 512)
      }

      function addRestroomQueryParam() {
        const currentUrl = window.location.href;
        const hasRestroomQueryParam = currentUrl.includes('?restroom');

        if (!hasRestroomQueryParam) {
          const updatedUrl = currentUrl + '?restroom';
          window.history.replaceState(null, '', updatedUrl);
        }

        search()
      }

      function removeRestroomQueryParam() {
        const currentUrl = window.location.href;
        const updatedUrl = currentUrl.replace('?restroom', '');

        window.history.replaceState(null, '', updatedUrl);

        search()
      }
    </script>
</body>

</html>