<?php  

    include ('../header.php');
    session_start();

?>

<head>
    <title>ABES - Mapping System</title>
    <link rel="icon" type="text/css" href="../../assets/img/favicon.png">
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
            <div class="px-14 py-6 shadow-2xl md:px-0 lg:w-4/12 ">
              <div class="md:mx-6 md:p-14 my-auto">

                <?php include ('logout.php'); ?>       

                <div class="text-center py-8 mt-6">
                    <h1 class="text-start lg:text-start font-bold text-3xl sm:text-4xl leading-none">
				              Welcome, Student, have a great day ahead.
			              </h1>                    
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
                            <input type="text" id="searchInput" onkeyup="search()" class="block w-full p-2 pl-10 text-sm text-gray-900 border-1 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Search" required>
                        </div>
                    </form>                  

                  <!-- Buttons -->
                  <div class="text-center pt-4 flex justify-evenly">
                    <button type="button" onclick="removeRestroomQueryParam()" class="text-gray-900 bg-white w-1/2 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                      Canteen
                    </button>
                    
                    <button type="button" onclick="addRestroomQueryParam()" class="text-gray-900 bg-white w-1/2  border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                      Restroom(s)
                    </button>
                  </div>                    

                    <?php include ('Howtouse.php'); ?>

                  </div>

              </div>
            </div>

            <!-- Right column container with background and description-->
            <div class="flex p-8 items-center rounded-b-2xl lg:w-8/12 lg:rounded-r-2xl lg:rounded-bl-none bg-fixed bg-cover bg-center">
              <div class="flex mx-auto">                

                <!-- Wayfinding System -->
                    <img id='myCanvas' src="../../mapping/chuchumap.jpg"
                        class="rounded-lg image-fluid w-auto shadow-lg">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fetching Script -->
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