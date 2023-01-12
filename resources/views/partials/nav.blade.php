<nav class="navbar navbar-expand-lg navbar-dark bg-gob">
  <div class="container">
    <button class="navbar-toggler">
      <span class="navbar-toggler-icon" data-bs-toggle="collapse" data-bs-target="#menunavegacion"></span>
    </button>
    <div id="menunavegacion" class="collapse navbar-collapse">
      <ul class="navbar-nav mb-0 mb-lg-0 ms-5 menu" data-animation="center">
        <li class="nav-item"><a class="nav-link" href="#">
            <i class="bi bi-house-door-fill" style="font-size: 2.5rem; color: white;"></i>
          </a></li>
        <hr style="color:white; transform:rotatez(90deg); width:6vw; position:absolute;" class="navbar-toggler">
        <li class="nav-item"><a class="nav-link" href="#">
            Salud Pública <br> y Servicios Médicos
          </a></li>
        <li class="nav-item-lg"><a class="nav-link" href="#">
            Procuraduria Municipal <br>de Protección de Niñas, <br>Niños y adolecentes.
          </a></li>
        <li class="nav-item"><a class="nav-link" href="#">
            Servicios <br>Educativos
          </a></li>
        <li class="nav-item"><a class="nav-link" href="#">
            Nutrición y <br>Alimentación
          </a></li>
        <li class="nav-item"><a class="nav-link" href="#">
            Adulto <br>Mayor
          </a></li>
        <li class="nav-item"><a class="nav-link" href="#">
            Bienestar <br>Familiar
          </a></li>
        <li class="nav-item"><a class="nav-link" href="#">Normatividad <br>y Transparencia</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Más servicios</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Galeria</a></li>
      </ul>
    </div>
  </div>
</nav>

<style>
/* Cambia la distribución de los elementos de la navbar */
.menu li {
  margin-left: 20px;
}

.menu a {
  position: relative;
  display: block;
  padding: 3px;
}

.menu a::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: linear-gradient(to right, #b47dcd, #e878a2, #eb85ab);
  z-index: 1;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.5s ease-in-out;
}

.menu a:hover::before {
  transform: scaleX(1);
}
/* Animación */
.menu[data-animation="center"] a::before {
  transform-origin: center;
}
</style>