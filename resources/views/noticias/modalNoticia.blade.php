
<!-- Modal Noticia-->
<div class="modal fade" id="modalN-{{$noticiaItem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$noticiaItem->nombre}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <div class="mb-3">
            <img class="img-fluid" src="{{asset($imagen->url)}}">
          </div>
          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">{{$noticiaItem->descripcion}}</label>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">{{ Carbon\Carbon::createFromTimestamp($noticiaItem->fecha_publicacion)->format('d-m-Y') }}
</label>            
{{-- <p class="text-black-50"> Última actualización: {{ $noticiaItem->fecha_publicacion->diffForHumans() }}</p> --}}
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>