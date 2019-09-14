@extends('layouts.app')
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ 'Seoera' }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
@section('content')

<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
      <div class="row">
            {!! Form::open(['action'=>'HomeController@languageFilter','method'=>'Post']) !!}
            
                    {{Form::label('language', 'Languages')}}
                    {!!Form::select('language', $languages, null, ['placeholder' =>'Select Language','class'=>'form-control col-md-7 col-xs-12','required'=>'required'])!!}
                {{form::submit('filter',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            
            </div>               

   <div class="picture_boxes" style="padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            @foreach ($products as $pro)
            <div class="col-lg-4 pic_box" style="padding-top: 50px;">
                <div class="card" style="padding-bottom: 20px;">

                    <img src="{{asset('images').'/'.$pro->product_img}}" class="card-img-top" alt="" style="width: 324px;height: 300px;">
                    <h3 class="card-title pic_box_title">{{$pro->name}}</h3>
                    <p class="card-text pic_box_text">{{$pro->price}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
