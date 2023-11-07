// Image Initiative with Canva drawMap
const data = {
  maps: [
    {
      size: 512,
      blockSize: 12,
      map: [
        "mapping/chuchumap.jpg",
        "mapping/Restroom.jpg",
        "mapping/Canteen.jpg",
      ],
      debug: false,
      obstacles: [
        // stage and flag pole
        { x: 13, y: 41 },
        { x: 13, y: 40 },
        { x: 13, y: 39 },
        { x: 13, y: 38 },
        { x: 13, y: 37 },
        { x: 13, y: 36 },
        { x: 13, y: 35 },
        { x: 13, y: 34 },
        { x: 14, y: 34 },
        { x: 15, y: 34 },
        { x: 16, y: 34 },
        { x: 16, y: 35 },
        { x: 16, y: 36 },
        { x: 16, y: 37 },
        { x: 17, y: 37 },
        { x: 18, y: 37 },
        { x: 19, y: 37 },
        { x: 20, y: 37 },
        { x: 20, y: 38 },
        { x: 20, y: 39 },
        { x: 20, y: 40 },
        { x: 20, y: 41 },

        // information desk
        { x: 23, y: 37 },
        { x: 24, y: 37 },
        { x: 25, y: 37 },
        { x: 25, y: 38 },
        { x: 25, y: 39 },
        { x: 25, y: 40 },
        { x: 25, y: 41 },
        { x: 24, y: 41 },
        { x: 23, y: 41 },
        { x: 23, y: 40 },
        { x: 23, y: 39 },

        // wash area
        { x: 21, y: 29 },
        { x: 21, y: 30 },
        { x: 21, y: 31 },
        { x: 21, y: 32 },
        { x: 22, y: 32 },
        { x: 23, y: 32 },
        { x: 22, y: 29 },
        { x: 23, y: 28 },
        { x: 24, y: 28 },
        { x: 24, y: 29 },
        { x: 24, y: 30 },
        { x: 24, y: 31 },
        { x: 24, y: 32 },
        { x: 24, y: 33 },

        // building 7
        { x: 26, y: 31 },
        { x: 27, y: 31 },
        { x: 28, y: 31 },
        { x: 29, y: 31 },
        { x: 29, y: 30 },
        { x: 29, y: 29 },
        { x: 29, y: 28 },
        { x: 29, y: 27 },
        { x: 29, y: 26 },
        { x: 28, y: 26 },
        { x: 27, y: 26 },
        { x: 26, y: 26 },
        { x: 26, y: 28 },
        { x: 26, y: 29 },
        { x: 26, y: 30 },

        // building 5
        { x: 29, y: 25 },
        { x: 29, y: 25 },
        { x: 29, y: 24 },
        { x: 29, y: 23 },
        { x: 29, y: 22 },
        { x: 29, y: 21 },
        { x: 29, y: 20 },
        { x: 29, y: 19 },
        { x: 29, y: 18 },
        { x: 29, y: 17 },
        { x: 29, y: 16 },
        { x: 29, y: 16 },
        { x: 28, y: 16 },
        { x: 27, y: 16 },
        { x: 26, y: 16 },
        { x: 25, y: 16 },
        { x: 24, y: 16 },
        { x: 23, y: 16 },
        { x: 22, y: 16 },
        { x: 21, y: 16 },
        { x: 25, y: 17 },
        { x: 25, y: 18 },
        { x: 25, y: 19 },
        { x: 25, y: 20 },
        { x: 25, y: 21 },
        { x: 25, y: 22 },
        { x: 25, y: 23 },
        { x: 25, y: 24 },
        { x: 25, y: 25 },
        { x: 24, y: 25 },
        { x: 23, y: 25 },
        { x: 22, y: 26 },
        { x: 21, y: 27 },
        { x: 21, y: 26 },
        { x: 21, y: 25 },
        { x: 21, y: 24 },
        { x: 21, y: 23 },
        { x: 21, y: 22 },
        { x: 21, y: 21 },
        { x: 21, y: 20 },
        { x: 21, y: 19 },

        // mini forest
        { x: 18, y: 23 },
        { x: 17, y: 23 },
        { x: 16, y: 23 },
        { x: 15, y: 23 },
        { x: 14, y: 23 },
        { x: 14, y: 22 },
        { x: 14, y: 21 },
        { x: 14, y: 20 },
        { x: 14, y: 19 },
        { x: 14, y: 18 },
        { x: 14, y: 17 },
        { x: 14, y: 16 },
        { x: 15, y: 16 },
        { x: 16, y: 16 },
        { x: 17, y: 16 },
        { x: 18, y: 16 },
        { x: 18, y: 19 },
        { x: 18, y: 20 },
        { x: 18, y: 21 },
        { x: 18, y: 22 },

        // holding area
        { x: 13, y: 17 },
        { x: 12, y: 17 },
        { x: 12, y: 19 },
        { x: 12, y: 20 },
        { x: 12, y: 21 },
        { x: 12, y: 22 },
        { x: 13, y: 22 },

        //building1
        { x: 10, y: 23 },
        { x: 10, y: 25 },
        { x: 10, y: 26 },
        { x: 10, y: 27 },
        { x: 10, y: 28 },
        { x: 10, y: 29 },
        { x: 10, y: 30 },
        { x: 10, y: 31 },
        { x: 10, y: 32 },
        { x: 10, y: 33 },
        { x: 10, y: 34 },
        { x: 10, y: 36 },
        { x: 9, y: 23 },
        { x: 9, y: 36 },
        { x: 8, y: 23 },
        { x: 8, y: 25 },
        { x: 8, y: 26 },
        { x: 8, y: 27 },
        { x: 8, y: 28 },
        { x: 8, y: 29 },
        { x: 8, y: 30 },
        { x: 8, y: 31 },
        { x: 8, y: 32 },
        { x: 8, y: 33 },
        { x: 8, y: 34 },
        { x: 8, y: 36 },
        { x: 7, y: 23 },
        { x: 7, y: 36 },
        { x: 6, y: 23 },
        { x: 6, y: 25 },
        { x: 6, y: 26 },
        { x: 6, y: 27 },
        { x: 6, y: 28 },
        { x: 6, y: 29 },
        { x: 6, y: 30 },
        { x: 6, y: 31 },
        { x: 6, y: 32 },
        { x: 6, y: 33 },
        { x: 6, y: 34 },
        { x: 6, y: 36 },
        { x: 5, y: 23 },
        { x: 5, y: 36 },
        { x: 4, y: 23 },
        { x: 4, y: 25 },
        { x: 4, y: 26 },
        { x: 4, y: 27 },
        { x: 4, y: 28 },
        { x: 4, y: 29 },
        { x: 4, y: 30 },
        { x: 4, y: 31 },
        { x: 4, y: 32 },
        { x: 4, y: 33 },
        { x: 4, y: 34 },
        { x: 4, y: 36 },
        { x: 3, y: 23 },
        { x: 3, y: 36 },
        { x: 2, y: 23 },
        { x: 2, y: 24 },
        { x: 2, y: 25 },
        { x: 2, y: 26 },
        { x: 2, y: 27 },
        { x: 2, y: 28 },
        { x: 2, y: 29 },
        { x: 2, y: 30 },
        { x: 2, y: 31 },
        { x: 2, y: 32 },
        { x: 2, y: 33 },
        { x: 2, y: 34 },
        { x: 2, y: 35 },
        { x: 2, y: 36 },

        //building2
        { x: 1, y: 9 },
        { x: 2, y: 9 },
        { x: 3, y: 9 },
        { x: 4, y: 9 },
        { x: 5, y: 9 },
        { x: 6, y: 9 },
        { x: 7, y: 9 },
        { x: 1, y: 10 },
        { x: 1, y: 11 },
        { x: 1, y: 12 },
        { x: 1, y: 13 },
        { x: 1, y: 14 },
        { x: 1, y: 15 },
        { x: 1, y: 16 },
        { x: 1, y: 17 },
        { x: 1, y: 18 },
        { x: 1, y: 19 },
        { x: 1, y: 20 },
        { x: 3, y: 11 },
        { x: 3, y: 12 },
        { x: 3, y: 13 },
        { x: 3, y: 14 },
        { x: 3, y: 15 },
        { x: 3, y: 16 },
        { x: 3, y: 17 },
        { x: 3, y: 18 },
        { x: 3, y: 19 },
        { x: 3, y: 20 },
        { x: 5, y: 11 },
        { x: 5, y: 12 },
        { x: 5, y: 13 },
        { x: 5, y: 14 },
        { x: 5, y: 15 },
        { x: 5, y: 16 },
        { x: 5, y: 17 },
        { x: 5, y: 18 },
        { x: 5, y: 19 },
        { x: 5, y: 20 },
        { x: 7, y: 11 },
        { x: 7, y: 12 },
        { x: 7, y: 13 },
        { x: 7, y: 14 },
        { x: 7, y: 15 },
        { x: 7, y: 16 },
        { x: 7, y: 17 },
        { x: 7, y: 18 },
        { x: 7, y: 19 },
        { x: 7, y: 20 },
        { x: 9, y: 11 },
        { x: 9, y: 12 },
        { x: 9, y: 13 },
        { x: 9, y: 14 },
        { x: 9, y: 15 },
        { x: 9, y: 16 },
        { x: 9, y: 17 },
        { x: 9, y: 18 },
        { x: 9, y: 19 },
        { x: 9, y: 20 },
        { x: 1, y: 21 },
        { x: 1, y: 22 },
        { x: 2, y: 22 },
        { x: 3, y: 22 },
        { x: 4, y: 22 },
        { x: 5, y: 22 },
        { x: 6, y: 22 },
        { x: 7, y: 22 },
        { x: 8, y: 22 },
        { x: 9, y: 22 },

        // Building 3
        { x: 7, y: 1 },
        { x: 8, y: 1 },
        { x: 9, y: 1 },
        { x: 10, y: 1 },
        { x: 11, y: 1 },
        { x: 12, y: 1 },
        { x: 13, y: 1 },
        { x: 14, y: 1 },
        { x: 15, y: 1 },
        { x: 16, y: 1 },
        { x: 17, y: 1 },
        { x: 18, y: 1 },
        { x: 19, y: 1 },
        { x: 20, y: 1 },
        { x: 21, y: 1 },
        { x: 21, y: 2 },
        { x: 21, y: 3 },
        { x: 21, y: 4 },
        { x: 21, y: 5 },
        { x: 21, y: 6 },
        { x: 21, y: 7 },
        { x: 21, y: 8 },
        { x: 21, y: 9 },
        { x: 9, y: 3 },
        { x: 10, y: 3 },
        { x: 11, y: 3 },
        { x: 12, y: 3 },
        { x: 13, y: 3 },
        { x: 14, y: 3 },
        { x: 15, y: 3 },
        { x: 16, y: 3 },
        { x: 17, y: 3 },
        { x: 18, y: 3 },
        { x: 19, y: 3 },
        { x: 9, y: 5 },
        { x: 10, y: 5 },
        { x: 11, y: 5 },
        { x: 12, y: 5 },
        { x: 13, y: 5 },
        { x: 14, y: 5 },
        { x: 15, y: 5 },
        { x: 16, y: 5 },
        { x: 17, y: 5 },
        { x: 18, y: 5 },
        { x: 19, y: 5 },
        { x: 9, y: 7 },
        { x: 10, y: 7 },
        { x: 11, y: 7 },
        { x: 12, y: 7 },
        { x: 13, y: 7 },
        { x: 14, y: 7 },
        { x: 15, y: 7 },
        { x: 16, y: 7 },
        { x: 17, y: 7 },
        { x: 18, y: 7 },
        { x: 19, y: 7 },
        { x: 9, y: 9 },
        { x: 10, y: 9 },
        { x: 11, y: 9 },
        { x: 12, y: 9 },
        { x: 13, y: 9 },
        { x: 14, y: 9 },
        { x: 15, y: 9 },
        { x: 16, y: 9 },
        { x: 17, y: 9 },
        { x: 18, y: 9 },
        { x: 19, y: 9 },
        { x: 7, y: 1 },
        { x: 7, y: 2 },
        { x: 7, y: 3 },
        { x: 7, y: 4 },
        { x: 7, y: 5 },
        { x: 7, y: 6 },
        { x: 7, y: 7 },
        { x: 7, y: 8 },

        //Building 4
        { x: 23, y: 0 },
        { x: 23, y: 1 },
        { x: 23, y: 2 },
        { x: 23, y: 3 },
        { x: 23, y: 4 },
        { x: 23, y: 5 },
        { x: 23, y: 6 },
        { x: 23, y: 7 },
        { x: 23, y: 8 },
        { x: 24, y: 0 },
        { x: 25, y: 0 },
        { x: 26, y: 0 },
        { x: 27, y: 0 },
        { x: 28, y: 0 },
        { x: 29, y: 0 },
        { x: 30, y: 0 },
        { x: 31, y: 0 },
        { x: 31, y: 1 },
        { x: 31, y: 2 },
        { x: 31, y: 3 },
        { x: 31, y: 4 },
        { x: 31, y: 5 },
        { x: 31, y: 6 },
        { x: 24, y: 2 },
        { x: 25, y: 2 },
        { x: 26, y: 2 },
        { x: 27, y: 2 },
        { x: 28, y: 2 },
        { x: 29, y: 2 },
        { x: 24, y: 4 },
        { x: 25, y: 4 },
        { x: 26, y: 4 },
        { x: 27, y: 4 },
        { x: 28, y: 4 },
        { x: 29, y: 4 },
        { x: 24, y: 6 },
        { x: 25, y: 6 },
        { x: 26, y: 6 },
        { x: 27, y: 6 },
        { x: 28, y: 6 },
        { x: 29, y: 6 },
        { x: 25, y: 8 },
        { x: 26, y: 8 },
        { x: 27, y: 8 },
        { x: 28, y: 8 },
        { x: 29, y: 8 },

        //Building 6
        { x: 39, y: 23 },
        { x: 39, y: 22 },
        { x: 39, y: 21 },
        { x: 39, y: 20 },
        { x: 39, y: 19 },
        { x: 39, y: 18 },
        { x: 39, y: 17 },
        { x: 39, y: 16 },
        { x: 39, y: 15 },
        { x: 39, y: 14 },
        { x: 39, y: 13 },
        { x: 39, y: 12 },
        { x: 39, y: 11 },
        { x: 39, y: 10 },
        { x: 39, y: 9 },
        { x: 39, y: 8 },
        { x: 39, y: 7 },
        { x: 39, y: 6 },
        { x: 39, y: 6 },
        { x: 38, y: 6 },
        { x: 37, y: 6 },
        { x: 36, y: 6 },
        { x: 35, y: 6 },
        { x: 34, y: 6 },
        { x: 32, y: 6 },
        { x: 31, y: 6 },
        { x: 31, y: 8 },
        { x: 31, y: 9 },
        { x: 31, y: 10 },
        { x: 31, y: 11 },
        { x: 31, y: 12 },
        { x: 31, y: 13 },
        { x: 31, y: 14 },
        { x: 31, y: 15 },
        { x: 31, y: 16 },
        { x: 31, y: 17 },
        { x: 31, y: 18 },
        { x: 31, y: 19 },
        { x: 31, y: 20 },
        { x: 31, y: 21 },
        { x: 31, y: 22 },
        { x: 33, y: 6 },
        { x: 33, y: 8 },
        { x: 33, y: 9 },
        { x: 33, y: 10 },
        { x: 33, y: 11 },
        { x: 33, y: 12 },
        { x: 33, y: 13 },
        { x: 33, y: 14 },
        { x: 33, y: 15 },
        { x: 33, y: 16 },
        { x: 33, y: 17 },
        { x: 33, y: 18 },
        { x: 33, y: 19 },
        { x: 33, y: 20 },
        { x: 33, y: 21 },
        { x: 33, y: 22 },
        { x: 35, y: 6 },
        { x: 35, y: 8 },
        { x: 35, y: 9 },
        { x: 35, y: 10 },
        { x: 35, y: 11 },
        { x: 35, y: 12 },
        { x: 35, y: 13 },
        { x: 35, y: 14 },
        { x: 35, y: 15 },
        { x: 35, y: 16 },
        { x: 35, y: 17 },
        { x: 35, y: 18 },
        { x: 35, y: 19 },
        { x: 35, y: 20 },
        { x: 35, y: 21 },
        { x: 35, y: 22 },
        { x: 37, y: 6 },
        { x: 37, y: 8 },
        { x: 37, y: 9 },
        { x: 37, y: 10 },
        { x: 37, y: 11 },
        { x: 37, y: 12 },
        { x: 37, y: 13 },
        { x: 37, y: 14 },
        { x: 37, y: 15 },
        { x: 37, y: 16 },
        { x: 37, y: 17 },
        { x: 37, y: 18 },
        { x: 37, y: 19 },
        { x: 37, y: 20 },
        { x: 37, y: 21 },
        { x: 37, y: 22 },

        // Building 8
        { x: 40, y: 37 },
        { x: 39, y: 37 },
        { x: 38, y: 37 },
        { x: 37, y: 37 },
        { x: 36, y: 37 },
        { x: 35, y: 37 },
        { x: 34, y: 37 },
        { x: 33, y: 37 },
        { x: 32, y: 37 },
        { x: 31, y: 37 },
        { x: 30, y: 37 },
        { x: 30, y: 36 },
        { x: 40, y: 36 },
        { x: 40, y: 35 },
        { x: 40, y: 34 },
        { x: 40, y: 33 },
        { x: 40, y: 32 },
        { x: 40, y: 31 },
        { x: 40, y: 30 },
        { x: 40, y: 29 },
        { x: 40, y: 28 },
        { x: 40, y: 27 },
        { x: 40, y: 26 },
        { x: 40, y: 25 },
        { x: 40, y: 24 },
        { x: 39, y: 24 },
        { x: 38, y: 24 },
        { x: 37, y: 24 },
        { x: 36, y: 24 },
        { x: 35, y: 24 },
        { x: 34, y: 24 },
        { x: 33, y: 24 },
        { x: 32, y: 24 },
        { x: 38, y: 26 },
        { x: 38, y: 26 },
        { x: 38, y: 27 },
        { x: 38, y: 28 },
        { x: 38, y: 29 },
        { x: 38, y: 30 },
        { x: 38, y: 31 },
        { x: 38, y: 32 },
        { x: 38, y: 33 },
        { x: 38, y: 34 },
        { x: 38, y: 35 },
        { x: 36, y: 26 },
        { x: 36, y: 27 },
        { x: 36, y: 28 },
        { x: 36, y: 29 },
        { x: 36, y: 30 },
        { x: 36, y: 31 },
        { x: 36, y: 32 },
        { x: 36, y: 33 },
        { x: 36, y: 34 },
        { x: 36, y: 35 },
        { x: 34, y: 26 },
        { x: 34, y: 27 },
        { x: 34, y: 28 },
        { x: 34, y: 29 },
        { x: 34, y: 30 },
        { x: 34, y: 31 },
        { x: 34, y: 32 },
        { x: 34, y: 33 },
        { x: 34, y: 34 },
        { x: 34, y: 35 },
        { x: 32, y: 26 },
        { x: 32, y: 27 },
        { x: 32, y: 28 },
        { x: 32, y: 29 },
        { x: 32, y: 30 },
        { x: 32, y: 31 },
        { x: 32, y: 32 },
        { x: 32, y: 33 },
        { x: 32, y: 34 },
        { x: 32, y: 35 },
      ],
    },
  ],
};
// Image Initiative with Canva drawMap

