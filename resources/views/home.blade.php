@extends('layouts.app')
<img src="{{ asset('img/banner2.png')}}" width="99.9%" height="50%">

@section('content')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">{{ __('EcateFest 2023') }}
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
                {{-- <div class="card-header">{{ __('EcateFest 2023') }}
            </div> --}}

            <div class="card-body">

                <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 5</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 6</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 7</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 8</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 9</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    @endsection