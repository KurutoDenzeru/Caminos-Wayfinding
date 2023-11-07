<?php
// Retrieve the search value from the AJAX request
$searchValue = $_POST['searchValue'];

// Perform your search logic and generate the text based on the search value

// Building 1 Room 1
if ($searchValue == 'B1 R1' || $searchValue == 'Building 1 Room 1') {
  $text = '

  <p>Building 1 Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid py-2" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
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
          { x: 21, y: 42 - 1 },
          { x: 9, y: 40 - 8 }
        );
      
      </script>
    <!-- Building 1 Room 1 -->      

    </div>

    '

  ;
} 

elseif ($searchValue == 'B1 R2' || $searchValue == 'Building 1 Room 2') {
  
  $text = '

  <p>Building 1 Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid py-2" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    <!-- Building 1 Room 2 -->
    <script src="astar.js"></script>
    <script>
      drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 9, y: 37 - 8 }
      )
    
    </script>
    <!-- Building 1 Room 2 -->      

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 R3' || $searchValue == 'Building 1 Room 3') {
  
  $text = '

  <p>Building 1 Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

     <!-- Building 1 Room 3 -->
    <script src="astar.js"></script>
    <script>
      drawMap(
      0,
      { x: 21, y: 42 - 1 },
      { x: 9, y: 34 - 8 }
    )
    
    </script>
    <!-- Building 1 Room 3 -->      

    </div>


    '

  ;

} 

elseif ($searchValue == 'B1 R4' || $searchValue == 'Building 1 Room 4') {
  
  $text = '

  <p>Building 1 Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 1 Room 4 -->
    <script src="astar.js"></script>
    <script>
      drawMap(
      0,
      { x: 21, y: 42 - 1 },
      { x: 7, y: 40 - 8 }
    )
    
    </script>
    <!-- Building 1 Room 4 -->      

    </div>

    '

  ;

}

elseif ($searchValue == 'B1 R5' || $searchValue == 'Building 1 Room 5') {
  
  $text = '

  <p>Building 1 Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 1 Room 5 -->
      <script src="astar.js"></script>
      <script>
           drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 7, y: 38 - 8 }
      )
      
      </script>
      <!-- Building 1 Room 5 -->    

    </div>

    '

  ;

}  

