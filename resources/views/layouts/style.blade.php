<style>
        body{
            background-image: url(/storage/Photos/wood.jpg);
                }
    h1{
        text-align:center;
    }
    .h1, h1 {
        padding-top: 70px;
    }


    /* entire container, keeps perspective */
    .flip-container {
      -webkit-perspective: 1000;
    display: inline-block;
      margin: 100px auto;
      padding-left: 20px;
      margin-left:70px;



    }

    /* flip the pane when clicked */
    .flip-container:hover .flipper, .flip-container.hover .flipper {
      -webkit-transform: rotateY(180deg);
    }

    .flip-container, .front, .back {
        width: 280px;
        height: 400px;



    }

    /* flip speed goes here */
    .flipper {
        -webkit-transition: 0.6s;
        -webkit-transform-style: preserve-3d;
        position: relative;

    }

    /* hide back of pane during swap */
    .front, .back {
        -webkit-backface-visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
    }

    /* front pane, placed above back */
    .front {
      z-index: 2;
    }

    /* back, initially hidden pane */
    .back {
      -webkit-transform: rotateY(180deg);
      font-size: 20px;
      font-weight: bold;
      padding-left: 20px;

    }
    .back h5{
        font-weight: bold;
        font-size: 23px;
    }
  img{
    position: relative;
    float: left;
    width:  280px;
    height: 400px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
    padding-left:30px;

    }
    </style>
