@extends('layouts.app')
<img src="{{ asset('img/banner2.png')}}" width="99.9%" height="50%">

@section('content')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">{{ __('Title') }}
            </div> --}}

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('Inicio') }}

                <p style="background: rgb(121, 20, 20); color: white; width: 330px; font-size: xx-large;">¿Quienes somos?</p>

                <p>Descripción completa solo texto, para tener información para los usuarios.</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>
                <p style="margin: 20px; line-height: .9em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore similique doloribus, molestias illum reiciendis facere expedita</p>

                {{-- <br>

                    <p class="pndos">Sigue nuestro día a día</p> <br>

                    <img src="{{ asset('img/funo.jpg')}}" class="imagenes">
                <img src="{{ asset('img/fdos.jpg')}}" width="290px" class="imagenes">
                <img src="{{ asset('img/ftres.jpg')}}" width="200px" class="imagenes">
                <img src="{{ asset('img/fcuatro.jpg')}}" width="130px" class="imagenes">
                <img src="{{ asset('img/funo.jpg')}}" class="imagenes">

                <img src="{{ asset('img/funo.jpg')}}" class="imagenes">
                <img src="{{ asset('img/fcuatro.jpg')}}" width="130px" class="imagenes">
                <img src="{{ asset('img/ftres.jpg')}}" width="200px" class="imagenes">
                <img src="{{ asset('img/fdos.jpg')}}" width="290px" class="imagenes">
                <img src="{{ asset('img/funo.jpg')}}" class="imagenes"> --}}



            </div>
            {{-- </div> --}}
        </div>

        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">{{ __('Title') }}
            </div> --}}
                <div class="card-body">
                    @include('sliders.eventos') 
                </div>
            </div>
        </div>

        {{-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('sliders.noticias')
                </div>
            </div>
        </div> --}}

    </div>
</div>

@endsection