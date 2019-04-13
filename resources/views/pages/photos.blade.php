@extends('layouts.app')

@section('content')
<style>

h1{
    text-align: center;
    padding: 150px;
    padding-left: 150px;

}
img{
    width: 280px;
        height: 350px;
}
p{

    font-size: 23px;
 font-family: bold;
}
.ChoosingPage{
    display: inline-block;
    padding-left: 450px;
}

</style>
<h1>Check out Our new Photos</h1>

<div class="ChoosingPage">
    <p>Men Styles(Мъжки Облекла)</p>
        <a href="/photos/men"><img width="20%" src="storage/photos/suit.png" alt=""></a>

</div>

<div class="ChoosingPage">
<p>Delicious Food(Вкусни Ястия)</p>
        <a href="photos/food"> <img width="20%" src="storage/photos/food.jpg" alt=""></a>
</div>





</div>
@endsection

