<section class="pt-1 pb-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="col-8 coldif img-fluid" style="color: white; font-size: xx-large;">Eventos</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselEventos" role="button" data-slide="prev">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselEventos" role="button" data-slide="next">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselEventos" class="carousel slide" data-ride="carousel">
                  
                    <div class="carousel-inner">
                        @foreach($eventos->chunk(4) as $cuartaEvento) 
                        <div class="carousel-item @if($loop->first) active @endif">
                            <div class="row">
                              @foreach($cuartaEvento as $eventoItem)
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        @foreach($eventoItem->imagen as $imagen)
                                        <img class="img-fluid" src="{{asset($imagen->url)}}">
                                        @endforeach                                
                                        {{-- <div class="card-body">
                                            <h4 class="card-title">{{$eventoItem->nombre}}</h4>
                                            <p class="card-text">{{ substr($eventoItem->descripcion, 0, 45)."..."}}</p>
                                            <a href="#" class="btn btn-primary">Ver mas</a>
                                        </div> --}}

                                    </div>
                                </div>
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