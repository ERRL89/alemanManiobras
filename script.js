const menu_slide = document.getElementById("activo")
const contenedor = document.getElementById("contenedor")
const botones = document.getElementById("botones")
const qr = document.getElementById("qr")
const qr2 = document.getElementById("qr2")
const image_slide = document.getElementById("image_slide")
const texto_slide = document.querySelector(".instalacion")

const circulo1 = document.querySelector(".c1")
const circulo2 = document.querySelector(".c2")
const circulo3 = document.querySelector(".c3")
const circulo4 = document.querySelector(".c4")
const circulo5 = document.querySelector(".c5")

//function to do big and small the slide menu
menu_slide.onclick = function () {
  if (contenedor.className == "contenedor active2") {
    contenedor.className = "contenedor"
    botones.className = "botones"
    qr2.className = "qr2"
  }
  menu_slide.classList.toggle("active")
  contenedor.classList.toggle("active")
  botones.classList.toggle("active")
}

//function to show code qr in slide menu
qr.onclick = function () {
  qr2.classList.toggle("active2")
  qr.classList.toggle("active2")
  contenedor.classList.toggle("active2")
  botones.classList.toggle("active2")
}

//function to show images in service area
function imgURL(item) {

  console.log(item)

  if (item == 1) {
    circulo1.src = "./images/1.jpeg"
    circulo2.src = "./images/2.jpeg"
    circulo3.src = "./images/3.jpeg"
    circulo4.src = "./images/4.jpeg"
    circulo5.src = "./images/5.jpeg"
  }

  if (item == 2) {
    circulo1.src = "./images/carga-descarga/1.jpeg"
    circulo2.src = "./images/carga-descarga/2.jpeg"
    circulo3.src = "./images/carga-descarga/3.jpeg"
    circulo4.src = "./images/carga-descarga/4.jpeg"
    circulo5.src = "./images/carga-descarga/5.jpeg"
  }

  if (item == 3) {
    circulo1.src = "./images/maniobras/1.jpeg"
    circulo2.src = "./images/maniobras/2.jpeg"
    circulo3.src = "./images/maniobras/3.jpeg"
    circulo4.src = "./images/maniobras/4.jpeg"
    circulo5.src = "./images/maniobras/5.jpeg"
  }

  if (item == 4) {
    circulo1.src = "./images/logistica-integral/1.jpeg"
    circulo2.src = "./images/logistica-integral/2.jpeg"
    circulo3.src = "./images/logistica-integral/3.jpeg"
    circulo4.src = "./images/logistica-integral/4.jpeg"
    circulo5.src = "./images/logistica-integral/5.jpeg"
   
  }
}


const menu_toogle_header = document.querySelector(".menutoogle")
const ionicon_header = document.getElementById("menu_toogle")
const menu_nav = document.querySelector(".menu")

menu_toogle_header.onclick = function () {
  menu_toogle_header.classList.toggle("active")
  ionicon_header.classList.toggle("active")
  menu_nav.classList.toggle("active")
}

//variables to control images galery
const puertas_cancel = document.getElementById("puertas_cancel")
const select_puertas_cancel = document.getElementById("select_puertas_cancel")
const galeria_puertas_cancel = document.getElementById("galeria_puertas_cancel")

const ventanas_cancel = document.getElementById("ventanas_cancel")
const select_ventanas_cancel = document.getElementById("select_ventanas_cancel")
const galeria_ventanas_cancel = document.getElementById("galeria_ventanas_cancel")

const fachadas_cristal = document.getElementById("fachadas_cristal")
const select_fachadas_cristal = document.getElementById("select_fachadas_cristal")
const galeria_fachadas_cristal = document.getElementById("galeria_fachadas_cristal")

const mamparas = document.getElementById("mamparas")
const select_mamparas = document.getElementById("select_mamparas")
const galeria_mamparas = document.getElementById("galeria_mamparas")

const oficinas = document.getElementById("oficinas")
const select_oficinas = document.getElementById("select_oficinas")
const galeria_oficinas = document.getElementById("galeria_oficinas")

const puertas_cristal = document.getElementById("puertas_cristal")
const select_puertas_cristal = document.getElementById("select_puertas_cristal")
const galeria_puertas_cristal = document.getElementById("galeria_puertas_cristal")

const repisas_cristal = document.getElementById("repisas_cristal")
const select_repisas_cristal = document.getElementById("select_repisas_cristal")
const galeria_repisas_cristal = document.getElementById("galeria_repisas_cristal")