elseif ($searchValue == 'B1 R6' || $searchValue == 'Building 1 Room 6') {
  
  $text = '

  <p>Building 1 Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 1 Room 6 -->
      <script src="astar.js"></script>
      <script>
           drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 7, y: 34 - 8 }
      )
      
      </script>
      <!-- Building 1 Room 6 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 R7' || $searchValue == 'Building 1 Room 7') {
  
  $text = '

  <p>Building 1 Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 1 Room 7 -->
      <script src="astar.js"></script>
      <script>
           drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 5, y: 41 - 8 }
      )
      </script>
      <!-- Building 1 Room 7 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 R8' || $searchValue == 'Building 1 Room 8') {
  
  $text = '

  <p>Building 1 Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 1 Room 8 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 5, y: 38 - 8 }
      )
      </script>
      <!-- Building 1 Room 8 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 R9' || $searchValue == 'Building 1 Room 9') {
  
  $text = '

  <p>Building 1 Room 9,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 1 Room 9 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 5, y: 34 - 8 }
      )
      </script>
      <!-- Building 1 Room 9 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 R10' || $searchValue == 'Building 1 Room 10') {
  
  $text = '

  <p>Building 1 Room 10,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 1 Room 10 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 3, y: 41 - 8 }
      )
      </script>
      <!-- Building 1 Room 10 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 R11' || $searchValue == 'Building 1 Room 11') {
  
  $text = '

  <p>Building 1 Room 11,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 1 Room 11 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 3, y: 38 - 8 }
      )
      </script>
      <!-- Building 1 Room 11 -->


    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 R12' || $searchValue == 'Building 1 Room 12') {
  
  $text = '

  <p>Building 1 Room 12,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 1 Room 10 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 3, y: 34 - 8 }
      )
      </script>
      <!-- Building 1 Room 10 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR1' || $searchValue == 'Building 1 CR1') {
  
  $text = '

  <p>Building 1 Comfort Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR2' || $searchValue == 'Building 1 CR2') {
  
  $text = '

  <p>Building 1 Comfort Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR3' || $searchValue == 'Building 1 CR3') {
  
  $text = '

  <p>Building 1 Comfort Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR4' || $searchValue == 'Building 1 CR4') {
  
  $text = '

  <p>Building 1 Comfort Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR5' || $searchValue == 'Building 1 CR5') {
  
  $text = '

  <p>Building 1 Comfort Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR6' || $searchValue == 'Building 1 CR6') {
  
  $text = '

  <p>Building 1 Comfort Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR7' || $searchValue == 'Building 1 CR7') {
  
  $text = '

  <p>Building 1 Comfort Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B1 CR8' || $searchValue == 'Building 1 CR8') {
  
  $text = '

  <p>Building 1 Comfort Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R1' || $searchValue == 'Building 2 Room 1') {
  
  $text = '

  <p>Building 2 Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 2 Room 1 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 8, y: 27 - 8 }
      )
      </script>
      <!-- Building 2 Room 1 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R2' || $searchValue == 'Building 2 Room 2') {
  
  $text = '

  <p>Building 2 Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 2 Room 2 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 8, y: 24 - 8 }
      )
      </script>

      <!-- Building 2 Room 2 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R3' || $searchValue == 'Building 2 Room 3') {
  
  $text = '

  <p>Building 2 Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>
      <script src="astar.js"></script>
      <script>
       drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 8, y: 21 - 8 }
      )
      </script>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R4' || $searchValue == 'Building 2 Room 4') {
  
  $text = '

  <p>Building 2 Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 2 Room 4 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 6, y: 27 - 8 }
      )
      </script>

      <!-- Building 2 Room 3 -->


    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R5' || $searchValue == 'Building 2 Room 5') {
  
  $text = '

  <p>Building 2 Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 2 Room 5 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 6, y: 24 - 8 }
      )
      </script>

      <!-- Building 2 Room 5 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R6' || $searchValue == 'Building 2 Room 6') {
  
  $text = '

  <p>Building 2 Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 2 Room 6 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 6, y: 21 - 8 }
      )
      </script>

      <!-- Building 2 Room 6 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R7' || $searchValue == 'Building 2 Room 7') {
  
  $text = '

  <p>Building 2 Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 2 Room 7 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 21, y: 42 - 1 },
        { x: 4, y: 27 - 8 }
      )
      </script>

      <!-- Building 2 Room 7 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R8' || $searchValue == 'Building 2 Room 8') {
  
  $text = '

  <p>Building 2 Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 2 Room 8 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 4, y: 24 - 8 }
      )
      </script>

      <!-- Building 2 Room 8 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R9' || $searchValue == 'Building 2 Room 9') {
  
  $text = '

  <p>Building 2 Room 9,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 2 Room 9 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 4, y: 21 - 8 }
      )
      </script>

      <!-- Building 2 Room 9 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 R10' || $searchValue == 'Building 2 Room 10') {
  
  $text = '

  <p>Building 2 Room 10,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 2 Room 10 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 2, y: 27 - 8 }
      )
      </script>

      <!-- Building 2 Room 10 -->

    </div>

    '

  ;

}

elseif ($searchValue == 'B2 R11' || $searchValue == 'Building 2 Room 11') {
  
  $text = '

  <p>Building 2 Room 11,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 2 Room 11 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 2, y: 24 - 8 }
      )
      </script>

      <!-- Building 2 Room 11 -->

    </div>

    '

  ;

}

elseif ($searchValue == 'B2 R12' || $searchValue == 'Building 2 Room 12') {
  
  $text = '

  <p>Building 2 Room 12,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 2 Room 12 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 2, y: 21 - 8 }
      )
      </script>

      <!-- Building 2 Room 12 -->

    </div>

    '

  ;

}