// Node Representation
class INode {
  constructor(x, y, obstacle) {
    this.x = x;
    this.y = y;
    this.obstacle = obstacle;
    this.gScore = Infinity;
    this.fScore = Infinity;
    this.parent = null;
  }
}
// Node Representation

function AStarAlternate(startNode, endNode, grid) {
  const openSet = new PriorityQueue();
  const closedSet = [];
  const paths = [];

  startNode.gScore = 0;
  startNode.fScore = heuristic(startNode, endNode);

  openSet.enqueue(startNode, startNode.fScore);

  while (!openSet.isEmpty()) {
    const current = openSet.dequeue().element;

    if (current === endNode) {
      let node = current;
      const path = [];

      while (node.parent !== null) {
        path.unshift(node);
        node = node.parent;
      }
      path.unshift(startNode);
      paths.push(path);
    }

    closedSet.push(current);

    for (let x = -1; x <= 1; x++) {
      for (let y = -1; y <= 1; y++) {
        if (x === 0 && y === 0) {
          continue;
        }

        const neighborX = current.x + x;
        const neighborY = current.y + y;

        if (
          neighborX < 0 ||
          neighborX >= grid.length ||
          neighborY < 0 ||
          neighborY >= grid[0].length
        ) {
          continue;
        }

        const neighbor = grid[neighborX][neighborY];

        if (
          neighbor.obstacle ||
          closedSet.some((element) => element === neighbor)
        ) {
          continue;
        }

        const tentativeGScore = current.gScore + heuristic(current, neighbor);

        const existingNeighbor = openSet.elements.find(
          (element) => element.element === neighbor
        );
        if (!existingNeighbor) {
          neighbor.parent = current;
          neighbor.gScore = tentativeGScore;
          neighbor.fScore = tentativeGScore + heuristic(neighbor, endNode);
          openSet.enqueue(neighbor, neighbor.fScore);
        } else if (tentativeGScore < existingNeighbor.element.gScore) {
          existingNeighbor.element.parent = current;
          existingNeighbor.element.gScore = tentativeGScore;
          existingNeighbor.element.fScore =
            tentativeGScore + heuristic(neighbor, endNode);
        }
      }
    }
  }

  return paths;
}

