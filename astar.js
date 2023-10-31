// Image Initiative with Canva drawMap
const data = {
  "maps": [
    {
      "size": 512,
      "blockSize": 12,
      "map": "mapping/chuchumap.jpg",
      "debug": true,
      "obstacles": [
        // stage and flag pole
        { "x": 13, "y": 41 },
        { "x": 13, "y": 40 },
        { "x": 13, "y": 39 },
        { "x": 13, "y": 38 },
        { "x": 13, "y": 37 },
        { "x": 13, "y": 36 },
        { "x": 13, "y": 35 },
        { "x": 13, "y": 34 },
        { "x": 14, "y": 34 },
        { "x": 15, "y": 34 },
        { "x": 16, "y": 34 },
        { "x": 16, "y": 35 },
        { "x": 16, "y": 36 },
        { "x": 16, "y": 37 },
        { "x": 17, "y": 37 },
        { "x": 18, "y": 37 },
        { "x": 19, "y": 37 },
        { "x": 20, "y": 37 },
        { "x": 20, "y": 38 },
        { "x": 20, "y": 39 },
        { "x": 20, "y": 40 },
        { "x": 20, "y": 41 },

        // information desk
        { "x": 23, "y": 37 },
        { "x": 24, "y": 37 },
        { "x": 25, "y": 37 },
        { "x": 25, "y": 38 },
        { "x": 25, "y": 39 },
        { "x": 25, "y": 40 },
        { "x": 25, "y": 41 },
        { "x": 24, "y": 41 },
        { "x": 23, "y": 41 },
        { "x": 23, "y": 40 },
        { "x": 23, "y": 39 },

        // wash area
        { "x": 21, "y": 29 },
        { "x": 21, "y": 30 },
        { "x": 21, "y": 31 },
        { "x": 21, "y": 32 },
        { "x": 22, "y": 32 },
        { "x": 23, "y": 32 },
        { "x": 22, "y": 29 },
        { "x": 23, "y": 28 },
        { "x": 24, "y": 28 },
        { "x": 24, "y": 29 },
        { "x": 24, "y": 30 },
        { "x": 24, "y": 31 },
        { "x": 24, "y": 32 },
        { "x": 24, "y": 33 },

        // building 7
        { "x": 26, "y": 31 },
        { "x": 27, "y": 31 },
        { "x": 28, "y": 31 },
        { "x": 29, "y": 31 },
        { "x": 29, "y": 30 },
        { "x": 29, "y": 29 },
        { "x": 29, "y": 28 },
        { "x": 29, "y": 27 },
        { "x": 29, "y": 26 },
        { "x": 28, "y": 26 },
        { "x": 27, "y": 26 },
        { "x": 26, "y": 26 },
        { "x": 26, "y": 28 },
        { "x": 26, "y": 29 },
        { "x": 26, "y": 30 },

        // building 5
        { "x": 29, "y": 25 },
        { "x": 29, "y": 25 },
        { "x": 29, "y": 24 },
        { "x": 29, "y": 23 },
        { "x": 29, "y": 22 },
        { "x": 29, "y": 21 },
        { "x": 29, "y": 20 },
        { "x": 29, "y": 19 },
        { "x": 29, "y": 18 },
        { "x": 29, "y": 17 },
        { "x": 29, "y": 16 },
        { "x": 29, "y": 16 },
        { "x": 28, "y": 16 },
        { "x": 27, "y": 16 },
        { "x": 26, "y": 16 },
        { "x": 25, "y": 16 },
        { "x": 24, "y": 16 },
        { "x": 23, "y": 16 },
        { "x": 22, "y": 16 },
        { "x": 21, "y": 16 },
        { "x": 25, "y": 17 },
        { "x": 25, "y": 18 },
        { "x": 25, "y": 19 },
        { "x": 25, "y": 20 },
        { "x": 25, "y": 21 },
        { "x": 25, "y": 22 },
        { "x": 25, "y": 23 },
        { "x": 25, "y": 24 },
        { "x": 25, "y": 25 },
        { "x": 24, "y": 25 },
        { "x": 23, "y": 25 },
        { "x": 22, "y": 26 },
        { "x": 21, "y": 27 },
        { "x": 21, "y": 26 },
        { "x": 21, "y": 25 },
        { "x": 21, "y": 24 },
        { "x": 21, "y": 23 },
        { "x": 21, "y": 22 },
        { "x": 21, "y": 21 },
        { "x": 21, "y": 20 },
        { "x": 21, "y": 19 },

        // mini forest
        { "x": 18, "y": 23 },
        { "x": 17, "y": 23 },
        { "x": 16, "y": 23 },
        { "x": 15, "y": 23 },
        { "x": 14, "y": 23 },
        { "x": 14, "y": 22 },
        { "x": 14, "y": 21 },
        { "x": 14, "y": 20 },
        { "x": 14, "y": 19 },
        { "x": 14, "y": 18 },
        { "x": 14, "y": 17 },
        { "x": 14, "y": 16 },
        { "x": 15, "y": 16 },
        { "x": 16, "y": 16 },
        { "x": 17, "y": 16 },
        { "x": 18, "y": 16 },
        { "x": 18, "y": 19 },
        { "x": 18, "y": 20 },
        { "x": 18, "y": 21 },
        { "x": 18, "y": 22 },

        // holding area
        { "x": 13, "y": 17 },
        { "x": 12, "y": 17 },
        { "x": 12, "y": 19 },
        { "x": 12, "y": 20 },
        { "x": 12, "y": 21 },
        { "x": 12, "y": 22 },
        { "x": 13, "y": 22 },

        //building1
        { "x": 10, "y": 23 },
        { "x": 10, "y": 25 },
        { "x": 10, "y": 26 },
        { "x": 10, "y": 27 },
        { "x": 10, "y": 28 },
        { "x": 10, "y": 29 },
        { "x": 10, "y": 30 },
        { "x": 10, "y": 31 },
        { "x": 10, "y": 32 },
        { "x": 10, "y": 33 },
        { "x": 10, "y": 34 },
        { "x": 10, "y": 36 },
        { "x": 9, "y": 23 },
        { "x": 9, "y": 36 },
        { "x": 8, "y": 23 },
        { "x": 8, "y": 25 },
        { "x": 8, "y": 26 },
        { "x": 8, "y": 27 },
        { "x": 8, "y": 28 },
        { "x": 8, "y": 29 },
        { "x": 8, "y": 30 },
        { "x": 8, "y": 31 },
        { "x": 8, "y": 32 },
        { "x": 8, "y": 33 },
        { "x": 8, "y": 34 },
        { "x": 8, "y": 36 },
        { "x": 7, "y": 23 },
        { "x": 7, "y": 36 },
        { "x": 6, "y": 23 },
        { "x": 6, "y": 25 },
        { "x": 6, "y": 26 },
        { "x": 6, "y": 27 },
        { "x": 6, "y": 28 },
        { "x": 6, "y": 29 },
        { "x": 6, "y": 30 },
        { "x": 6, "y": 31 },
        { "x": 6, "y": 32 },
        { "x": 6, "y": 33 },
        { "x": 6, "y": 34 },
        { "x": 6, "y": 36 },
        { "x": 5, "y": 23 },
        { "x": 5, "y": 36 },
        { "x": 4, "y": 23 },
        { "x": 4, "y": 25 },
        { "x": 4, "y": 26 },
        { "x": 4, "y": 27 },
        { "x": 4, "y": 28 },
        { "x": 4, "y": 29 },
        { "x": 4, "y": 30 },
        { "x": 4, "y": 31 },
        { "x": 4, "y": 32 },
        { "x": 4, "y": 33 },
        { "x": 4, "y": 34 },
        { "x": 4, "y": 36 },
        { "x": 3, "y": 23 },
        { "x": 3, "y": 36 },
        { "x": 2, "y": 23 },
        { "x": 2, "y": 24 },
        { "x": 2, "y": 25 },
        { "x": 2, "y": 26 },
        { "x": 2, "y": 27 },
        { "x": 2, "y": 28 },
        { "x": 2, "y": 29 },
        { "x": 2, "y": 30 },
        { "x": 2, "y": 31 },
        { "x": 2, "y": 32 },
        { "x": 2, "y": 33 },
        { "x": 2, "y": 34 },
        { "x": 2, "y": 35 },
        { "x": 2, "y": 36 },

        //building2
        { "x": 1, "y": 9 },
        { "x": 2, "y": 9 },
        { "x": 3, "y": 9 },
        { "x": 4, "y": 9 },
        { "x": 5, "y": 9 },
        { "x": 6, "y": 9 },
        { "x": 7, "y": 9 },
        { "x": 1, "y": 10 },
        { "x": 1, "y": 11 },
        { "x": 1, "y": 12 },
        { "x": 1, "y": 13 },
        { "x": 1, "y": 14 },
        { "x": 1, "y": 15 },
        { "x": 1, "y": 16 },
        { "x": 1, "y": 17 },
        { "x": 1, "y": 18 },
        { "x": 1, "y": 19 },
        { "x": 1, "y": 20 },
        { "x": 3, "y": 11 },
        { "x": 3, "y": 12 },
        { "x": 3, "y": 13 },
        { "x": 3, "y": 14 },
        { "x": 3, "y": 15 },
        { "x": 3, "y": 16 },
        { "x": 3, "y": 17 },
        { "x": 3, "y": 18 },
        { "x": 3, "y": 19 },
        { "x": 3, "y": 20 },
        { "x": 5, "y": 11 },
        { "x": 5, "y": 12 },
        { "x": 5, "y": 13 },
        { "x": 5, "y": 14 },
        { "x": 5, "y": 15 },
        { "x": 5, "y": 16 },
        { "x": 5, "y": 17 },
        { "x": 5, "y": 18 },
        { "x": 5, "y": 19 },
        { "x": 5, "y": 20 },
        { "x": 7, "y": 11 },
        { "x": 7, "y": 12 },
        { "x": 7, "y": 13 },
        { "x": 7, "y": 14 },
        { "x": 7, "y": 15 },
        { "x": 7, "y": 16 },
        { "x": 7, "y": 17 },
        { "x": 7, "y": 18 },
        { "x": 7, "y": 19 },
        { "x": 7, "y": 20 },
        { "x": 9, "y": 11 },
        { "x": 9, "y": 12 },
        { "x": 9, "y": 13 },
        { "x": 9, "y": 14 },
        { "x": 9, "y": 15 },
        { "x": 9, "y": 16 },
        { "x": 9, "y": 17 },
        { "x": 9, "y": 18 },
        { "x": 9, "y": 19 },
        { "x": 9, "y": 20 },
        { "x": 1, "y": 21 },
        { "x": 1, "y": 22 },
        { "x": 2, "y": 22 },
        { "x": 3, "y": 22 },
        { "x": 4, "y": 22 },
        { "x": 5, "y": 22 },
        { "x": 6, "y": 22 },
        { "x": 7, "y": 22 },
        { "x": 8, "y": 22 },
        { "x": 9, "y": 22 },
        
        // Building 3
        { "x": 7, "y": 1 },
        { "x": 8, "y": 1 },
        { "x": 9, "y": 1 },
        { "x": 10, "y": 1 },
        { "x": 11, "y": 1 },
        { "x": 12, "y": 1 },
        { "x": 13, "y": 1 },
        { "x": 14, "y": 1 },
        { "x": 15, "y": 1 },
        { "x": 16, "y": 1 },
        { "x": 17, "y": 1 },
        { "x": 18, "y": 1 },
        { "x": 19, "y": 1 },
        { "x": 20, "y": 1 },
        { "x": 21, "y": 1 },
        { "x": 21, "y": 2 },
        { "x": 21, "y": 3 },
        { "x": 21, "y": 4 },
        { "x": 21, "y": 5 },
        { "x": 21, "y": 6 },
        { "x": 21, "y": 7 },
        { "x": 21, "y": 8 },
        { "x": 21, "y": 9 },
        { "x": 9, "y": 3 },
        { "x": 10, "y": 3 },
        { "x": 11, "y": 3 },
        { "x": 12, "y": 3 },
        { "x": 13, "y": 3 },
        { "x": 14, "y": 3 },
        { "x": 15, "y": 3 },
        { "x": 16, "y": 3 },
        { "x": 17, "y": 3 },
        { "x": 18, "y": 3 },
        { "x": 19, "y": 3 },
        { "x": 9, "y": 5 },
        { "x": 10, "y": 5 },
        { "x": 11, "y": 5 },
        { "x": 12, "y": 5 },
        { "x": 13, "y": 5 },
        { "x": 14, "y": 5 },
        { "x": 15, "y": 5 },
        { "x": 16, "y": 5 },
        { "x": 17, "y": 5 },
        { "x": 18, "y": 5 },
        { "x": 19, "y": 5 },
        { "x": 9, "y": 7 },
        { "x": 10, "y": 7 },
        { "x": 11, "y": 7 },
        { "x": 12, "y": 7 },
        { "x": 13, "y": 7 },
        { "x": 14, "y": 7 },
        { "x": 15, "y": 7 },
        { "x": 16, "y": 7 },
        { "x": 17, "y": 7 },
        { "x": 18, "y": 7 },
        { "x": 19, "y": 7 },
        { "x": 9, "y": 9 },
        { "x": 10, "y": 9 },
        { "x": 11, "y": 9 },
        { "x": 12, "y": 9 },
        { "x": 13, "y": 9 },
        { "x": 14, "y": 9 },
        { "x": 15, "y": 9 },
        { "x": 16, "y": 9 },
        { "x": 17, "y": 9 },
        { "x": 18, "y": 9 },
        { "x": 19, "y": 9 },
        { "x": 7, "y": 1 },
        { "x": 7, "y": 2 },
        { "x": 7, "y": 3 },
        { "x": 7, "y": 4 },
        { "x": 7, "y": 5 },
        { "x": 7, "y": 6 },
        { "x": 7, "y": 7 },
        { "x": 7, "y": 8 },

        //Building 4
        { "x": 23, "y": 0 },
        { "x": 23, "y": 1 },
        { "x": 23, "y": 2 },
        { "x": 23, "y": 3 },
        { "x": 23, "y": 4 },
        { "x": 23, "y": 5 },
        { "x": 23, "y": 6 },
        { "x": 23, "y": 7 },
        { "x": 23, "y": 8 },
        { "x": 24, "y": 0 },
        { "x": 25, "y": 0 },
        { "x": 26, "y": 0 },
        { "x": 27, "y": 0 },
        { "x": 28, "y": 0 },
        { "x": 29, "y": 0 },
        { "x": 30, "y": 0 },
        { "x": 31, "y": 0 },
        { "x": 31, "y": 1 },
        { "x": 31, "y": 2 },
        { "x": 31, "y": 3 },
        { "x": 31, "y": 4 },
        { "x": 31, "y": 5 },
        { "x": 31, "y": 6 },
        { "x": 24, "y": 2 },
        { "x": 25, "y": 2 },
        { "x": 26, "y": 2 },
        { "x": 27, "y": 2 },
        { "x": 28, "y": 2 },
        { "x": 29, "y": 2 },
        { "x": 24, "y": 4 },
        { "x": 25, "y": 4 },
        { "x": 26, "y": 4 },
        { "x": 27, "y": 4 },
        { "x": 28, "y": 4 },
        { "x": 29, "y": 4 },
        { "x": 24, "y": 6 },
        { "x": 25, "y": 6 },
        { "x": 26, "y": 6 },
        { "x": 27, "y": 6 },
        { "x": 28, "y": 6 },
        { "x": 29, "y": 6 },
        { "x": 25, "y": 8 },
        { "x": 26, "y": 8 },
        { "x": 27, "y": 8 },
        { "x": 28, "y": 8 },
        { "x": 29, "y": 8 },

        //Building 6
        { "x":39 , "y": 23 },
        { "x":39 , "y": 22 },
        { "x":39 , "y": 21 },
        { "x":39 , "y": 20 },
        { "x":39 , "y": 19 },
        { "x":39 , "y": 18 },
        { "x":39 , "y": 17 },
        { "x":39 , "y": 16 },
        { "x":39 , "y": 15 },
        { "x":39 , "y": 14 },
        { "x":39 , "y": 13 },
        { "x":39 , "y": 12 },
        { "x":39 , "y": 11 },
        { "x":39 , "y": 10 },
        { "x":39 , "y": 9 },
        { "x":39 , "y": 8 },
        { "x":39 , "y": 7 },
        { "x":39 , "y": 6 },
        { "x":39 , "y": 6 },
        { "x":38 , "y": 6 },
        { "x":37 , "y": 6 },
        { "x":36 , "y": 6 },
        { "x":35 , "y": 6 },
        { "x":34 , "y": 6 },
        { "x":32 , "y": 6 },
        { "x":31 , "y": 6 },
        { "x": 31, "y": 8 },
        { "x": 31, "y": 9 },
        { "x": 31, "y": 10 },
        { "x": 31, "y": 11 },
        { "x": 31, "y": 12 },
        { "x": 31, "y": 13 },
        { "x": 31, "y": 14 },
        { "x": 31, "y": 15 },
        { "x": 31, "y": 16 },
        { "x": 31, "y": 17 },
        { "x": 31, "y": 18 },
        { "x": 31, "y": 19 },
        { "x": 31, "y": 20 },
        { "x": 31, "y": 21 },
        { "x": 31, "y": 22 },
        { "x":33 , "y": 6 },
        { "x": 33, "y": 8 },
        { "x": 33, "y": 9 },
        { "x": 33, "y": 10 },
        { "x": 33, "y": 11 },
        { "x": 33, "y": 12 },
        { "x": 33, "y": 13 },
        { "x": 33, "y": 14 },
        { "x": 33, "y": 15 },
        { "x": 33, "y": 16 },
        { "x": 33, "y": 17 },
        { "x": 33, "y": 18 },
        { "x": 33, "y": 19 },
        { "x": 33, "y": 20 },
        { "x": 33, "y": 21 },
        { "x": 33, "y": 22 },
        { "x":35 , "y": 6 },
        { "x": 35, "y": 8 },
        { "x": 35, "y": 9 },
        { "x": 35, "y": 10 },
        { "x": 35, "y": 11 },
        { "x": 35, "y": 12 },
        { "x": 35, "y": 13 },
        { "x": 35, "y": 14 },
        { "x": 35, "y": 15 },
        { "x": 35, "y": 16 },
        { "x": 35, "y": 17 },
        { "x": 35, "y": 18 },
        { "x": 35, "y": 19 },
        { "x": 35, "y": 20 },
        { "x": 35, "y": 21 },
        { "x": 35, "y": 22 },
        { "x":37 , "y": 6 },
        { "x": 37, "y": 8 },
        { "x": 37, "y": 9 },
        { "x": 37, "y": 10 },
        { "x": 37, "y": 11 },
        { "x": 37, "y": 12 },
        { "x": 37, "y": 13 },
        { "x": 37, "y": 14 },
        { "x": 37, "y": 15 },
        { "x": 37, "y": 16 },
        { "x": 37, "y": 17 },
        { "x": 37, "y": 18 },
        { "x": 37, "y": 19 },
        { "x": 37, "y": 20 },
        { "x": 37, "y": 21 },
        { "x": 37, "y": 22 },

        // Building 8
        { "x":40 , "y": 37 },
        { "x":39 , "y": 37 },
        { "x":38 , "y": 37 },
        { "x":37 , "y": 37 },
        { "x":36 , "y": 37 },
        { "x":35 , "y": 37 },
        { "x":34 , "y": 37 },
        { "x":33 , "y": 37 },
        { "x":32 , "y": 37 },
        { "x":31 , "y": 37 },
        { "x":30 , "y": 37 },
        { "x":30 , "y": 36 },
        { "x":40 , "y": 36 },
        { "x":40 , "y": 35 },
        { "x":40 , "y": 34 },
        { "x":40 , "y": 33 },
        { "x":40 , "y": 32 },
        { "x":40 , "y": 31 },
        { "x":40 , "y": 30 },
        { "x":40 , "y": 29 },
        { "x":40 , "y": 28 },
        { "x":40 , "y": 27 },
        { "x":40 , "y": 26 },
        { "x":40 , "y": 25 },
        { "x":40 , "y": 24 },
        { "x":39 , "y": 24 },
        { "x":38 , "y": 24 },
        { "x":37 , "y": 24 },
        { "x":36 , "y": 24 },
        { "x":35 , "y": 24 },
        { "x":34 , "y": 24 },
        { "x":33 , "y": 24 },
        { "x":32 , "y": 24 },
        { "x":38 , "y": 26 },
        { "x":38 , "y": 26 },
        { "x":38 , "y": 27 },
        { "x":38 , "y": 28 },
        { "x":38 , "y": 29 },
        { "x":38 , "y": 30 },
        { "x":38 , "y": 31 },
        { "x":38 , "y": 32 },
        { "x":38 , "y": 33 },
        { "x":38 , "y": 34 },
        { "x":38 , "y": 35 },
        { "x":36 , "y": 26 },
        { "x":36 , "y": 27 },
        { "x":36 , "y": 28 },
        { "x":36 , "y": 29 },
        { "x":36 , "y": 30 },
        { "x":36 , "y": 31 },
        { "x":36 , "y": 32 },
        { "x":36 , "y": 33 },
        { "x":36 , "y": 34 },
        { "x":36 , "y": 35 },
        { "x":34 , "y": 26 },
        { "x":34 , "y": 27 },
        { "x":34 , "y": 28 },
        { "x":34 , "y": 29 },
        { "x":34 , "y": 30 },
        { "x":34 , "y": 31 },
        { "x":34 , "y": 32 },
        { "x":34 , "y": 33 },
        { "x":34 , "y": 34 },
        { "x":34 , "y": 35 },
        { "x":32 , "y": 26 },
        { "x":32 , "y": 27 },
        { "x":32 , "y": 28 },
        { "x":32 , "y": 29 },
        { "x":32 , "y": 30 },
        { "x":32 , "y": 31 },
        { "x":32 , "y": 32 },
        { "x":32 , "y": 33 },
        { "x":32 , "y": 34 },
        { "x":32 , "y": 35 },
      ]
    }
  ]
}
// Map Graphics itself
function drawMap(index, startPos, endPos) {
  const map = data.maps[index];
  const element = document.createElement('canvas'); // create element
  const ctx = element.getContext('2d');

  element.setAttribute('width', map.size);
  element.setAttribute('height', map.size);

  const drawGrid = () => {
    const blocks_x = Math.floor(map.size / map.blockSize);
    const blocks_y = Math.floor(map.size / map.blockSize);
    const grid = [];

    for (let x = 0; x < blocks_x; x++) {
      const row = [];

      for (let y = 0; y < blocks_y; y++) {
        const isObstacle = map.obstacles.find(
          (obstacle) => obstacle.x === x && obstacle.y === y
        );

        if (map.debug) {
          if (isObstacle) {
            // debug
            ctx.fillStyle = '#FF0000';
            ctx.fillRect(
              x * map.blockSize,
              y * map.blockSize,
              map.blockSize,
              map.blockSize
            );
          } else ctx.strokeRect(x * map.blockSize, y * map.blockSize, map.blockSize, map.blockSize);
        }

        row.push(new INode(x, y, !!isObstacle));
      }

      grid.push(row);
    }

    const start = grid[startPos.x][startPos.y];
    const end = grid[endPos.x][endPos.y];
    const results = AStar(start, end, grid);

    // Animate the drawing
    const duration = 1000; // Duration of animation in milliseconds
    const interval = 10; // Interval for animation frames
    let startTime = null;

    const animatePath = (timestamp) => {
      if (!startTime) startTime = timestamp;
      const progress = (timestamp - startTime) / duration;

      ctx.clearRect(0, 0, element.width, element.height); // Clear the canvas

      const easeInOutProgress = easeInOut(progress);
      ctx.drawImage(img, 0, 0, map.size, map.size);
      ctx.beginPath();
      ctx.moveTo(start.x * map.blockSize, start.y * map.blockSize);

      const animationLength = Math.floor(easeInOutProgress * results.length);

      for (let i = 0; i < animationLength; i++) {
        const result = results[i];
        ctx.lineTo(result.x * map.blockSize, result.y * map.blockSize);
      }

      ctx.strokeStyle = '#00FF00';
      ctx.lineWidth = 3;
      ctx.stroke();

      if (animationLength < results.length - 1) {
        requestAnimationFrame(animatePath);
      }

      // Add labels
      ctx.fillStyle = '#000000';
      ctx.font = '14px Arial';
      ctx.fillText('You\'re here', start.x * map.blockSize, start.y * map.blockSize - 5);
      ctx.fillText('Your destination', end.x * map.blockSize, end.y * map.blockSize - 5);
    };

    requestAnimationFrame(animatePath);
  };

  const img = new Image();
  img.src = map.map;

  img.onload = () => {
    drawGrid();
  };

  document.body.appendChild(element);
}

// Easing function for smooth animation
function easeInOut(t) {
  return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
}