elseif ($searchValue == 'B2 CR1' || $searchValue == 'Building 2 CR1') {
  
  $text = '

  <p>Building 2 Comfort Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>


      <!-- Building 2 Room 10 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 2, y: 24 - 8 }
      )
      </script>

      <!-- Building 2 Room 10 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 CR2' || $searchValue == 'Building 2 CR2') {
  
  $text = '

  <p>Building 2 Comfort Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 CR3' || $searchValue == 'Building 2 CR3') {
  
  $text = '

  <p>Building 2 Comfort Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 CR4' || $searchValue == 'Building 2 CR4') {
  
  $text = '

  <p>Building 2 Comfort Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 CR5' || $searchValue == 'Building 2 CR5') {
  
  $text = '

  <p>Building 2 Comfort Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B2 CR6' || $searchValue == 'Building 2 CR6') {
  
  $text = '

  <p>Building 2 Comfort Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R1' || $searchValue == 'Building 3 Room 1') {
  
  $text = '

  <p>Building 3 Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 1 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 16 - 8 }
      )
      </script>

      <!-- Building 3 Room 1 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R2' || $searchValue == 'Building 3 Room 2') {
  
  $text = '

  <p>Building 3 Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 2 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 16 - 8 }
      )
      </script>

      <!-- Building 3 Room 2 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R3' || $searchValue == 'Building 3 Room 3') {
  
  $text = '

  <p>Building 3 Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 3 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 16 - 8 }
      )
      </script>

      <!-- Building 3 Room 3 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R4' || $searchValue == 'Building 3 Room 4') {
  
  $text = '

  <p>Building 3 Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 4 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 16 - 8 }
      )
      </script>

      <!-- Building 3 Room 4 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R5' || $searchValue == 'Building 3 Room 5') {
  
  $text = '

  <p>Building 3 Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 5 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 15 - 8 }
      )
      </script>

      <!-- Building 3 Room 5 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R6' || $searchValue == 'Building 3 Room 6') {
  
  $text = '

  <p>Building 3 Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 1 -->
      <script src="astar.js"></script>
      <script>
         drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 14 - 8 }
      )
      </script>

      <!-- Building 3 Room 1 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R7' || $searchValue == 'Building 3 Room 7') {
  
  $text = '

  <p>Building 3 Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 7 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 14 - 8 }
      )
      </script>

      <!-- Building 3 Room 7 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R8' || $searchValue == 'Building 3 Room 8') {
  
  $text = '

  <p>Building 3 Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 3 Room 8 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 14 - 8 }
      )
      </script>

      <!-- Building 3 Room 8 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R9' || $searchValue == 'Building 3 Room 9') {
  
  $text = '

  <p>Building 3 Room 9,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 3 Room 9 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 12 - 8 }
      )
      </script>

      <!-- Building 3 Room 9 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R10' || $searchValue == 'Building 3 Room 10') {
  
  $text = '

  <p>Building 3 Room 10,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 3 Room 10 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 12 - 8 }
      )
      </script>

      <!-- Building 3 Room 10 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R11' || $searchValue == 'Building 3 Room 11') {
  
  $text = '

  <p>Building 3 Room 11,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 11 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 12 - 8 }
      )
      </script>

      <!-- Building 3 Room 11 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R12' || $searchValue == 'Building 3 Room 12') {
  
  $text = '

  <p>Building 3 Room 12,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 12 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 12 - 8 }
      )
      </script>

      <!-- Building 3 Room 12-->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R13' || $searchValue == 'Building 3 Room 13') {
  
  $text = '

  <p>Building 3 Room 13,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 13 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 10 - 8 }
      )
      </script>

      <!-- Building 3 Room 13 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R14' || $searchValue == 'Building 3 Room 14') {
  
  $text = '

  <p>Building 3 Room 14,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 14 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 10 - 8 }
      )
      </script>

      <!-- Building 3 Room 14 -->


    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R15' || $searchValue == 'Building 3 Room 15') {
  
  $text = '

  <p>Building 3 Room 15,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 15 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 10 - 8 }
      )
      </script>

      <!-- Building 3 Room 15 -->


    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 R16' || $searchValue == 'Building 3 Room 16') {
  
  $text = '

  <p>Building 3 Room 16,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 3 Room 16 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 10 - 8 }
      )
      </script>

      <!-- Building 3 Room 16 -->


    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR1' || $searchValue == 'Building 3 CR1') {
  
  $text = '

  <p>Building 3 Comfort Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR2' || $searchValue == 'Building 3 CR2') {
  
  $text = '

  <p>Building 3 Comfort Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR3' || $searchValue == 'Building 3 CR3') {
  
  $text = '

  <p>Building 3 Comfort Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR4' || $searchValue == 'Building 3 CR4') {
  
  $text = '

  <p>Building 3 Comfort Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR5' || $searchValue == 'Building 3 CR5') {
  
  $text = '

  <p>Building 3 Comfort Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR6' || $searchValue == 'Building 3 CR6') {
  
  $text = '

  <p>Building 3 Comfort Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR7' || $searchValue == 'Building 3 CR7') {
  
  $text = '

  <p>Building 3 Comfort Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B3 CR8' || $searchValue == 'Building 3 CR8') {
  
  $text = '

  <p>Building 3 Comfort Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 R1' || $searchValue == 'Building 4 Room 1') {
  
  $text = '

  <p>Building 4 Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

       <!-- Building 4 Room 1 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 25, y: 15 - 8 }
        );
      
      </script>
    <!-- Building 4 Room 1 -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'Principal Office' || $searchValue == 'PO') {
  
  $text = '

  <p>Principal Office,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 4 Principal Office -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 28, y: 15 - 8 }
        );
      
      </script>
    <!-- Building 4 Principal Office -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 LRMDS' || $searchValue == 'LRMDS') {
  
  $text = '

  <p>LMRDS,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 4 LMRDS -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 25, y: 13 - 8 }
        );
      
      </script>
    <!-- Building 4 LMRDS -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 R2' || $searchValue == 'Building 4 Room 2') {
  
  $text = '

  <p>Building 4 Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 4 Room 2 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 28, y: 13 - 8 }

        );
      
      </script>
    <!-- Building 4 Room 2 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'E-CLASSROOM' || $searchValue == 'E CLASSROOM') {
  
  $text = '

  <p>E-CLASSROOM,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 4 E-CLASSROOM -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 25, y: 11 - 8 }

        );
      
      </script>
    <!-- Building 4 E-CLASSROOM -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 R3' || $searchValue == 'Building 4 Room 3') {
  
  $text = '

  <p>Building 4 Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 4 Room 3 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 28, y: 11 - 8 }

        );
      
      </script>
    <!-- Building 4 Room 3 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 R4' || $searchValue == 'Building 4 Room 4') {
  
  $text = '

  <p>Building 4 Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 4 Room 4 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 25, y: 9 - 8 }

        );
      
      </script>
    <!-- Building 4 Room 4 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 R5' || $searchValue == 'Building 4 Room 5') {
  
  $text = '

  <p>Building 4 Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 4 Room 5 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 28, y: 9 - 8 }

        );
      
      </script>
    <!-- Building 4 Room 5 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 CR1' || $searchValue == 'Building 4 CR1') {
  
  $text = '

  <p>Building 4 Comfort Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 CR2' || $searchValue == 'Building 4 CR2') {
  
  $text = '

  <p>Building 4 Comfort Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 CR3' || $searchValue == 'Building 4 CR3') {
  
  $text = '

  <p>Building 4 Comfort Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 F1' || $searchValue == 'Building 4 Fire Exit 1') {
  
  $text = '

  <p>Building 4 Fire Exit 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 F2' || $searchValue == 'Building 4 Fire Exit 2') {
  
  $text = '

  <p>Building 4 Fire Exit 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 F3' || $searchValue == 'Building 4 Fire Exit 3') {
  
  $text = '

  <p>Building 4 Fire Exit 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B4 F4' || $searchValue == 'Building 4 Fire Exit 4') {
  
  $text = '

  <p>Building 4 Fire Exit 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B5 UC' || $searchValue == 'Building 5 Under Construction') {
  
  $text = '

  <p>Under Construction,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 R1' || $searchValue == 'Building 6 Room 1') {
  
  $text = '

  <p>Building 6 Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 1 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 32, y: 18 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 1 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'Library' || $searchValue == 'Lib') {
  
  $text = '

  <p>Library,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Library -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 32, y: 21 - 8 }

        );
      
      </script>
    <!-- Building 6 Library -->

    </div>

    '

  ;

}

