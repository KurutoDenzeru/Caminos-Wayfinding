<?php
// Retrieve the search value from the AJAX request



$searchValue = $_POST['searchValue'];

// Convert the input to lowercase
$searchValue = strtolower($searchValue);

// Perform your search logic and generate the text based on the search value

// Building 1 Room 1
if ($searchValue == 'b1 r1' || $searchValue == 'building 1 room 1') {
  $text = '

  <p>Building 1 - 1st Floor, Room 1</p>
  
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

elseif ($searchValue == 'b1 r2' || $searchValue == 'building 1 room 2') {
  
  $text = '

  <p>Building 1 - 1st Floor, Room 2,</p>
  
  <div class="row" style="background-color: white; border-radius: 15px">
    <div class "col-sm">
      
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
elseif ($searchValue == 'b1 r3' || $searchValue == 'building 1 room 3') {
  
  $text = '

  <p>Building 1 - 1st Floor, Room 3,</p>
  
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

elseif ($searchValue == 'b1 r4' || $searchValue == 'building 1 room 4') {
  
  $text = '

  <p>Building 1 - 1st Floor, Room 4,</p>
  
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

elseif ($searchValue == 'b1 r5' || $searchValue == 'building 1 room 5') {
  
  $text = '

  <p>Building 1 - 2nd Floor, Room 5,</p>
  
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

elseif ($searchValue == 'b1 r6' || $searchValue == 'building 1 room 6') {
  
  $text = '

  <p>Building 1 - 2nd Floor, Room 6,</p>
  
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

elseif ($searchValue == 'b1 r7' || $searchValue == 'building 1 room 7') {
  
  $text = '

  <p>Building 1 - 3rd Floor, Room 7,</p>
  
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

elseif ($searchValue == 'b1 r8' || $searchValue == 'building 1 room 8') {
  
  $text = '

  <p>Building 1 - 3rd Floor, Room 8,</p>
  
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

elseif ($searchValue == 'b1 r9' || $searchValue == 'building 1 room 9') {
  
  $text = '

  <p>Building 1 - 3rd Floor, Room 9,</p>
  
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

elseif ($searchValue == 'b1 r10' || $searchValue == 'building 1 room 10') {
  
  $text = '

  <p>Building 1 - 4th Floor, Room 10,</p>
  
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

elseif ($searchValue == 'b1 r11' || $searchValue == 'building 1 room 11') {
  
  $text = '

  <p>Building 1 - 4th Floor, Room 11,</p>
  
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

elseif ($searchValue == 'b1 r12' || $searchValue == 'building 1 room 12') {
  
  $text = '

  <p>Building 1 - 4th Floor, Room 12,</p>
  
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

elseif ($searchValue == 'b2 r1' || $searchValue == 'building 2 room 1') {
  
  $text = '

  <p>Building 2 - 1st Floor, Room 1,</p>
  
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

elseif ($searchValue == 'b2 r2' || $searchValue == 'building 2 room 2') {
  
  $text = '

  <p>Building 2 - 1st Floor, Room 2,</p>
  
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

elseif ($searchValue == 'b2 r3' || $searchValue == 'building 2 room 3') {
  
  $text = '

  <p>Building 2 - 1st Floor, Room 3,</p>
  
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

elseif ($searchValue == 'b2 r4' || $searchValue == 'building 2 room 4') {
  
  $text = '

  <p>Building 2 - 2nd Floor, Room 4,</p>
  
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

elseif ($searchValue == 'b2 r5' || $searchValue == 'building 2 room 5') {
  
  $text = '

  <p>Building 2 - 2nd Floor, Room 5,</p>
  
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

elseif ($searchValue == 'b2 r6' || $searchValue == 'building 2 room 6') {
  
  $text = '

  <p>Building 2 - 2nd Floor, Room 6,</p>
  
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

elseif ($searchValue == 'b2 r7' || $searchValue == 'building 2 room 7') {
  
  $text = '

  <p>Building 2 - 3rd Floor, Room 7,</p>
  
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

elseif ($searchValue == 'b2 r8' || $searchValue == 'building 2 room 8') {
  
  $text = '

  <p>Building 2 - 3rd Floor, Room 8,</p>
  
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

elseif ($searchValue == 'b2 r9' || $searchValue == 'building 2 room 9') {
  
  $text = '

  <p>Building 2 - 3rd Floor, Room 9,</p>
  
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

elseif ($searchValue == 'b2 r10' || $searchValue == 'building 2 room 10') {
  
  $text = '

  <p>Building 2 - 4th Floor, Room 10,</p>
  
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

elseif ($searchValue == 'b2 r11' || $searchValue == 'building 2 room 11') {
  
  $text = '

  <p>Building 2 - 4th Floor, Room 11,</p>
  
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

elseif ($searchValue == 'b2 r12' || $searchValue == 'building 2 room 12') {
  
  $text = '

  <p>Building 2 - 4th Floor, Room 12,</p>
  
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

elseif ($searchValue == 'b3 r1' || $searchValue == 'building 3 room 1') {
  $text = '

  <p>Building 3 - 1st Floor, Room 1</p>
  
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

    <!-- Building 3 - 1st Floor, Room 1 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 16 - 8 }
        );
      
      </script>
    <!-- Building 3 - 1st Floor, Room 1 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r2' || $searchValue == 'building 3 room 2') {
  $text = '

  <p>Building 3 - 1st Floor, Room 2</p>
  
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

    <!-- Building 3 - 1st Floor, Room 2 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 16 - 8 }
        );
      
      </script>
    <!-- Building 3 - 1st Floor, Room 2 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r3' || $searchValue == 'building 3 room 3') {
  $text = '

  <p>Building 3 - 1st Floor, Room 3</p>
  
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

    <!-- Building 3 - 1st Floor, Room 3 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 16 - 8 }
        );
      
      </script>
    <!-- Building 3 - 1st Floor, Room 3 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r4' || $searchValue == 'building 3 room 4') {
  $text = '

  <p>Building 3 - 1st Floor, Room 4</p>
  
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

    <!-- Building 3 - 1st Floor, Room 4 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 16 - 8 }
        );
      
      </script>
    <!-- Building 3 - 1st Floor, Room 4 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r5' || $searchValue == 'building 3 room 5') {
  $text = '

  <p>Building 3 - 2nd Floor, Room 5</p>
  
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

    <!-- Building 3 - 2nd Floor, Room 5 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 14 - 8 }
        );
      
      </script>
    <!-- Building 3 - 2nd Floor, Room 5 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r6' || $searchValue == 'building 3 room 6') {
  $text = '

  <p>Building 3 - 2nd Floor, Room 6</p>
  
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

    <!-- Building 3 - 2nd Floor, Room 6 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 14 - 8 }
        );
      
      </script>
    <!-- Building 3 - 2nd Floor, Room 6 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r7' || $searchValue == 'building 3 room 7') {
  $text = '

  <p>Building 3 - 2nd Floor, Room 7</p>
  
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

    <!-- Building 3 - 2nd Floor, Room 7 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 14 - 8 }
        );
      
      </script>
    <!-- Building 3 - 2nd Floor, Room 7 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r8' || $searchValue == 'building 3 room 8') {
  $text = '

  <p>Building 3 - 2nd Floor, Room 8</p>
  
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

    <!-- Building 3 - 2nd Floor, Room 8 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 14 - 8 }
        );
      
      </script>
    <!-- Building 3 - 2nd Floor, Room 8 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r9' || $searchValue == 'building 3 room 9') {
  $text = '

  <p>Building 3 - 3rd Floor, Room 9</p>
  
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

    <!-- Building 3 - 3rd Floor, Room 9 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 12 - 8 }
        );
      
      </script>
    <!-- Building 3 - 3rd Floor, Room 9 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r10' || $searchValue == 'building 3 room 10') {
  $text = '

  <p>Building 3 - 3rd Floor, Room 10</p>
  
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

    <!-- Building 3 - 3rd Floor, Room 10 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 12 - 8 }
        );
      
      </script>
    <!-- Building 3 - 3rd Floor, Room 10 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r11' || $searchValue == 'building 3 room 11') {
  $text = '

  <p>Building 3 - 3rd Floor, Room 11</p>
  
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

    <!-- Building 3 - 3rd Floor, Room 11 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 12 - 8 }
        );
      
      </script>
    <!-- Building 3 - 3rd Floor, Room 11 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r12' || $searchValue == 'building 3 room 12') {
  $text = '

  <p>Building 3 - 3rd Floor, Room 12</p>
  
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

    <!-- Building 3 - 3rd Floor, Room 12 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 12 - 8 }
        );
      
      </script>
    <!-- Building 3 - Floor 3, Room 12 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r13' || $searchValue == 'building 3 room 13') {
  $text = '

  <p>Building 3 - 4th Floor, Room 13</p>
  
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

    <!-- Building 3 - 4th Floor, Room 13 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 11, y: 10 - 8 }
        );
      
      </script>
    <!-- Building 3 - 4th Floor, Room 13 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r14' || $searchValue == 'building 3 room 14') {
  $text = '

  <p>Building 3 - 4th Floor, Room 14</p>
  
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

    <!-- Building 3 - 4th Floor, Room 14 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 14, y: 10 - 8 }
        );
      
      </script>
    <!-- Building 3 - 4th Floor, Room 14 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r15' || $searchValue == 'building 3 room 15') {
  $text = '

  <p>Building 3 - 4th Floor, Room 15</p>
  
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

    <!-- Building 3 - 4th Floor, Room 15 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 16, y: 10 - 8 }
        );
      
      </script>
    <!-- Building 3 - 4th Floor, Room 15 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b3 r16' || $searchValue == 'building 3 room 16') {
  $text = '

  <p>Building 3 - 4th Floor, Room 16</p>
  
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

    <!-- Building 3 - 4th Floor, Room 16 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
        { x: 22, y: 42 - 1 },
        { x: 19, y: 10 - 8 }
        );
      
      </script>
    <!-- Building 3 - 4th Floor, Room 16 -->      

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

