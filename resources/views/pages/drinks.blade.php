@extends('layouts.app')
<style>
    body{
        background-image: url(/storage/Photos/Foods/drinks/background.jpg);
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



<h1>Drinks</h1>

<div class="flip-container">
        <div class="flipper">
        <div class="front">
            <img width="80%" src="/storage/Photos/Foods/drinks/oreodrink.jpg" alt="">
        </div>
        <div class="back">
            <h5>Oreo Milkshakes</h5>
            <hr>
            <p>This classic Oreo Milkshake is quite simply one of the best summer desserts ever!</p>
            <hr>
            <a href="https://www.pinterest.com/pin/431782683006398228/" target="_blank" class="text-dark">
            <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
            </a>
        </div>
        </div>
        </div>

        <div class="flip-container">
                <div class="flipper">
                <div class="front">
                    <img width="80%" src="/storage/Photos/Foods/drinks/drink1.jpg" alt="">
                </div>
                <div class="back">
                    <h5>Blackberry Bramble</h5>
                    <hr>
                    <p>A refreshing summer cocktail, the bramble combines fresh blackberries, gin, lemon juice and soda- or for a refreshing twist, try topping with Ginger Brew.</p>
                    <hr>
                    <a href="https://www.pinterest.com/pin/213991419773278205/" target="_blank" class="text-dark">
                    <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
                    </a>
                </div>
                </div>
                </div>

                <div class="flip-container">
                    <div class="flipper">
                    <div class="front">
                        <img width="80%" src="/storage/Photos/Foods/drinks/cocktail.jpg" alt="">
                    </div>
                    <div class="back">
                        <h5>Blood orange rosemary gin cocktail</h5>
                        <hr>
                        <p>Dangerously delicious blood orange rosemary gin cocktail! Fresh squeezed blood orange juice combined with fresh rosemary make this the perfect winter or spring cocktail. Gorgeous!</p>
                        <hr>
                        <a href="https://www.pinterest.com/pin/93238654771048200/" target="_blank" class="text-dark">
                        <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
                        </a>
                    </div>
                    </div>
                    </div>

                    <div class="flip-container">
                        <div class="flipper">
                        <div class="front">
                            <img width="80%" src="/storage/Photos/Foods/drinks/limonade.jpg" alt="">
                        </div>
                        <div class="back">
                            <h5>Fresh Strawberry Lemonade</h5>
                            <hr>
                            <p>This recipe is amazing!! I'm very picky about my lemonade but it's perfection! Not too sweet or too sour.</p>
                            <hr>
                            <a href="https://www.pinterest.com/pin/412009065909140866/" target="_blank" class="text-dark">
                            <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
                            </a>
                        </div>
                        </div>
                        </div>

                        <div class="flip-container">
                                <div class="flipper">
                                <div class="front">
                                    <img width="80%" src="/storage/Photos/Foods/drinks/cocktail1.jpg" alt="">
                                </div>
                                <div class="back">
                                    <h5>Bluewater Breeze Cocktail</h5>
                                    <hr>
                                    <p>Bluewater Breeze Cocktail - An easy tropical-inspired cocktail with vodka, rum, blue curacao, cream of coconut and pineapple juice!</p>
                                    <hr>
                                    <a href="https://www.pinterest.com/pin/152066924903956770/" target="_blank" class="text-dark">
                                    <h5>Recipe <i class="fas fa-angle-double-right ml-2"></i></h5>
                                    </a>
                                </div>
                                </div>
                                </div>

@endsection