elseif ($searchValue == 'B6 R2' || $searchValue == 'Building 6 Room 2') {
  
  $text = '

  <p>Building 6 Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 2 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 32, y: 24 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 2 -->
    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R3' || $searchValue == 'Building 6 Room 3') {
  
  $text = '

  <p>Building 6 Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 3 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 32, y: 27 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 3 -->
    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R4' || $searchValue == 'Building 6 Room 4') {
  
  $text = '

  <p>Building 6 Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 4 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 34, y: 19 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 4 -->
    </div>

    '

  ;

}  

elseif ($searchValue == 'Canteen' || $searchValue == 'B6 Canteen') {
  
  $text = '

  <p>Canteen,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 R5' || $searchValue == 'Building 6 Room 5') {
  
  $text = '

  <p>Building 6 Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 5 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 34, y: 21 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 5 -->

    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R6' || $searchValue == 'Building 6 Room 6') {
  
  $text = '

  <p>Building 6 Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 6 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 34, y: 24 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 6 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 R7' || $searchValue == 'Building 6 Room 7') {
  
  $text = '

  <p>Building 6 Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 7 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 34, y: 27 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 7 -->
    </div>

    '

  ;

}   

elseif ($searchValue == 'B6 R8' || $searchValue == 'Building 6 Room 8') {
  
  $text = '

  <p>Building 6 Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 8 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 34, y: 29 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 8 -->

    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R9' || $searchValue == 'Building 6 Room 9') {
  
  $text = '

  <p>Building 6 Room 9,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 9 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 36, y: 18 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 9 -->

    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R10' || $searchValue == 'Building 6 Room 10') {
  
  $text = '

  <p>Building 6 Room 10,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 10 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 36, y: 21 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 10 -->

    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R11' || $searchValue == 'Building 6 Room 11') {
  
  $text = '

  <p>Building 6 Room 11,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 11 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 36, y: 24 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 11 -->

    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R12' || $searchValue == 'Building 6 Room 12') {
  
  $text = '

  <p>Building 6 Room 12,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 12 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 36, y: 27 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 12 -->

    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R13' || $searchValue == 'Building 6 Room 13') {
  
  $text = '

  <p>Building 6 Room 13,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 13 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 36, y: 29 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 13 -->
    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R14' || $searchValue == 'Building 6 Room 14') {
  
  $text = '

  <p>Building 6 Room 14,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 14 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 38, y: 18 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 14 -->
    </div>

    '

  ;

}  

