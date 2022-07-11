window.addEventListener("scroll", function(){
    efectBlur();
});

function efectBlur(){
    let scroll = document.documentElement.scrollTop;
    let alto = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let progreso = (scroll/alto)*100;
    console.log(progreso);
    document.getElementsByClassName('header-principal')[0].style.backdropFilter = 'blur('+progreso+'px)';
};