const ventanas_cristal = document.getElementById("ventanas_cristal")
const select_ventanas_cristal = document.getElementById("select_ventanas_cristal")
const galeria_ventanas_cristal = document.getElementById("galeria_ventanas_cristal")

const techos_policarbonato = document.getElementById("techos_policarbonato")
const select_techos_policarbonato = document.getElementById("select_techos_policarbonato")
const galeria_techos_policarbonato = document.getElementById("galeria_techos_policarbonato")

const domos_cristal = document.getElementById("domos_cristal")
const select_domos_cristal = document.getElementById("select_domos_cristal")
const galeria_domos_cristal = document.getElementById("galeria_domos_cristal")

const pisos_cristal = document.getElementById("pisos_cristal")
const select_pisos_cristal = document.getElementById("select_pisos_cristal")
const galeria_pisos_cristal = document.getElementById("galeria_pisos_cristal")

const pergolas = document.getElementById("pergolas")
const select_pergolas = document.getElementById("select_pergolas")
const galeria_pergolas = document.getElementById("galeria_pergolas")

const puertas2 = document.getElementById("puertas2")
const select_puertas2 = document.getElementById("select_puertas2")
const galeria_puertas2 = document.getElementById("galeria_puertas2")

//Function to control images galery
let a = []

a[0] = 0
select_puertas_cancel.onclick = function () {
  if (a[0] == 1) {
    galeria_puertas_cancel.style.display = "none"
    galeria_puertas_cancel.style.visibility = "hidden"
    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    a[0] = 0
  }

  else {
    select_puertas_cancel.setAttribute("name", "close-circle-outline");
    galeria_puertas_cancel.style.visibility = "visible"
    galeria_puertas_cancel.style.height = "auto"
    galeria_puertas_cancel.style.display = "flex"

    a[0] = a[0] + 1

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}
//--------------------------------------------------------------------------------------------
a[1] = 0
select_ventanas_cancel.onclick = function () {
  if (a[1] == 1) {
    galeria_ventanas_cancel.style.display = "none"
    galeria_ventanas_cancel.style.visibility = "hidden"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");
    a[1] = 0
  }
  else {
    select_ventanas_cancel.setAttribute("name", "close-circle-outline");
    galeria_ventanas_cancel.style.visibility = "visible"
    galeria_ventanas_cancel.style.height = "auto"
    galeria_ventanas_cancel.style.display = "flex"

    a[1] = a[1] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[2] = 0
select_fachadas_cristal.onclick = function () {
  if (a[2] == 1) {
    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");
    a[2] = 0
  }
  else {
    select_fachadas_cristal.setAttribute("name", "close-circle-outline");
    galeria_fachadas_cristal.style.visibility = "visible"
    galeria_fachadas_cristal.style.height = "auto"
    galeria_fachadas_cristal.style.display = "flex"

    a[2] = a[2] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[3] = 0
select_mamparas.onclick = function () {
  if (a[3] == 1) {
    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");
    a[3] = 0
  }
  else {
    select_mamparas.setAttribute("name", "close-circle-outline");
    galeria_mamparas.style.visibility = "visible"
    galeria_mamparas.style.height = "auto"
    galeria_mamparas.style.display = "flex"

    a[3] = a[3] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[4] = 0
select_oficinas.onclick = function () {
  if (a[4] == 1) {
    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");
    a[4] = 0
  }
  else {
    select_oficinas.setAttribute("name", "close-circle-outline");
    galeria_oficinas.style.visibility = "visible"
    galeria_oficinas.style.height = "auto"
    galeria_oficinas.style.display = "flex"

    a[4] = a[4] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[5] = 0
select_puertas_cristal.onclick = function () {
  if (a[5] == 1) {
    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");
    a[5] = 0
  }
  else {
    select_puertas_cristal.setAttribute("name", "close-circle-outline");
    galeria_puertas_cristal.style.visibility = "visible"
    galeria_puertas_cristal.style.height = "auto"
    galeria_puertas_cristal.style.display = "flex"

    a[5] = a[5] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[6] = 0
select_repisas_cristal.onclick = function () {
  if (a[6] == 1) {
    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");
    a[6] = 0
  }
  else {
    select_repisas_cristal.setAttribute("name", "close-circle-outline");
    galeria_repisas_cristal.style.visibility = "visible"
    galeria_repisas_cristal.style.height = "auto"
    galeria_repisas_cristal.style.display = "flex"

    a[6] = a[6] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[7] = 0
select_ventanas_cristal.onclick = function () {
  if (a[7] == 1) {
    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");
    a[7] = 0
  }
  else {
    select_ventanas_cristal.setAttribute("name", "close-circle-outline");
    galeria_ventanas_cristal.style.visibility = "visible"
    galeria_ventanas_cristal.style.height = "auto"
    galeria_ventanas_cristal.style.display = "flex"

    a[7] = a[7] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[8] = 0
select_techos_policarbonato.onclick = function () {
  if (a[8] == 1) {
    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");
    a[8] = 0
  }
  else {
    select_techos_policarbonato.setAttribute("name", "close-circle-outline");
    galeria_techos_policarbonato.style.visibility = "visible"
    galeria_techos_policarbonato.style.height = "auto"
    galeria_techos_policarbonato.style.display = "flex"

    a[8] = a[8] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[9] = 0
select_domos_cristal.onclick = function () {
  if (a[9] == 1) {
    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");
    a[9] = 0
  }
  else {
    select_domos_cristal.setAttribute("name", "close-circle-outline");
    galeria_domos_cristal.style.visibility = "visible"
    galeria_domos_cristal.style.height = "auto"
    galeria_domos_cristal.style.display = "flex"

    a[9] = a[9] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[10] = 0
select_pisos_cristal.onclick = function () {
  if (a[10] == 1) {
    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");
    a[10] = 0
  }
  else {
    select_pisos_cristal.setAttribute("name", "close-circle-outline");
    galeria_pisos_cristal.style.visibility = "visible"
    galeria_pisos_cristal.style.height = "auto"
    galeria_pisos_cristal.style.display = "flex"

    a[10] = a[10] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[11] = 0
select_pergolas.onclick = function () {
  if (a[11] == 1) {
    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");
    a[11] = 0
  }
  else {
    select_pergolas.setAttribute("name", "close-circle-outline");
    galeria_pergolas.style.visibility = "visible"
    galeria_pergolas.style.height = "auto"
    galeria_pergolas.style.display = "flex"

    a[11] = a[11] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
  }
}

a[12] = 0
select_puertas2.onclick = function () {
  if (a[12] == 1) {
    galeria_puertas2.style.display = "none"
    galeria_puertas2.style.visibility = "hidden"
    select_puertas2.setAttribute("name", "add-circle-outline");
    a[12] = 0
  }
  else {
    select_puertas2.setAttribute("name", "close-circle-outline");
    galeria_puertas2.style.visibility = "visible"
    galeria_puertas2.style.height = "auto"
    galeria_puertas2.style.display = "flex"

    a[12] = a[12] + 1

    select_puertas_cancel.setAttribute("name", "add-circle-outline");
    galeria_puertas_cancel.style.visibility = "hidden"
    galeria_puertas_cancel.style.display = "none"

    galeria_ventanas_cancel.style.visibility = "hidden"
    galeria_ventanas_cancel.style.display = "none"
    select_ventanas_cancel.setAttribute("name", "add-circle-outline");

    galeria_fachadas_cristal.style.display = "none"
    galeria_fachadas_cristal.style.visibility = "hidden"
    select_fachadas_cristal.setAttribute("name", "add-circle-outline");

    galeria_mamparas.style.display = "none"
    galeria_mamparas.style.visibility = "hidden"
    select_mamparas.setAttribute("name", "add-circle-outline");

    galeria_oficinas.style.display = "none"
    galeria_oficinas.style.visibility = "hidden"
    select_oficinas.setAttribute("name", "add-circle-outline");

    galeria_puertas_cristal.style.display = "none"
    galeria_puertas_cristal.style.visibility = "hidden"
    select_puertas_cristal.setAttribute("name", "add-circle-outline");

    galeria_repisas_cristal.style.display = "none"
    galeria_repisas_cristal.style.visibility = "hidden"
    select_repisas_cristal.setAttribute("name", "add-circle-outline");

    galeria_ventanas_cristal.style.display = "none"
    galeria_ventanas_cristal.style.visibility = "hidden"
    select_ventanas_cristal.setAttribute("name", "add-circle-outline");

    galeria_techos_policarbonato.style.display = "none"
    galeria_techos_policarbonato.style.visibility = "hidden"
    select_techos_policarbonato.setAttribute("name", "add-circle-outline");

    galeria_domos_cristal.style.display = "none"
    galeria_domos_cristal.style.visibility = "hidden"
    select_domos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pisos_cristal.style.display = "none"
    galeria_pisos_cristal.style.visibility = "hidden"
    select_pisos_cristal.setAttribute("name", "add-circle-outline");

    galeria_pergolas.style.display = "none"
    galeria_pergolas.style.visibility = "hidden"
    select_pergolas.setAttribute("name", "add-circle-outline");
  }
}