elseif ($searchValue == 'B6 R15' || $searchValue == 'Building 6 Room 15') {
  
  $text = '

  <p>Building 6 Room 15,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 15 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 38, y: 21 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 15 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 R16' || $searchValue == 'Building 6 Room 16') {
  
  $text = '

  <p>Building 6 Room 16,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 16 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 38, y: 24 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 16 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 R17' || $searchValue == 'Building 6 Room 17') {
  
  $text = '

  <p>Building 6 Room 17,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 17 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 38, y: 27 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 17 -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 R18' || $searchValue == 'Building 6 Room 18') {
  
  $text = '

  <p>Building 6 Room 18,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 6 Room 18 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 38, y: 29 - 8 }

        );
      
      </script>
    <!-- Building 6 Room 18 -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR1' || $searchValue == 'Building 6 CR1') {
  
  $text = '

  <p>Building 6 Comfort Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR2' || $searchValue == 'Building 6 CR2') {
  
  $text = '

  <p>Building 6 Comfort Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR3' || $searchValue == 'Building 6 CR3') {
  
  $text = '

  <p>Building 6 Comfort Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR4' || $searchValue == 'Building 6 CR4') {
  
  $text = '

  <p>Building 6 Comfort Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR5' || $searchValue == 'Building 6 CR5') {
  
  $text = '

  <p>Building 6 Comfort Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR6' || $searchValue == 'Building 6 CR6') {
  
  $text = '

  <p>Building 6 Comfort Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR7' || $searchValue == 'Building 6 CR7') {
  
  $text = '

  <p>Building 6 Comfort Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B6 CR8' || $searchValue == 'Building 6 CR8') {
  
  $text = '

  <p>Building 6 Comfort Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R1' || $searchValue == 'Building 8 Room 1') {
  
  $text = '

  <p>Building 8 Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 1 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 36 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 1  -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R2' || $searchValue == 'Building 8 Room 2') {
  
  $text = '

  <p>Building 8 Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 2 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 40 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 2  -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R3' || $searchValue == 'Building 8 Room 3') {
  
  $text = '

  <p>Building 8 Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 3 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 43 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 3  -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R4' || $searchValue == 'Building 8 Room 4') {
  
  $text = '

  <p>Building 8 Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 4 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 36 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 4  -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R5' || $searchValue == 'Building 8 Room 5') {
  
  $text = '

  <p>Building 8 Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 5 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 40 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 5  -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R6' || $searchValue == 'Building 8 Room 6') {
  
  $text = '

  <p>Building 8 Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 6 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 43 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 6  -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R7' || $searchValue == 'Building 8 Room 7') {
  
  $text = '

  <p>Building 8 Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 4 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 37, y: 36 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 4  -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R8' || $searchValue == 'Building 8 Room 8') {
  
  $text = '

  <p>Building 8 Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 8 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 37, y: 40 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 8  -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R9' || $searchValue == 'Building 8 Room 9') {
  
  $text = '

  <p>Building 8 Room 9,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 9 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 37, y: 43 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 9  -->
    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R10' || $searchValue == 'Building 8 Room 10') {
  
  $text = '

  <p>Building 8 Room 10,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 10 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 39, y: 36 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 10  -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R11' || $searchValue == 'Building 8 Room 11') {
  
  $text = '

  <p>Building 8 Room 11,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 11 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 39, y: 40 - 8 }

        );
      
      </script>
    <!-- Building 8 Room 11  -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 R12' || $searchValue == 'Building 8 Room 12') {
  
  $text = '

  <p>Building 8 Room 12,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Building 8 Room 12 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 39, y: 43 - 8 }

        );
      
      </script>
     <!-- Building 8 Room 12  -->

    </div>

    '

  ;

} 

