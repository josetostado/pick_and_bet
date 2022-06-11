@extends('layouts.master')

@section('content')
    
    <!-- <div class="capa-titulo text-white" style="background:#455A6D">
        <div class="container">
            Categorías
        </div>
    </div> -->
    <div class="container-titulo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="d-table pb-3 titulo-categorias">Categorías</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORIAS -->
    <div class="lista-categorias">
        <div class="container py-4">
            <div class="row  justify-content-center py-4 mb-5">
                
                @foreach($categories as $category)
                <!-- {{$category->name}} -->
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-8  mt-5 d-flex justify-content-center px-0">
                    <div class="card card-categoria w-75">
                        <img class="card-img-top img-categoria img-fluid" src="{{asset('storage/'.$category->image)}}" alt="Card image cap">
                        <div class="card-body pb-0 text-center px-0">
                            <h5 class="card-title ">{{$category->name}}</h5>
                            <a class="btn btn-primary" href="{{route('freePicks')}}{{'#'.$category->name}}">Ver Picks</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

@endsection