// Priority Queue implementation
class PriorityQueue {
  constructor() {
    this.elements = [];
  }

  enqueue(element, priority) {
    const queueElement = { element, priority };

    if (this.isEmpty()) {
      this.elements.push(queueElement);
    } else {
      let added = false;

      for (let i = 0; i < this.elements.length; i++) {
        if (queueElement.priority < this.elements[i].priority) {
          this.elements.splice(i, 0, queueElement);
          added = true;
          break;
        }
      }

      if (!added) {
        this.elements.push(queueElement);
      }
    }
  }

  dequeue() {
    if (this.isEmpty()) {
      return null;
    }
    return this.elements.shift();
  }

  isEmpty() {
    return this.elements.length === 0;
  }
}

// A* Algorithm
function AStar(startNode, endNode, grid) {
  const openSet = [startNode];
  const closedSet = [];
  const path = [];

  startNode.gScore = 0;
  startNode.fScore = heuristic(startNode, endNode);

  while (openSet.length > 0) {
    // Find node in open set with lowest fScore
    const current = openSet.reduce((lowest, node) => {
      return node.fScore < lowest.fScore ? node : lowest;
    });

    // If current is endNode, build path and return it
    if (current === endNode) {
      let node = current;
      while (node.parent !== null) {
        path.unshift(node);
        node = node.parent;
      }
      path.unshift(startNode);
      return path;
    }

    // Remove current from open set and add it to closed set
    openSet.splice(openSet.indexOf(current), 1);
    closedSet.push(current);

    // Check neighbors of current node
    for (let x = -1; x <= 1; x++) {
      for (let y = -1; y <= 1; y++) {
        if (x === 0 && y === 0) {
          continue;
        }

        const neighborX = current.x + x;
        const neighborY = current.y + y;

        // Check if neighbor is within grid boundaries
        if (
          neighborX < 0 ||
          neighborX >= grid.length ||
          neighborY < 0 ||
          neighborY >= grid[0].length
        ) {
          continue;
        }

        const neighbor = grid[neighborX][neighborY];

        // Check if neighbor is an obstacle or already in closed set
        if (neighbor.obstacle || closedSet.includes(neighbor)) {
          continue;
        }

        // Calculate tentative gScore for neighbor
        const tentativeGScore = current.gScore + heuristic(current, neighbor);

        // Add neighbor to open set if not already there
        if (!openSet.includes(neighbor)) {
          openSet.push(neighbor);
        } else if (tentativeGScore >= neighbor.gScore) {
          continue;
        }

        // Update neighbor's parent and scores
        neighbor.parent = current;
        neighbor.gScore = tentativeGScore;
        neighbor.fScore = tentativeGScore + heuristic(neighbor, endNode);
      }
    }
  }

  // No path found
  return null;
}

