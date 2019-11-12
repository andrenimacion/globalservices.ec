
<!--MODAL PRODUCTOS HIDE FIRST VIEW [INICIO]-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="picture">
            <img src="" id="imagenModal" width="100%" height="auto">
        </div>
        <div id="bodyModal">

        </div>
      </div>
      <div class="modal-footer" >
        <p class="text mt-4 mb-4" id="modalFooter"></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-toggle="modal"  id="contacto">¡Contactarse!</button>
      </div>
    </div>
  </div>
</div>
<script>
  let contactoEvent = document.getElementById('contacto');
  let contacto = "2472089 - 0987210849";
  let modalFooter = document.getElementById('modalFooter');
  function hide(display){
    modalFooter.innerHTML= display;
    modalFooter.style.fontFamily= "arial";
  }
  hide("");

  contactoEvent.addEventListener('click', contactoShow)
  function contactoShow(){
    hide(`<strong>Contactos:</strong><br> ${contacto}`);
  }
</script>


<div class="card" style="width: 18rem; padding: 12px;" id="1">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="selladoPegado">
  <img src="./assets/img/productos/Accesorios2.jpg" id="img1" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t1">Productos para sellado y pegado</h4>
    <small style="font-size: 8pt; color: gray;">Productos para contenedores refirgerados</small>
    <ul id="ul1">
        <li class="li">Pistola aplicadora de Sikaflex</li>
        <li class="li">Sikaflex 221</li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px; "id="2">
<figure style="padding: 10px;" class="f"  data-toggle="modal" data-target="#exampleModal" id="accesoriosPuertas">
  <img src="./assets/img/productos/accesoriosPuerta.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t2">Accesorios para puerta de contenedor</h4>
    <small style="font-size: 8pt; color: gray;">Productos para puertas</small>
    <ul id="ul2">
        <li class="li">Tie back</li>
        <li class="li">Cam</li>
        <li class="li">Keeper</li>
        <li class="li">Bracket</li>
        <li class="li">Bushing para Bracket</li>
        <li class="li">Guide</li>
        <li class="li">Bushing para Guide</li>
        <li class="li">Catch</li>
        <li class="li">Bushing para Catch</li>
        <li class="li">Retainer</li>
        <li class="li">Hub</li>
        <li class="li">Pin para Hub</li>
        <li class="li">Custom Catch</li>
        <li class="li">Handle</li>
      <ul>
    </p>
  </div>
</div>


<div class="card" style="width: 18rem; padding: 12px;" id="3">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="planchasAceroInoxidable">
  <img src="./assets/img/productos/planAcero.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t3">Planchas de acero inoxidable</h4>
    <small>Productos para contenedores</small>
      <ul id="ul3">
        <li class="li"><strong>Medidas:</strong> </li>
        <li class="li">4' x 8' x 0.9mm</li>
        <li class="li">4' x 8' x 1.0mm</li>
        <li class="li">4' x 8' x 1.2mm</li>
        <li class="li">4' x 8' x 1.5mm</li>
        <li class="li">4' x 8' x 2mm</li>
        <li class="li">4' x 8.5' x 1.2mm<small>HICU</small></li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="4">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="accesoriosDrenaje">
  <img src="./assets/img/productos/acc.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t4">Accesorios de Drenaje</h4>
    <small style="font-size: 8pt; color: gray;">Accesorios para contenedores refirgerados</small>
    <p class="card-text">
      <ul id="ul4">
        <li class="li">Drain Plug Grill</li>
        <li class="li">Vaso de Aluminio</li>
        <li class="li">Vincha de Acero inoxidable</li>
        <li class="li">Kazoo</li>
        <li class="li">Pipper</li>
        <li class="li">Tapones</li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="5">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="bisagras">
  <img src="./assets/img/productos/bisGalv.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t5">Bisagras para puertas de contenedores refirgerados</h4>
    <small style="font-size: 8pt; color: gray;">Accesorios para puertas</small>
    <p class="card-text">
      <ul id="ul5">
        <li class="li">Bisagras galvanizadas de 4" con 6 huecos</li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="6">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="cableElectrico">
  <img src="./assets/img/productos/cabElec.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t6">Cable Eléctrico</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedores</small>
    <p class="card-text">
      <ul id="ul6">
        <li class="li">Rollo de cable amarillo, con una longitud de 75m en bobina. </li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="7">
