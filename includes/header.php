<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="text/css" href="../../assets/img/favicon.png">
    
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Flowbite CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))        
    </script>

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
    // Asynchronous Request of Algorithm
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
    // Asynchronous Request of Estimated Time of Arrival / ETA
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
    <!-- Canvas Size -->
    <style>
      canvas {
        border-radius: 10px ;
        border: 3px solid black;
      }
    </style>    
    
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