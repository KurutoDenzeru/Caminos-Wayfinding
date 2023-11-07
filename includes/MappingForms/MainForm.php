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

<body class="bg-cover bg-fixed bg-center bg-no-repeat" style="background: url(../../assets/img/ABES.jpg)">

<section class="h-screen">
  <div class="container h-full p-4 mx-auto">
    <div
      class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800">
      <div class="w-full">
        <div
          class="block rounded-2xl bg-gray-100 shadow-2xl">
          <div class="g-0 lg:flex lg:flex-wrap">
            <!-- Left column container-->
            <div class="px-14 py-6 shadow-2xl md:px-0 lg:w-4/12">
              <div class="md:mx-6 md:p-14">

                <?php 

                    include ('logout.php');                    
                
                ?>       

                <div class="text-center py-14">
                    <img src="../../assets/img/caminoslogo.png" class="mx-auto w-48 sm:w-32">                                  
                </div>

                <div class="relative mt-6" data-toggle="tooltip" data-placement="top" title="e.g. Building 1 Room 1 / B1 R1">
                    <form>   
                        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="searchInput" onkeyup="search()" class="block w-full p-4 pl-10 text-sm text-gray-900 border-1 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Search" required>
                        </div>
                    </form>

                    <!-- <input type="text" class="form-control-sm" id="searchInput" onkeyup="search()"
                        style="width: 100%;margin-bottom: 10px;border-radius: 10px;background: rgb(242,242,242);border: 1px solid #D6D6D6;" 
                        placeholder="Where to go?"> -->

                    <?php 
                
                        include ('Howtouse.php');

                    ?>

                  </div>

              </div>
            </div>

            <!-- Right column container with background and description-->
            <div class="flex p-8 items-center rounded-b-2xl lg:w-8/12 lg:rounded-r-2xl lg:rounded-bl-none bg-fixed bg-cover bg-center">
              <div class="flex justify-self-center justify-center ">                

                <!-- Wayfinding System -->
                    <img id='imageContainer' src="../../mapping/newdefault.jpg"
                        class="rounded-lg image-fluid w-3/5 shadow-lg">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fetch Script -->
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