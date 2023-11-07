<?php  

    include ("connection.php");
    include ('header.php');
    session_start();

?>

<title>ABES - Login</title>
<link rel="icon" type="text/css" href="../assets/img/favicon.png">

<body class="bg-cover bg-fixed bg-center bg-no-repeat" style="background: url(../assets/img/ABES.jpg)">

<section class="h-screen">
  <div class="container h-full p-4 py-8 mx-auto">
    <div
      class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800">
      <div class="w-full">
        <div
          class="block rounded-2xl bg-white shadow-2xl">
          <div class="g-0 lg:flex lg:flex-wrap">
            <!-- Left column container-->
            <div class="px-14 py-6 md:px-0 lg:w-4/12">
              <div class="md:mx-6 md:p-12 py-18">

                <!-- Account Type -->
                <div class="flex items-center justify-start font-semibold" onclick="window.location.href='../index.php';" style="cursor:pointer;">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />                    
                  </svg>
                    &nbsp; Choose Account Type
                </div>              
                <!-- Account Type -->

                <div class="text-center py-14">

                  <img src="../assets/img/caminoslogo.png" class="mx-auto w-48">                  

                </div>

                  <div class="relative mt-6" 
                        data-toggle="tooltip" data-placement="top" title="e.g. Juan Dela Cruz / 0991 861 7546.."                                        
                  >

                    <input type="text" class="bg-gray-100 text-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300  text-md border-0 rounded-lg block w-full pl-10 p-2.5" required placeholder="Name / Phone Number">
                  </div>

                  <div class="relative mt-6 mb-6"
                        data-toggle="tooltip" data-placement="top" title="e.g. BDLG 1 Room 1, CR, Principal Office, Faculty, Canteen etc.."                                                          
                  >
                    <input type="text" class="bg-gray-100 text-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300  text-md border-0 rounded-lg block w-full pl-10 p-2.5" required placeholder="Purpose of Visit">
                  </div>                  

                  <!-- Proceed Button -->
                  <div class="text-center" onclick="return confirm('Are you sure you want to proceed?');">
                    <a href="header.php" style="text-decoration: none">
                      <button type="submit" value="login" value="Login"
                        class="items-center px-3 py-2 text-md w-full font-medium text-center text-white bg-blue-700 rounded-lg 
                              hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 
                              dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                          Proceed
                      </button>
                    </a>
                  </div>

              </div>
            </div>

            <!-- Right column container with background and description-->
            <div class="flex px-14 items-center rounded-b-2xl lg:w-8/12 lg:rounded-r-2xl lg:rounded-bl-none bg-fixed bg-cover bg-center"
              style="background: url(../assets/img/ABESBG.jpg)">
              <div class="px-4 py-6 text-white md:mx-6 md:p-12">                

                <!-- <img src="../assets/img/ABESLogo.png" class="img-fluid w-24 text-end"> -->

                <h2 class="text-3xl font-extrabold">
                  Andres Bonifacio Elementary School <br>
                  Wayfinding System
                </h2>

              </div>
            </div>
            <!-- Right column container with background and description-->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>