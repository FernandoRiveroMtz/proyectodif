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

                <!-- <p>Descripción completa solo texto, para tener información para los usuarios.</p> -->
                <p style="margin: 20px; line-height: .9em; text-align: justify;">El Sistema para el Desarrollo Integral de la Familia de Ecatepec de Morelos, es un Organismo Público Descentralizado, nuestra misión es administrar, coordinar, planear y gestionar los diferentes apoyos y programas de carácter social de manera eficiente, con calidad de transparencia para la consolidación de las familias ecatepenses; comprometidos con promover y supervisar los programas de asistencia social en beneficio de los sectores más vulnerables de nuestro municipio.</p>
                <p style="margin: 20px; line-height: .9em; text-align: justify;">Impulsamos politicas de asistencia social para el desarrollo de las comunidades, con el propósito de erradicar el origen y efectos de los grupos vulnerables en coordinacion con el H. Ayuntamiento de Ecatepec de Morelos. Operamos un amplio esquema de trabajo que va de la mano con los distintos programas que permiten dar mayor cobertura a las necesidades de la población.</p>
                <p style="margin: 20px; line-height: .9em; text-align: justify;">Nuestro compromiso es atender de manera inmediata otorgando servicios de calidad, que mejoren las condiciones de vida de los sectores más desprotegidos, tomando en cuenta los parámetros de desarrollo en el que se desenvuelven tanto adultos, como niños, niñas y adolecentes.</p>
                
            </div>
            
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