// Heuristic Return Value
function heuristic(nodeA, nodeB) {
  const dx = Math.abs(nodeA.x - nodeB.x);
  const dy = Math.abs(nodeA.y - nodeB.y);

  return dx + dy;
}
// Heuristic Return Value

let endPosLog = [];

// Map Graphics itself
function drawMap(index, startPos, endPos) {
  const map = data.maps[index];
  let element = document.getElementById("myCanvas"); // create element
  let ctx;

  if (document.getElementById("myCanvas")) {
    // Canvas element with the specified id exists
    console.log("Canvas element exists");

    ctx = element.getContext("2d");
    ctx.clearRect(0, 0, map.size, map.size);
  } else {
    // Canvas element with the specified id does not exist
    console.log("Canvas element does not exist");

    element = document.createElement("canvas");
    ctx = element.getContext("2d");

    element.setAttribute("width", map.size);
    element.setAttribute("height", map.size);

    element.setAttribute("id", "myCanvas");
  }

  const drawGrid = (color, start, end, results) => {
    // ...

    let animationProgress = 0; // Variable to track animation progress

    const animateStroke = () => {
      animationProgress += 0.01; // Increment animation progress

      ctx.beginPath();
      ctx.moveTo(start.x * map.blockSize, start.y * map.blockSize);

      for (let i = 0; i < results.length * animationProgress; i++) {
        const result = results[i];

        ctx.lineTo(result.x * map.blockSize, result.y * map.blockSize);
      }

      ctx.strokeStyle = color;
      ctx.lineWidth = 3;
      ctx.stroke();

      if (animationProgress < 1) {
        requestAnimationFrame(animateStroke); // Call the animation recursively
      }
    };

    animateStroke(); // Start the animation
  };

  const image = new Image();
  image.src = window.location.href.includes("?restroom")
    ? map.map[1]
    : window.location.href.includes("?canteen")
    ? map.map[2]
    : map.map[0];

  image.onload = () => {
    ctx.drawImage(image, 0, 0);

    const blocks_x = Math.floor(map.size / map.blockSize),
      blocks_y = Math.floor(map.size / map.blockSize),
      grid = [];

    for (let x = 0; x < blocks_x; x++) {
      const row = [];

      for (let y = 0; y < blocks_y; y++) {
        const isObstacle = map.obstacles.find(
          (obstacle) => obstacle.x === x && obstacle.y === y
        );

        if (map.debug) {
          if (isObstacle) {
            // debug
            ctx.fillStyle = "#FF0000";
            ctx.fillRect(
              x * map.blockSize,
              y * map.blockSize,
              map.blockSize,
              map.blockSize
            );
          } else
            ctx.strokeRect(
              x * map.blockSize,
              y * map.blockSize,
              map.blockSize,
              map.blockSize
            );
        }

        row.push(new INode(x, y, !!isObstacle));
      }

      grid.push(row);
    }

    let start;
    const length = endPosLog.length;

    if (length == 0) {
      start = grid[startPos.x][startPos.y];

      endPosLog.push({ x: startPos.x, y: startPos.y });
      endPosLog.push({ x: endPos.x, y: endPos.y });
    } else if (
      endPosLog[length - 1].x == endPos.x &&
      endPosLog[length - 1].y == endPos.y
    ) {
      start = grid[endPosLog[length - 2].x][endPosLog[length - 2].y];
    } else {
      start = grid[endPosLog[length - 1].x][endPosLog[length - 1].y];

      endPosLog.push({ x: endPos.x, y: endPos.y });
    }

    const end = grid[endPos.x][endPos.y];

    const results = AStar(start, end, grid);
    const results2 = AStarAlternate(start, end, grid);

    document.getElementById("seconds").innerHTML =
      Math.ceil(results.length / 3.18) + " seconds";

    if (results2) {
      drawGrid("#FF0000", start, end, results2[0]);
    }
    if (results) {
      drawGrid("#00FF00", start, end, results);
    }
  };
}
// Map Graphics itself
