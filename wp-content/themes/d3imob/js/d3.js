$(document).ready(function(){


    if($('#enviado').length){
         $('#myModal').modal('toggle');
    }

     if($('#enviado_slider').length){
         $('#myModalSlider').modal('toggle');
    }

    $('#submit').addClass('btn');
    $('#submit').addClass('btn-vermelho');

    $('#author').val("");
    $('#email').val("");
    $('#url').val("");
    $("#comment").val("");

    $('#services a').click(function (e) {
      e.preventDefault();
      	 $(this).tab('show');
    });

    var largura = $(window).width();
    var slideW = largura - 300;
    $("#equipe ul").zAccordion({
      slideWidth: slideW,
      width: largura,
      height: 500,
      timeout: 3000,
      trigger: "mouseover",
      slideClass: "frame"
  });

 $(window).scroll(function () {
  var scrol = $(this).scrollTop();
  // Efeito do Menu
    if (scrol >= 50) {
        $('#menu').css({zIndex: 9999});
        $(".logo_h").css({"width":"125px"});
        $(".logo_h_fixed").css({"width":"125px"});
        $(".logo_h_n_fixed").css({"display":"none"});
        $(".logo_h_fixed").css({"display":"block"});
        $('.nav_cel_button').css({marginTop: '10px', marginBottom: '3px'});
        $('#menu').stop().animate({
            opacity: 0.9,
            top: '-10px',
            paddingTop: '0%'
        }, 1000, 'easeOutQuint');

        $('.nav_cel_header').css({marginTop: '10px'});
        $('#navbar-collapse').addClass('bg_menu');
        $(".bg_menu").css({"background": "#C12232"});
        $('.logo_h_fixed').addClass('branca');
    }

    if(scrol <= 50){
         $('#menu').css({zIndex: 9999});
         $(".logo_h").css({"width":"60%"});
         $(".logo_h_n_fixed").css({"display":"block"});
         $(".logo_h_fixed").css({"display":"none"});
         $('#navbar-collapse').removeClass('bg_menu');
         if(largura < 376){
           $('#menu').stop().animate({
              opacity: 1,
              top: '21px',
          }, 1000, 'easeOutQuint');
         }else {
          $('#menu').stop().animate({
               opacity: 1,
               top: '25px',
           }, 1000, 'easeOutQuint');
         }
          
          if(largura > 736){
               $('.branca').css({'display': 'none'});
               if(largura >= 768){
                  $("#navbar-collapse").css({"background": "transparent"});
                  $(".logo_h").css({"width":"60%"});
               }
          } else {
               $('.branca').css({'display': 'block'});
               $('.logo_h_n_fixed').css({'display' : 'none'});
          }

          
         
    }
  });

    if(largura < 768 ){
      $('.logo_h_fixed').css({'display' : 'block', 'width':'125px'});
      // $('.logo>h1').css({marginTop : '10px'});
    }

    /*================================
     SCROLL SUAVE DA PÁGINA
     ================================
     */

     $(function(){
         $(".scroll").click(function(event){
             event.preventDefault();

             var full_url = this.href;
             var parts = full_url.split("#");
             var trgt = parts[1];
             var target_offset = $("#"+trgt).offset();
             var speed = 1000;
             var target_top = target_offset.top - $(this).data('offset');
             console.log(target_top);
             console.log($('#container').height());
             $('html, body').animate({scrollTop:target_top}, speed);
         });
     });

     //END

     // Máscara para telefone

     /* Máscaras ER */
     // $("#telefone").mask("(00) 0000-00009");
     $(".phone").mask("(99) 9999-9999?9").focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });


/* link para o acordion slider 
http://www.armagost.com/zaccordion/*/
    
});