elseif ($searchValue == 'B7 IPP Room' || $searchValue == 'Building 7 IPP Room') {
  
  $text = '

  <p>Building 7 IPP Room,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>


      <!-- Building 8 Room 12 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 26, y: 35 - 8 }

        );
      
      </script>
     <!-- Building 8 Room 12  -->


    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR1' || $searchValue == 'Building 8 CR1') {
  
  $text = '

  <p>Building 6 Comfort Room 1,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR2' || $searchValue == 'Building 8 CR2') {
  
  $text = '

  <p>Building 8 Comfort Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR3' || $searchValue == 'Building 8 CR3') {
  
  $text = '

  <p>Building 8 Comfort Room 3,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR4' || $searchValue == 'Building 8 CR4') {
  
  $text = '

  <p>Building 8 Comfort Room 4,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR5' || $searchValue == 'Building 8 CR5') {
  
  $text = '

  <p>Building 8 Comfort Room 5,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR6' || $searchValue == 'Building 8 CR6') {
  
  $text = '

  <p>Building 8 Comfort Room 6,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR7' || $searchValue == 'Building 8 CR7') {
  
  $text = '

  <p>Building 8 Comfort Room 7,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

} 

elseif ($searchValue == 'B8 CR8' || $searchValue == 'Building 8 CR8') {
  
  $text = '

  <p>Building 8 Comfort Room 8,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

    </div>

    '

  ;

}
// Ammenities

elseif ($searchValue == 'Gulayan sa Paaralan' || $searchValue == 'Gulayan') {
  
  $text = '

  <p>Gulayan sa Paaralan,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Wash Area -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 21, y: 26 - 8 }
      )
      </script>

      <!-- Wash Area -->



    </div>

    '

  ;

}

elseif ($searchValue == 'Wash Area' || $searchValue == 'Wash') {
  
  $text = '

  <p>Wash Area,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Wash Area -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 23, y: 42 - 8 }
      )
      </script>

      <!-- Wash Area -->

    </div>

    '

  ;

}

elseif ($searchValue == 'Covered Court' || $searchValue == 'Court') {
  
  $text = '

  <p>Covered Court,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Covered Court -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 17, y: 41 - 8 }
      )
      </script>

      <!-- Covered Court -->
    </div>

    '

  ;

}

elseif ($searchValue == 'Holding Area' || $searchValue == 'Hold') {
  
  $text = '

  <p>Holding Area,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Holding Area -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 12, y: 26 - 8 }
      )
      </script>

      <!-- Holding Area -->

    </div>

    '

  ;

}

elseif ($searchValue == 'Mini Forest' || $searchValue == 'Forest') {
  
  $text = '

  <p>Mini Forest,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Wash Area -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 18, y: 26 - 8 }
      )
      </script>

      <!-- Wash Area -->

    </div>

    '

  ;

}

elseif ($searchValue == 'Information Desk' || $searchValue == 'Desk') {
  
  $text = '

  <p>Information Desk,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Information Desk -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 23, y: 46 - 8 }
      )
      </script>

      <!-- Information Desk -->


    </div>

    '

  ;

}

elseif ($searchValue == 'Flag Pole' || $searchValue == 'Flag') {
  
  $text = '

  <p>Flag Pole,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class="col-sm">
      
      <img src="assets/img/map.svg" class="img-fluid" style="width="40vh">
      <span>
        <p style="color: red; font-weight: 900">
          <span id="seconds"></span> 
        </p>
      </span>

      <p style="font-size: 15px"> 
        Estimated Time of Arrival
      </p>

      <!-- Wash Area -->
      <script src="astar.js"></script>
      <script>
        drawMap(
        0,
        { x: 22, y: 42 - 1 },
        { x: 21, y: 45 - 8 }
      )
      </script>

      <!-- Wash Area -->

    </div>

    '

  ;

}


else {
  $text = '

    <img src="assets/img/locationsearch.svg" class="img-fluid" style="width="40vh">
    <br>

    No location set.

    '
    ;
}

// Return the text as the response
echo $text;
?>