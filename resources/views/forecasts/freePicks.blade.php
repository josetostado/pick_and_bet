@extends('layouts.master')

@section('content')
    <!-- TÍTULO -->
    <div class="container-titulo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Nuestros <span>Free Picks</span></h1>
                    <div class="div-titulo"></div>
                </div>
            </div>
        </div>
    </div>
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"

    <!-- TABLA 1 -->
    
    @foreach($categories as $category)
        <div class="container-table" id="{{$category->name}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>{{$category->name}}</h3>
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

                                {{--                            Box/UFC--}}
                                @if($category->name === "UFC/ Box")
                                    @foreach($boxCategory as $box)
                                        <tr>
                                            <td class="bg-claro">{{$box->event_date}}</td>
                                            <td class="bg-claro">{{$box->event_name}}</td>
                                            <td class="bg-claro">{{$box->forecast}}</td>
                                    
                                            <td class="bg-claro likes">
                                                <div class="d-flex">
                                                    <i onclick="like(this,'{{$box->id}}',true)" class="fa fa-thumbs-up mr-3" data-id="{{$box->id}}"> {{$box->likes}}</i>
                                                    <i onclick="like(this,'{{$box->id}}',false)" class="fa fa-thumbs-down" data-id="{{$box->id}}"> {{$box->dislikes}}</i>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                {{--                            Basketball--}}
                                @if($category->name === "Basketball")
                                    @foreach($basketballCategory as $basketball)
                                        <tr>
                                            <td class="bg-claro">{{$basketball->event_date}}</td>
                                            <td class="bg-claro">{{$basketball->event_name}}</td>
                                            <td class="bg-claro">{{$basketball->forecast}}</td>
                                            <td class="bg-claro likes">
                                                <div class="d-flex">
                                                    <i onclick="like(this,'{{$basketball->id}}',true)" class="fa fa-thumbs-up mr-3" data-id="{{$basketball->id}}"> {{$basketball->likes}}</i>
                                                    <i onclick="like(this,'{{$basketball->id}}',false)" class="fa fa-thumbs-down" data-id="{{$basketball->id}}"> {{$basketball->dislikes}}</i>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                {{--                            Fútbol Americano--}}
                                @if($category->name === "Fútbol Americano")
                                    @if(count($futbolCategory))
                                        @foreach($futbolCategory as $futbol)
                                            <tr>
                                                <td class="bg-claro">{{$futbol->event_date}}</td>
                                                <td class="bg-claro">{{$futbol->event_name}}</td>
                                                <td class="bg-claro">{{$futbol->forecast}}</td>
                                                <td class="bg-claro likes">
                                                    <div class="d-flex">
                                                        <i onclick="like(this,'{{$futbol->id}}',true)" class="fa fa-thumbs-up mr-3" data-id="{{$futbol->id}}"> {{$futbol->likes}}</i>
                                                        <i onclick="like(this,'{{$futbol->id}}',false)" class="fa fa-thumbs-down" data-id="{{$futbol->id}}"> {{$futbol->dislikes}}</i>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endif

                                {{--                            Fútbol Soccer--}}
                                @if($category->name === "Fútbol Soccer")
                                    @foreach($soccerCategory as $soccer)
                                        <tr>
                                            <td class="bg-claro">{{$soccer->event_date}}</td>
                                            <td class="bg-claro">{{$soccer->event_name}}</td>
                                            <td class="bg-claro">{{$soccer->forecast}}</td>
                                            <td class="bg-claro likes">
                                                <div class="d-flex">
                                                    <i onclick="like(this,'{{$soccer->id}}',true)" class="fa fa-thumbs-up mr-3" data-id="{{$soccer->id}}"> {{$soccer->likes}}</i>
                                                    <i onclick="like(this,'{{$soccer->id}}',false)" class="fa fa-thumbs-down" data-id="{{$soccer->id}}"> {{$soccer->dislikes}}</i>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                {{--                            Tenis--}}
                                @if($category->name === "Tenis")
                                    @foreach($tenisCategory as $tenis)
                                        <tr>
                                            <td class="bg-claro">{{$tenis->event_date}}</td>
                                            <td class="bg-claro">{{$tenis->event_name}}</td>
                                            <td class="bg-claro">{{$tenis->forecast}}</td>
                                            <td class="bg-claro likes">
                                                <div class="d-flex">
                                                    <i onclick="like(this,'{{$tenis->id}}',true)" class="fa fa-thumbs-up mr-3" data-id="{{$tenis->id}}"> {{$tenis->likes}}</i>
                                                    <i onclick="like(this,'{{$tenis->id}}',false)" class="fa fa-thumbs-down" data-id="{{$tenis->id}}"> {{$tenis->dislikes}}</i>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                {{--                            Béisbol--}}
                                @if($category->name === "Béisbol")
                                    @foreach($beisbolCategory as $beisbol)
                                        <tr>
                                            <td class="bg-claro">{{$beisbol->event_date}}</td>
                                            <td class="bg-claro">{{$beisbol->event_name}}</td>
                                            <td class="bg-claro">{{$beisbol->forecast}}</td>
                                            <td class="bg-claro likes">
                                                <div class="d-flex">
                                                    <i onclick="like(this,'{{$beisbol->id}}',true)" class="fa fa-thumbs-up mr-3" data-id="{{$beisbol->id}}"> {{$beisbol->likes}}</i>
                                                    <i onclick="like(this,'{{$beisbol->id}}',false)" class="fa fa-thumbs-down" data-id="{{$beisbol->id}}"> {{$beisbol->dislikes}}</i>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="../../js/likes.js"></script>
@endsection
