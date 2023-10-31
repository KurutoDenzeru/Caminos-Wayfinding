<!DOCTYPE html>
<html>
  <head>
    <title>A* Algorithm with Canvas</title>
    <style>
      canvas {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <canvas id="canvas" width="400" height="400"></canvas>
    <script src="astar.js"></script>
    <script>
      const grid = [
        [
          new Node(0, 0, false),
          new Node(0, 1, false),
          new Node(0, 2, false),
          new Node(0, 3, true),
        ],
        [
          new Node(1, 0, false),
          new Node(1, 1, true),
          new Node(1, 2, true),
          new Node(1, 3, false),
        ],
        [
          new Node(2, 0, false),
          new Node(2, 1, true),
          new Node(2, 2, false),
          new Node(2, 3, false),
        ],
        [
          new Node(3, 0, false),
          new Node(3, 1, false),
          new Node(3, 2, false),
          new Node(3, 3, false),
        ],
      ];

      const startNode = grid[0][0];
      const endNode = grid[3][3];

      const canvas = document.getElementById("canvas");
      const context = canvas.getContext("2d");

      const boxSize = 50;
      const margin = 10;

      // Draw grid
      for (let i = 0; i < grid.length; i++) {
        for (let j = 0; j < grid[i].length; j++) {
          const node = grid[i][j];
          const x = margin + j * (boxSize + margin);
          const y = margin + i * (boxSize + margin);

          if (node.obstacle) {
            context.fillStyle = "gray";
          } else {
            context.fillStyle = "white";
          }

          context.fillRect(x, y, boxSize, boxSize);

          context.strokeStyle = "black";
          context.strokeRect(x, y, boxSize, boxSize);
        }
      }

      // Find path
      const path = AStar(startNode, endNode, grid);

      if (path) {
        // Draw path
        context.beginPath();
        context.moveTo(
          margin + path[0].x * (boxSize + margin) + boxSize / 2,
          margin + path[0].y * (boxSize + margin) + boxSize / 2
        );

        for (let i = 1; i < path.length; i++) {
          context.lineTo(
            margin + path[i].x * (boxSize + margin) + boxSize / 2,
            margin + path[i].y * (boxSize + margin) + boxSize / 2
          );
        }

        context.strokeStyle = "green";
        context.lineWidth = 5;
        context.stroke();
      }
    </script>
  </body>
</html>