@extends('layouts.app')
<style>
    body{
        background-image: url(/storage/Photos/background.jpg);
    }
h1{
font-family: bold;
text-align: center;
padding-top: 100px;
padding-left: 80px;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6{
    color: white !important;
}
p{
    font-size: 23px;
    padding-left: 100px;
    color: white;

}
.picleft{
    display: inline-block;
    padding-left:270px;
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
<a href="/photos" class="btn btn-secondary">Go Back</a>

<h1>Check out our suggestions</h1>
<hr>


    <div class="picleft">
    <p>Main Meal </p>
   <a href="/photos/mainmeal"><img src="/storage/Photos/Foods/mainmeal/fish.jpg"></a>
</div>

<div class="picleft">
    <p>Desserts</p>
   <a href="/photos/desserts"><img src="/storage/Photos/Foods/desserts/cake.jpg"></a>
</div>

<div class="picleft">
    <p>Drinks</p>
   <a href="/photos/drinks"><img src="/storage/Photos/Foods/drinks/oreodrink.jpg"></a>
</div>



@endsection
