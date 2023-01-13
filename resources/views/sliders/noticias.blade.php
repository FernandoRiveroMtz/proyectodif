
<section class="pt-1 pb-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="mb-3" style="background: rgb(121, 20, 20); color: white; width: 350px; font-size: xx-large;">Sigue Nuestro Día a día</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                  
                    <div class="carousel-inner">
                        @foreach($noticias->chunk(4) as $cuartaNoticias)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <div class="row">
                              @foreach($cuartaNoticias as $noticiaItem)
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        @foreach($noticiaItem->imagen as $imagen)
                                        <img class="img-fluid hover" src="{{asset($imagen->url)}}">
                                        @endforeach                                
                                        <div class="card-body">
                                            <h4 class="card-title">{{$noticiaItem->nombre}}</h4>
                                            <p class="card-text">{{ substr($noticiaItem->descripcion, 0, 45)."..."}}</p>
                                            {{-- <a href="#" class="btn btn-primary">Ver mas</a> --}}

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalN-{{$noticiaItem->id}}">Ver mas
</button>

                                        </div>

                                    </div>
                                </div>
                            @include('noticias.modalNoticia')
                              @endforeach                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