elseif ($searchValue == 'b4 r1' || $searchValue == 'building 1 room 1') {
  
  $text = '

  <p>Building 4 - 1st Floor, Room 1,</p>
  
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

elseif ($searchValue == 'principal office' || $searchValue == 'po') {
  
  $text = '

  <p>1st Floor, Principal Office,</p>
  
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

elseif ($searchValue == 'b4 lrmds' || $searchValue == 'lrmds') {
  
  $text = '

  <p>2nd Floor,LMRDS,</p>
  
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

elseif ($searchValue == 'b4 r2' || $searchValue == 'building 4 room 2') {
  
  $text = '

  <p>Building 4 - 2nd Floor, Room 2,</p>
  
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

elseif ($searchValue == 'e classrom' || $searchValue == 'e-classroom') {
  
  $text = '

  <p>2n Floor, E-CLASSROOM,</p>
  
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

elseif ($searchValue == 'b4 r3' || $searchValue == 'building 4 room 3') {
  
  $text = '

  <p>Building 4 - 3rd Floor, Room 3,</p>
  
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

elseif ($searchValue == 'b4 r4' || $searchValue == 'building 4 room 4') {
  
  $text = '

  <p>Building 4 - 4th Floor, Room 4,</p>
  
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

elseif ($searchValue == 'b4 r5' || $searchValue == 'building 4 room 5') {
  
  $text = '

  <p>Building 4 - 4th Floor, Room 5</p>
  
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

elseif ($searchValue == 'b6 r1' || $searchValue == 'building 6 room 1') {
  
  $text = '

  <p>Building 6 - Floor 1, Room 1,</p>
  
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

elseif ($searchValue == 'library' || $searchValue == 'lib') {
  
  $text = '

  <p>Building 6 - 1st Floor, Library,</p>
  
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

elseif ($searchValue == 'b6 r2' || $searchValue == 'building 6 room 2') {
  
  $text = '

  <p>Building 6 - 1st Floor, Room 2,</p>
  
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

elseif ($searchValue == 'b6 r3' || $searchValue == 'building 6 room 3') {
  
  $text = '

  <p>Building 6 - 1st Floor, Room 3,</p>
  
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

elseif ($searchValue == 'b6 r4' || $searchValue == 'building 6 room 4') {
  
  $text = '

  <p>Building 6 - 2nd Floor, Room 4,</p>
  
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

elseif ($searchValue == 'canteen' || $searchValue == 'b6 canteen') {
  
  $text = '

  <p>Building 6 - 1st Floor, Canteen,</p>
  
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

elseif ($searchValue == 'b6 r5' || $searchValue == 'building 6 room 5') {
  
  $text = '

  <p>Building 6 - 2nd Floor, Room 5,</p>
  
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

elseif ($searchValue == 'b6 r6' || $searchValue == 'building 6 room 6') {
  
  $text = '

  <p>Building 6 - 2nd Floor, Room 6,</p>
  
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

elseif ($searchValue == 'b6 r7' || $searchValue == 'building 6 room 7') {
  
  $text = '

  <p>Building 6 - 2nd Floor, Room 7,</p>
  
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

elseif ($searchValue == 'b6 r8' || $searchValue == 'building 6 room 8') {
  
  $text = '

  <p>Building 6 - 2nd Floor, Room 8,</p>
  
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

elseif ($searchValue == 'b6 r9' || $searchValue == 'building 6 room 9') {
  
  $text = '

  <p>Building 6 - 3rd Floor, Room 9,</p>
  
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

elseif ($searchValue == 'b6 r10' || $searchValue == 'building 6 room 10') {
  
  $text = '

  <p>Building 6 - 3rd Floor, Room 10,</p>
  
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

elseif ($searchValue == 'b6 r11' || $searchValue == 'building 6 room 11') {
  
  $text = '

  <p>Building 6 - 3rd Floor, Room 11,</p>
  
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

elseif ($searchValue == 'b6 r12' || $searchValue == 'building 6 room 12') {
  
  $text = '

  <p>Building 6 - 3rd Floor, Room 12,</p>
  
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

elseif ($searchValue == 'b6 r13' || $searchValue == 'building 6 room 13') {
  
  $text = '

  <p>Building 6 - 3rd Floor, Room 13,</p>
  
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

elseif ($searchValue == 'b6 r14' || $searchValue == 'building 6 room 14') {
  
  $text = '

  <p>Building 6 - 4th Floor, Room 14,</p>
  
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

elseif ($searchValue == 'b6 r15' || $searchValue == 'building 6 room 15') {
  
  $text = '

  <p>Building 6 - 4th Floor, Room 15,</p>
  
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

elseif ($searchValue == 'b6 r16' || $searchValue == 'building 6 room 16') {
  
  $text = '

  <p>Building 6 - 4th Floor, Room 16,</p>
  
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

elseif ($searchValue == 'b6 r17' || $searchValue == 'building 6 room 17') {
  
  $text = '

  <p>Building 6 - 4th Floor, Room 17,</p>
  
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

elseif ($searchValue == 'b6 r18' || $searchValue == 'building 6 room 18') {
  
  $text = '

  <p>Building 6 - 4th Floor, Room 18,</p>
  
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

elseif ($searchValue == 'b8 r1' || $searchValue == 'building 8 room 1') {
  $text = '

  <p>Building 8 - 1st Floor, Room 1</p>
  
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

    <!-- Building 8 - 1st Floor, Room 1 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 36 - 8 }
        );
      
      </script>
    <!-- Building 8 - 1st Floor, Room 1 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r2' || $searchValue == 'building 8 room 2') {
  $text = '

  <p>Building 8 - 1st Floor, Room 2</p>
  
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

    <!-- Building 8 - 1st Floor, Room 2 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 40 - 8 }
        );
      
      </script>
    <!-- Building 8 - 1st Floor, Room 2 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r3' || $searchValue == 'building 8 room 3') {
  $text = '

  <p>Building 8 - 1st Floor, Room 3</p>
  
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

    <!-- Building 8 - 1st Floor, Room 3 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 33, y: 43 - 8 }
        );
      
      </script>
    <!-- Building 8 - 1st Floor, Room 3 -->      

    </div>

    '
  ;
}



elseif ($searchValue == 'b8 r4' || $searchValue == 'building 8 room 4') {
  $text = '

  <p>Building 8 - 2nd Floor, Room 4</p>
  
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

    <!-- Building 8 - 2nd Floor, Room 4 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 35, y: 36 - 8 }
        );
      
      </script>
    <!-- Building 8 - 2nd Floor, Room 4 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r5' || $searchValue == 'building 8 room 5') {
  $text = '

  <p>Building 8 - 2nd Floor, Room 5</p>
  
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

    <!-- Building 8 - 2nd Floor, Room 5 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 35, y: 40 - 8 }
        );
      
      </script>
    <!-- Building 8 - 2nd Floor, Room 5 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r6' || $searchValue == 'building 8 room 6') {
  $text = '

  <p>Building 8 - 2nd Floor, Room 6</p>
  
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

    <!-- Building 8 - 2nd Floor, Room 6 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 35, y: 43 - 8 }
        );
      
      </script>
    <!-- Building 8 - 2nd Floor, Room 6 -->      

    </div>

    '
  ;
}


elseif ($searchValue == 'b8 r7' || $searchValue == 'building 8 room 7') {
  $text = '

  <p>Building 8 - 3rd Floor, Room 7</p>
  
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

    <!-- Building 8 - 3rd Floor, Room 7 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 37, y: 36 - 8 }
        );
      
      </script>
    <!-- Building 8 - 3rd Floor, Room 7 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r8' || $searchValue == 'building 8 room 8') {
  $text = '

  <p>Building 8 - 3rd Floor, Room 8</p>
  
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

    <!-- Building 8 - 3rd Floor, Room 8 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 37, y: 40 - 8 }
        );
      
      </script>
    <!-- Building 8 - 3rd Floor, Room 8 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r9' || $searchValue == 'building 8 room 9') {
  $text = '

  <p>Building 8 - 3rd Floor, Room 9</p>
  
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

    <!-- Building 8 - 3rd Floor, Room 9 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 37, y: 43 - 8 }
        );
      
      </script>
    <!-- Building 8 - 3rd Floor, Room 9 -->      

    </div>

    '
  ;
}



elseif ($searchValue == 'b8 r10' || $searchValue == 'building 8 room 10') {
  $text = '

  <p>Building 8 - 4th Floor, Room 10</p>
  
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

    <!-- Building 8 - 4th Floor, Room 10 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 39, y: 36 - 8 }
        );
      
      </script>
    <!-- Building 8 - 4th Floor, Room 10 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r11' || $searchValue == 'building 8 room 11') {
  $text = '

  <p>Building 8 - 4th Floor, Room 11</p>
  
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

    <!-- Building 8 - 4th Floor, Room 11 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 39, y: 40 - 8 }
        );
      
      </script>
    <!-- Building 8 - 4th Floor, Room 14 -->      

    </div>

    '
  ;
}

elseif ($searchValue == 'b8 r12' || $searchValue == 'building 8 room 12') {
  $text = '

  <p>Building 8 - 4th Floor, Room 12</p>
  
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

    <!-- Building 8 - 4th Floor, Room 12 -->
      <script src="astar.js"></script>
      <script>
        drawMap(
          0,
          { x: 21, y: 42 - 1 },
          { x: 39, y: 43 - 8 }
        );
      
      </script>
    <!-- Building 8 - 4th Floor, Room 12 -->      

    </div>

    '
  ;
}


elseif ($searchValue == 'b7 ipp room' || $searchValue == 'building 7 ipp room') {
  
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

elseif ($searchValue == 'b6 cr1' || $searchValue == 'building 6 cr1') {
  
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

elseif ($searchValue == 'gulayan sa paaralan' || $searchValue == 'gulayan') {
  
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

elseif ($searchValue == 'wash Area' || $searchValue == 'wash') {
  
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

elseif ($searchValue == 'covered court' || $searchValue == 'court') {
  
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

elseif ($searchValue == 'holding area' || $searchValue == 'hold') {
  
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

elseif ($searchValue == 'mini forest' || $searchValue == 'forest') {
  
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

elseif ($searchValue == 'information desk' || $searchValue == 'desk') {
  
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

elseif ($searchValue == 'flag pole' || $searchValue == 'flag') {
  
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