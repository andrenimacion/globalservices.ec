const productos = {
    /*1*/
    selladoPegado: document.getElementById('selladoPegado'),
    /*2*/
    accesoriosPuertas: document.getElementById('accesoriosPuertas'),
    /*3*/
    planchasAceroInoxidable: document.getElementById('planchasAceroInoxidable'),
    /*4*/
    accesoriosDrenaje: document.getElementById('accesoriosDrenaje'),
    /*5*/
    bisagras: document.getElementById('bisagras'),
    /*6*/
    cableElectrico: document.getElementById('cableElectrico'),
    /*7*/
    perfHierro: document.getElementById('perfHierro'),
    /*8*/
    frames: document.getElementById('frames'),
    /*9*/
    cortina: document.getElementById('cortina'),
    /*10*/
    lona: document.getElementById('lona'),
    /*11*/
    pernosAcero: document.getElementById('pernosAcero'),
    /*12*/
    placa: document.getElementById('placa'),
    /*13*/
    plywood: document.getElementById('plywood'),
    /*14*/
    accesoriosRefrerSeco: document.getElementById('accRefrer'),
    /*15*/
    Estabilizador: document.getElementById('Estabilizador'),
    /*16*/
    pisoCont: document.getElementById('pisoCont'),
    /*17*/
    remaches: document.getElementById('remaches'),
    /*18*/
    gasket: document.getElementById('gasket')
}

/* ID UL inicio*/
const ul = {

        ul1: document.getElementById('ul1'),
        ul2: document.getElementById('ul2'),
        ul3: document.getElementById('ul3'),
        ul4: document.getElementById('ul4'),
        ul5: document.getElementById('ul5'),
        ul6: document.getElementById('ul6'),
        ul7: document.getElementById('ul7'),
        ul8: document.getElementById('ul8'),
        ul9: document.getElementById('ul9'),
        ul10: document.getElementById('ul10'),
        ul11: document.getElementById('ul11'),
        ul12: document.getElementById('ul12'),
        ul13: document.getElementById('ul13'),
        ul14: document.getElementById('ul14'),
        ul15: document.getElementById('ul15'),
        ul16: document.getElementById('ul16'),
        ul17: document.getElementById('ul17'),
        ul18: document.getElementById('ul18')

    }
    /* ID UL fin*/
function showDisplay(obj, display) {
    obj.style.display = display;
}

/*Hide UL INICIO */
showDisplay(ul.ul1, 'none');
showDisplay(ul.ul2, 'none');
showDisplay(ul.ul3, 'none');
showDisplay(ul.ul4, 'none');
showDisplay(ul.ul5, 'none');
showDisplay(ul.ul6, 'none');
showDisplay(ul.ul7, 'none');
showDisplay(ul.ul8, 'none');
showDisplay(ul.ul9, 'none');
showDisplay(ul.ul10, 'none');
showDisplay(ul.ul11, 'none');
showDisplay(ul.ul12, 'none');
showDisplay(ul.ul13, 'none');
showDisplay(ul.ul14, 'none');
showDisplay(ul.ul15, 'none');
showDisplay(ul.ul16, 'none');
showDisplay(ul.ul17, 'none');
showDisplay(ul.ul18, 'none');
/*Hide UL FIN */

class newImagen {
    constructor(title, imagen, uls, display) {
        this.title = title;
        this.imagen = imagen;
        this.uls = uls;
        this.display = display;
    }
    changeImg() {
        let imgModal = document.getElementById('imagenModal');
        imgModal.src = this.imagen;
    }
    changeTxt() {
        let bodyModal = document.getElementById('bodyModal');
        bodyModal.appendChild(this.uls);
        this.uls.style = this.display;
        let exampleModalLabel = document.getElementById('exampleModalLabel');
        exampleModalLabel.innerHTML = this.title;
    }
}

productos.selladoPegado.addEventListener('click', sellado);

