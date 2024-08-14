const hamburguesa2 = document.getElementById('burger2');
const menuFalso2 = document.getElementById('menuFalso2');
const menu2 = document.getElementById('menu2');

if (window.innerWidth < 576){
    menu2.style.display = 'none';
   
} else{
    hamburguesa2.style.display = 'none';
    menuFalso2.style.display = 'none';
}

hamburguesa2.addEventListener('click', function() {
    if (menu2.style.display === 'none' || menu2.style.display === '') {
        menuFalso2.style.display = 'none';
        menu2.style.display = 'block';
       
    } else {
        menuFalso2.style.display = 'block';
        menu2.style.display = 'none';
    }
})





