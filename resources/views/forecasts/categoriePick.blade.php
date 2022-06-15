@extends('layouts.master')

@section('content')
    <!-- TÍTULO -->
    <div class="container-titulo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{$nameCategoryOriginal}}</h1>
                    <div class="div-titulo"></div>
                </div>
            </div>
        </div>
    </div>
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    
    
        <div class="container-table">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>{{$nameCategoryOriginal}}</h3>
                        <div class="table-picks-premium">
                            <table class="table table-bg">
                                <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Evento</th>
                                    <th scope="col">Pronóstico</th>
                                    <!-- <th scope="col">Likes</th> -->
                                </tr>
                                </thead>
                                <tbody>

                                {{--                            Categoria Pick--}}
                            
                                    @foreach($pickCategory as $pick)
                                        <tr>
                                            <td class="bg-claro">{{$pick->event_date}}</td>
                                            <td class="bg-claro">{{$pick->event_name}}</td>
                                            <td class="bg-claro">{{$pick->forecast}}</td>
                                    
                                            <td class="bg-claro likes">
                                                <div class="d-flex">
                                                    <i onclick="like(this,'{{$pick->id}}',true)" class="fa fa-thumbs-up mr-3" data-id="{{$pick->id}}"> {{$pick->likes}}</i>
                                                    <i onclick="like(this,'{{$pick->id}}',false)" class="fa fa-thumbs-down" data-id="{{$pick->id}}"> {{$pick->dislikes}}</i>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row col-12 justify-content-center py-5 mb-5">
                    <a class="btn btn-primary px-4" href="{{route('categorias')}}">Regresar</a>
                </div>
            </div>
        </div>

        

    <script src="../../js/likes.js"></script>
@endsection
