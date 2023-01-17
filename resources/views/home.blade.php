@extends('layouts.app')<!-- 
<img src="{{ asset('img/Dif.jpg')}}" class="img-fluid"> -->
<div class="hover14 column">
    <figure><img src="{{ asset('img/Dif.jpg')}}" class="img-fluid hover14 column"></figure>
</div>
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

                <p class="coldif img-fluid" style="color: white; width: 330px; font-size: xx-large;">¿Quienes somos?</p>

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

                
            </div>
            {{-- </div> --}}
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('sliders.noticias') 
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('sliders.eventos') 
                </div>
            </div>
        </div>

    </div>
</div>

@endsection


@section('scripts')
@endsection
