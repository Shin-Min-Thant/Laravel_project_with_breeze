@extends('yield.master')
@section('title','home')
@section('content')
<style>

body {

background:url({{asset('img/bl.jpg')}});
background-position: center left;
background-repeat: no-repeat;
background-size: cover;
opicity: 0.5;
height: 100vh;
width: 100%;
/* positiion: relative; */
position:inherit;
float:inherit;
}
.para{
    position: absolute;
    font-family: "Lucida Grande", Tahoma;
    font-size: 18px;
    font-weight: lighter;
    text-align: center;
    color:#f5c816;
    font-weight: 500;
    display: flex;
    flex-direction: column;
    height: 80%;
    width: 80%;
    justify-content: center;
    align-items: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}


</style>
<div class="container text-danger para  ">
    <div class="text-center intro">
        <h1 class="">Welcome to our Website</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Numquam natus ducimus, quasi dolore ratione reprehenderit, mollitia tempora aliquid provident dolorem expedita, minima officia. Tempore
        aliquam quibusdam laudantium minima incidunt praesentium Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, odit amet. Totam beatae quasi quam consequuntur nobis sint, eligendi tenetur
         voluptatibus quo saepe hic, ipsum esse, enim molestias voluptatem maxime Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum obcaecati amet neque, modi iure nulla quod
         corporis quae nihil. Libero, dolores corrupti omnis debitis suscipit maxime distinctio quasi cumque molestias..</p>
    </div>
</div>
@endsection

