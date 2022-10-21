hamburguer = document.querySelector('#menu');
navbar = document.querySelector('.header__navigation');
fechar = document.querySelector('#close');
hamburguer.addEventListener('click', ()=>{
    navbar.setAttribute('active','');
    
})

fechar.addEventListener('click',()=>{
    navbar.removeAttribute('active');
})
