@extends('layouts.app')
<style>
    body{
        background-image: url(/storage/Photos/Foods/desserts/background.jpg);
    }
    h1{
        text-align: center;
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6{
    color: white !important;
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
      color: white;

    }
    .back h5{
        font-weight: bold;
        font-size: 23px;
        color: white;
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
@section('content')
<a href="/photos/food" class="btn btn-secondary">Go Back</a>
<h1>Desserts</h1>

<div class="flip-container">
    <div class="flipper">
    <div class="front">
        <img width="80%" src="/storage/Photos/Foods/desserts/cake.jpg" alt="">
    </div>
    <div class="back">
        <h5>Almond Coconut Cake</h5>
        <hr>
        <p>Almond coconut cake is delicious blend of almond, coconut, white chocolate and lemon flavors.</p>
        <hr>
        <a href="https://www.pinterest.com/pin/259519997255080365/" target="_blank" class="text-dark">
        <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
        </a>
    </div>
    </div>
    </div>



<div class="flip-container">
    <div class="flipper">
    <div class="front">
        <img width="80%" src="/storage/Photos/Foods/desserts/muffins.jpg" alt="">
    </div>
    <div class="back">
        <h5>Perfect chocolate muffins like at Starbucks</h5>
        <hr>
        <p>I found the secret of chocolate muffins as swollen as those of Starbucks. You will love these muffins fluffy and well chocolate!</p>
        <hr>
        <a href="https://www.pinterest.com/pin/450571137715533555/" target="_blank" class="text-dark">
        <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
        </a>
    </div>
    </div>
    </div>

    <div class="flip-container">
            <div class="flipper">
            <div class="front">
                <img width="80%" src="/storage/Photos/Foods/desserts/cake1.jpg" alt="">
            </div>
            <div class="back">
                <h5>Lemon Layer Cake with Fresh Berries</h5>
                <hr>
                <p>Moist and delicious gluten-free lemon cake is layered with coconut whipped cream and mixed berries. The perfect dessert to welcome spring!</p>
                <hr>
                <a href="https://www.pinterest.com/pin/254171972701553262/" target="_blank" class="text-dark">
                <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
                </a>
            </div>
            </div>
            </div>


            <div class="flip-container">
                    <div class="flipper">
                    <div class="front">
                        <img width="80%" src="/storage/Photos/Foods/desserts/cake2.jpg" alt="">
                    </div>
                    <div class="back">
                        <h5>Lemon Cream Butter Cake</h5>
                        <hr>
                        <p>A delicious marriage of lemon cake with lemon cheesecake!</p>
                        <hr>
                        <a href="https://www.pinterest.com/pin/189573465550926131/" target="_blank" class="text-dark">
                        <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
                        </a>
                    </div>
                    </div>
                    </div>

                    <div class="flip-container">
                            <div class="flipper">
                            <div class="front">
                                <img width="80%" src="/storage/Photos/Foods/desserts/cake3.jpg" alt="">
                            </div>
                            <div class="back">
                                <h5>Cake Mix Biscotti</h5>
                                <hr>
                                <p>Cake Mix Biscotti is a simple shortcut recipe that is endlessly adaptable! It's crunchy on the outside, tender on the inside with the perfect amount of sweetness. Mix and match your favorite flavor combos!</p>
                                <hr>
                                <a href="https://www.pinterest.com/pin/209698926384610095/" target="_blank" class="text-dark">
                                <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
                                </a>
                            </div>
                            </div>
                            </div>
@endsection
