const hamburguesa = document.getElementById('burger');
const menuFalso = document.getElementById('menuFalso');
const menu = document.getElementById('menu');
const foto_team = document.getElementById('caja_foto_team');
const foto_servicios = document.getElementById('caja_foto_servicios');

const titulos  = document.querySelectorAll('h4');
const parrafos = document.querySelectorAll('p');
const comentarios = document.querySelectorAll('h6')

if (window.innerWidth < 576){
    menu.style.display = 'none';
    foto_team.style.display='none'
    /*foto_servicios.style.display ='none';  */

} else{
    hamburguesa.style.display = 'none';
    menuFalso.style.display = 'none';
    /*titulos.forEach(titulo=>{
        let newTitulo = document.createElement('h2');
        newTitulo.innerHTML=titulo.innerHTML;
        titulo.parentNode.replaceChild(newTitulo, titulo);
    })
    parrafos.forEach(parrafo=>{
        let newParrafo = document.createElement('h5');
        newParrafo.innerHTML=parrafo.innerHTML;
        newParrafo.style.margin = '0px';
        newParrafo.style.textAlign = 'justify'
        parrafo.parentNode.replaceChild(newParrafo, parrafo);
    })
    comentarios.forEach(comentario=>{
        let newComment = document.createElement('h5');
        newComment.innerHTML=comentario.innerHTML;
        comentario.parentNode.replaceChild(newComment, comentario);
    })  */
}

hamburguesa.addEventListener('click', function() {
    if (menu.style.display === 'none' || menu.style.display === '') {
        menuFalso.style.display = 'none';
        menu.style.display = 'block';
       
    } else {
        menuFalso.style.display = 'block';
        menu.style.display = 'none';
    }
})