function sellado() {
    let img1 = new newImagen(document.getElementById('t1').outerText, './assets/img/productos/Accesorios2.jpg', ul.ul1, '');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.accesoriosPuertas.addEventListener('click', accPuertas);

function accPuertas() {
    let img1 = new newImagen(document.getElementById('t2').outerText, './assets/img/productos/accesoriosPuerta.jpg', ul.ul2, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.planchasAceroInoxidable.addEventListener('click', plAcero);

function plAcero() {
    let img1 = new newImagen(document.getElementById('t3').outerText, './assets/img/productos/planAcero2.jpg', ul.ul3, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.accesoriosDrenaje.addEventListener('click', accesoriosDrenaje);

function accesoriosDrenaje() {
    let img1 = new newImagen(document.getElementById('t4').outerText, './assets/img/productos/acc.jpg', ul.ul4, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.bisagras.addEventListener('click', bisagras);

function bisagras() {
    let img1 = new newImagen(document.getElementById('t5').outerText, './assets/img/productos/bisGalv.jpg', ul.ul5, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}


productos.cableElectrico.addEventListener('click', cableElectrico);

function cableElectrico() {
    let img1 = new newImagen(document.getElementById('t6').outerText, './assets/img/productos/cabElec.jpg', ul.ul6, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.perfHierro.addEventListener('click', perfHierro);

function perfHierro() {
    let img1 = new newImagen(document.getElementById('t7').outerText, './assets/img/productos/perfiles.jpg', ul.ul7, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.frames.addEventListener('click', frames);

function frames() {
    let img1 = new newImagen(document.getElementById('t8').outerText, './assets/img/productos/Frames.jpg', ul.ul8, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.cortina.addEventListener('click', cortina);

function cortina() {
    let img1 = new newImagen(document.getElementById('t9').outerText, './assets/img/productos/controlAtm.jpg', ul.ul9, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.lona.addEventListener('click', lona);

function lona() {
    let img1 = new newImagen(document.getElementById('t10').outerText, './assets/img/productos/lona.jpg', ul.ul10, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.pernosAcero.addEventListener('click', pernosAcero);

function pernosAcero() {
    let img1 = new newImagen(document.getElementById('t11').outerText, './assets/img/productos/pernos.jpg', ul.ul11, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.placa.addEventListener('click', placa);

function placa() {
    let img1 = new newImagen(document.getElementById('t12').outerText, './assets/img/productos/csc.jpg', ul.ul12, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.plywood.addEventListener('click', plywood);

function plywood() {
    let img1 = new newImagen(document.getElementById('t13').outerText, './assets/img/productos/playwood.jpg', ul.ul13, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.accesoriosRefrerSeco.addEventListener('click', accesoriosRefrerSeco);

function accesoriosRefrerSeco() {
    let img1 = new newImagen(document.getElementById('t14').outerText, './assets/img/productos/ACCESORIOSREFFERYSECO.jpg', ul.ul14, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.Estabilizador.addEventListener('click', Estabilizador);

function Estabilizador() {
    let img1 = new newImagen(document.getElementById('t15').outerText, './assets/img/productos/ESTABILIZADOR.jpg', ul.ul15, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.pisoCont.addEventListener('click', pisoCont);

function pisoCont() {
    let img1 = new newImagen(document.getElementById('t16').outerText, './assets/img/productos/PISODECONTENEDOR.jpg', ul.ul16, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul17, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.remaches.addEventListener('click', remaches);

function remaches() {
    let img1 = new newImagen(document.getElementById('t17').outerText, './assets/img/productos/REMACHESDEACEROYALUMINIO.jpg', ul.ul17, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul18, 'none');
    img1.changeImg();
    img1.changeTxt();
}

productos.gasket.addEventListener('click', gasket);

function gasket() {
    let img1 = new newImagen(document.getElementById('t18').outerText, './assets/img/productos/GASKET( CAUCHOS ).jpg', ul.ul18, '');
    showDisplay(ul.ul1, 'none');
    showDisplay(ul.ul2, 'none');
    showDisplay(ul.ul3, 'none');
    showDisplay(ul.ul4, 'none');
    showDisplay(ul.ul5, 'none');
    showDisplay(ul.ul6, 'none');
    showDisplay(ul.ul7, 'none');
    showDisplay(ul.ul8, 'none');
    showDisplay(ul.ul9, 'none');
    showDisplay(ul.ul10, 'none');
    showDisplay(ul.ul11, 'none');
    showDisplay(ul.ul12, 'none');
    showDisplay(ul.ul13, 'none');
    showDisplay(ul.ul14, 'none');
    showDisplay(ul.ul15, 'none');
    showDisplay(ul.ul16, 'none');
    showDisplay(ul.ul17, 'none');
    img1.changeImg();
    img1.changeTxt();
}