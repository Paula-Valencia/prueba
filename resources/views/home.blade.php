@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <style>
                    *{
                        background-color: antiquewhite;
                    }
                    div{
                        background-color: ;
                    }
                    h1 {
                        color: rgb(255, 186, 10);
                    }
                    button {
                        background-color: dimgrey;
                    }
                    image{
                        width="10"
                        height="10"
                    }
                    
                </style>
            </head>
            <body>
                <div id="app">
            
                    <h1>Burger</h1>
                    <image src="https://www.unileverfoodsolutions.com.co/dam/global-ufs/mcos/NOLA/calcmenu/recipes/col-recipies/fruco-tomate-cocineros/HAMBURGUESA%201200x709.png" alt="Imagen de ejemplo">
                    <li>name of the dish...$9000 <button>Comprar</button></li>
                    <li>name of the dish...$10000 <button>Comprar</button></li>
                    <li>name of the dish...$12000 <button>Comprar</button></li>
            
                    <h1>Taco</h1>
                    <li>name of the dish...$5000 <button>Comprar</button></li>
                    <li>name of the dish...$8000 <button>Comprar</button></li>
                    <li>name of the dish...$9000 <button>Comprar</button></li>
            
            
                    <h1>Pizza</h1>
                    <li>name of the dish...$10000 <button>Comprar</button></li>
                    <li>name of the dish...$11000 <button>Comprar</button></li>
                    <li>name of the dish...$12000 <button>Comprar</button></li>
                    
                    <h1>Drinks</h1>
                    <li>name of the dish...$5000 <button>Comprar</button></li>
                    <li>name of the dish...$6000 <button>Comprar</button></li>
                    <li>name of the dish...$7000 <button>Comprar</button></li>
                </div>
                <script scr="script.js"></script>
                <script scr="script.js"></script>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

