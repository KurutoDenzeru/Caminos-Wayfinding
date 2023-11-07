<?php 

    include ('./includes/header.php');

?>

<section class="flex items-center justify-center bg-[url(/assets/img/ABES.jpg)] bg-cover bg-center bg-fixed h-screen">
    <div class="mx-auto max-w-screen-md text-center">
        <svg viewBox="0 0 24 24" fill="currentColor" class="mx-auto mb-4 w-10 h-10 text-gray-100">
            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
            <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
        </svg>
        
        <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-gray-100 lg:mb-6 md:text-5xl xl:text-6xl">
            Choose Account Type
        </h1>

        <div class="mt-6 px-14 grid grid-cols-3 gap-x-6 gap-y-10 sm:grid-cols-3 xl:gap-x-8 content-center items-center">
            
            <div class="group relative">            
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg lg:aspect-none lg:h-auto">
                    <div class="p-1 items-center content-center text-center">
                        <div class="max-w-sm p-5 bg-gray-50 rounded-lg shadow-xl">

                            <img class="img-fluid w-auto" src="assets/img/icons/Students.png">

                            <a href="includes/LoginForm-Student.php" class="inline-flex items-center mt-4 px-3 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Student
                            </a>

                            <!-- <a href="LoginForm-Student.php">
                                <h4 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Student</h4>
                            </a> -->
                        </div>                
                    </div>
                </div>
            </div>

            <div class="group relative">            
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg lg:aspect-none lg:h-auto">
                    <div class="p-1 items-center content-center text-center">
                        <div class="max-w-sm p-5 bg-gray-50 rounded-lg shadow-xl">

                        <img class="img-fluid w-auto" src="assets/img/icons/Faculty.png">

                            <a href="includes/LoginForm.php" class="inline-flex items-center mt-4 px-3 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Faculty
                            </a>

                            <!-- <a href="LoginForm.php">
                                <h4 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Faculty</h4>
                            </a> -->
                        </div>                
                    </div>
                </div>
            </div>
            
            <div class="group relative">            
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg lg:aspect-none lg:h-auto">
                    <div class="p-1 items-center content-center text-center">
                        <div class="max-w-sm p-5 bg-gray-50 rounded-lg shadow-xl">

                            <img class="img-fluid w-auto" src="assets/img/icons/Parents.png">

                            <a href="includes/LoginForm-Visitor.php" class="inline-flex items-center mt-4 px-3 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Parents
                            </a>
                            
                            <!-- <a href="LoginForm-Visitor.php">
                                <h4 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Parents</h4>
                            </a> -->
                        </div>                
                    </div>
                </div>
            </div>            

        </div>            
    </div>


</section>

<body style="align-items: center;display: grid;height: 100vh;background: url(&quot;assets/img/ABES.jpg&quot;) center / cover no-repeat;">

</body>

</html>