$(document).ready(function(){

    $().alert('close');
    if($('#enviado').length){
         $('#myModal').modal('toggle');
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

  $('#email').attr('type', 'email');

 $(window).scroll(function () {
  var scrol = $(this).scrollTop();
  // Efeito do Menu
    if (scrol >= 50) {
        $('#menu').css({zIndex: 9999,  position: 'fixed'});
        $(".logo_h").css({"width":"125px"});
        $('.nav_cel_button').css({marginTop: '17px', marginBottom: '3px'});
        $('#menu').stop().animate({
            opacity: 0.9,
            top: '-10px',
            paddingTop: '0%'
        }, 1000, 'easeOutQuint');

        // $('.nav_cel_header').css({marginTop: '10px'});
        $('#navbar-collapse').addClass('bg_menu');
        $(".bg_menu").css({"background": "#C12232"});
        $('.logo_h_fixed').addClass('branca');
    }

    if(scrol <= 50){
         $('#menu').css({zIndex: 9999, position: 'relative'});
         $(".logo_h").css({"width":"38%"});
         $('#navbar-collapse').removeClass('bg_menu');
          $('#menu').stop().animate({
            opacity: 1,
            top: '0px',
        }, 1000, 'easeOutQuint');
        if(largura >= 768){
          $('#menu').css({top:'37px'});
           console.log(largura);
        }

        if(largura < 667 ){
           $(".logo_h").css({"width":"125px"});
        }
    }
  });
  $('#comment').attr('cols', '36')

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


/* link para o acordion slider 
http://www.armagost.com/zaccordion/*/
    
});