<figure style="padding: 10px;"  class="f"  data-toggle="modal" data-target="#exampleModal" id="perfHierro">
  <img src="./assets/img/productos/perfiles.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t7">Perfiles de hierro</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedores</small>
    <p class="card-text">
      <ul id="ul7">
        <li class="li">Corner Post </li>
        <li class="li">Top Rail </li>
        <li class="li">Front Header </li>
        <li class="li">Rear Header </li>
        <li class="li">Front Sill </li>
        <li class="li">Bottom Rail </li>
        <li class="li">Ángulo Corner Post </li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="8">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="frames">
  <img src="./assets/img/productos/Frames.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t8">Frames</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedores</small>
    <p class="card-text">
      <ul id="ul8">
        <li class="li">Frame PVC para puerta </li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="9">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="cortina">
  <img src="./assets/img/productos/controlAtm.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t9">Kit de cortina atmósfera controlada</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedores</small>
    <p class="card-text">
      <ul id="ul9">
        <li class="li">Cortina </li>
        <li class="li">Etiquetas de Peligro </li>
        <li class="li">Cinta Plástica </li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="10">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="lona">
  <img src="./assets/img/productos/lona.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t10">Lona para contenedor seco</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedores</small>
    <p class="card-text">
      <ul id="ul10">
        <li class="li">Lona</li>
        <li class="li">Ojales</li>
        <li class="li">Cable Opentop de 40' y 20'</li>
      <ul>
    </p>
    <a href="#" class="btn btn-primary">Ver más</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="11">
<figure style="padding: 10px;" class="f" data-toggle="modal" data-target="#exampleModal" id="pernosAcero">
  <img src="./assets/img/productos/pernos.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t11">Pernos de acero inoxidable y galvanizados</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedores</small>
    <p class="card-text">
      <ul id="ul11">
        <li class="li">Pernos cabeza de coco</li>
        <li class="li">Pernos hexagonal</li>
        <li class="li">Tuerca</li>
        <li class="li">Anillo de Presión</li>
        <li class="li">Anillo Plano</li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="12">
<figure style="padding: 10px;" data-toggle="modal" data-target="#exampleModal" id="placa">
  <img src="./assets/img/productos/csc.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t12">Placa CSC</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedores</small>
    <p class="card-text">
      <ul id="ul12">
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="13">
<figure style="padding: 10px;" data-toggle="modal" data-target="#exampleModal" id="plywood">
  <img src="./assets/img/productos/playwood.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t13">Plywood Marino Certificado 30mm de Espesor</h4>
    <small style="font-size: 8pt; color: gray;">Producto para contenedor seco</small>
    <p class="card-text">
      <ul id="ul13">
        <li class="li">Plancha de Plywood de 4' x 8', para contenedor seco</li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="14">
<figure style="padding: 10px;" data-toggle="modal" data-target="#exampleModal" id="accRefrer">
  <img src="./assets/img/productos/ACCESORIOSREFFERYSECO.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t14">Accesorios para contenedor Refr. y Seco</h4>
    <small style="font-size: 8pt; color: gray;">Aditamentos para contenedores</small>
    <p class="card-text">
      <ul id="ul14">
        <li class="li"></li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="15">
<figure style="padding: 10px;" data-toggle="modal" data-target="#exampleModal" id="Estabilizador">
  <img src="./assets/img/productos/ESTABILIZADOR(2).jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t15">Estabilizador</h4>
    <small style="font-size: 8pt; color: gray;">Accesorios para contenedores</small>
    <p class="card-text">
      <ul id="ul15">
        <li class="li"></li>
      <ul>
    </p>
  </div>
</div>


<div class="card" style="width: 18rem; padding: 12px;" id="16">
<figure style="padding: 10px;" data-toggle="modal" data-target="#exampleModal" id="pisoCont">
  <img src="./assets/img/productos/PISODECONTENEDOR.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t16">Piso para Contenedores</h4>
    <small style="font-size: 8pt; color: gray;">Accesorios para contenedores</small>
    <p class="card-text">
      <ul id="ul16">
        <li class="li"></li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="17">
<figure style="padding: 10px;" data-toggle="modal" data-target="#exampleModal" id="remaches">
  <img src="./assets/img/productos/REMACHESDEACEROYALUMINIO.jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t17">Remaches</h4>
    <small style="font-size: 8pt; color: gray;">Accesorios para contenedores</small>
    <p class="card-text">
      <ul id="ul17">
        <li class="li">Monobolt aluminio</li> 
        <li class="li">Monobolt acero inoxidable</li> 
        <li class="li">Floor - Mariposa de aluminio</li>
      <ul>
    </p>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 12px;" id="18">
<figure style="padding: 10px;" data-toggle="modal" data-target="#exampleModal" id="gasket">
  <img src="./assets/img/productos/GASKET( CAUCHOS ).jpg" class="card-img-top" alt="acceesorios" width="100%" height="auto">
</figure>
  <div class="card-body">
    <h4 class="card-title" id="t18">Gasket de caucho</h4>
    <small style="font-size: 8pt; color: gray;">Accesorios para contenedores</small>
    <p class="card-text">
      <ul id="ul18">
        <li class="li"></li>
      <ul>
    </p>
  </div>
</div>