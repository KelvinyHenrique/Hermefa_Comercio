var slideIndex = 0; // Define o valor da variavel "slideindex" como 0 

function showSlides() {

    var i;  // Define Variavel I
    var slides = document.getElementsByClassName("sliders"); // Define seleciona a class das fotos e define "slides" como variavel  como array
    //var dots = document.getElementsByClassName("dot");  Variavel para selecionar todas as class "dot" das divs que contém indicadores da posição dos sliders como array
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }   // Pega o numero do array  sliders e cada vez adiciona  mais um valor a "i" e tira uma imagem da tela

    slideIndex++;   // Adiciona index + 1

    if (slideIndex > slides.length) { slideIndex = 1 }// se slideIndex for maior que o numero da variavel "slides" adiciona 1 a slide index    

    //for (i = 0; i < dots.length; i++) {
      //  dots[i].className = dots[i].className.replace(" active", "");
    //}

    slides[slideIndex - 1].style.display = "block";  // Tira diminui o valor da variavel slideindex e mostra a imagem na tela

   // dots[slideIndex - 1].className += " active"; // Adiciona o efeito nas bolinhas para deixar cada uma de acordo com a sequência da imagem
    
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

function setaesquerda() {
 
    var i;  // Define Variavel I
    var slides = document.getElementsByClassName("sliders"); // Define seleciona a class das fotos e define "slides" como variavel  como array
    //var dots = document.getElementsByClassName("dot");  Variavel para selecionar todas as class "dot" das divs que contém indicadores da posição dos sliders como array
    for (i = 1; i < slides.length; i++) {
        slides[i].style.display = "none";
    }   // Pega o numero do array  sliders e cada vez adiciona  mais um valor a "i" e tira uma imagem da tela
    
    slideIndex++;  // Adiciona index + 1

    if (slideIndex > slides.length) { slideIndex = 1 }// se slideIndex for maior que o numero da variavel "slides" adiciona 1 a slide index    

    //for (i = 0; i < dots.length; i++) {
      //  dots[i].className = dots[i].className.replace(" active", "");
    //}

    slides[slideIndex  - 1].style.display = "block";  
}


// Tela Login

/*$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  });
  */