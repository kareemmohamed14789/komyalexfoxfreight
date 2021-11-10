$(function (){
    "use strict";
    $('[placeholder]').focus( function(){
        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder', ' ');
        }).blur(function (){
        $(this).attr('placeholder' , $(this).attr('data-text'));
        });
    
      
     var  fullError = true,
          emailError = true,
          subjectError = true,
          messageError = true,
          mobileError = true;
          /*
          $('.request-loge').click(function(){
      if($('this').val() === 'Request Logistic Service'){

        $('this').parent().find('.custom-alert').fadeIn(200);
      }else{

        $('this').parent().find('.custom-alert').fadeOut(200);
      }
    });     
*/
    $('.fullname').blur(function(){
      if($(this).val().length < 4 ){
      /*  $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        fullError = true;
      }else{
      /*  $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        fullError = false;
      }
    });
    
     $('.sear').blur(function(){
      if($(this).val().length < 3 ){
      /*  $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        fullError = true;
      }else{
      /*  $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        fullError = false;
      }
    });
     
          $('.seara').blur(function(){
      if($(this).val().length < 3 ){
      /*  $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        fullError = true;
      }else{
      /*  $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        fullError = false;
      }
    });
     
        $('.email').blur(function(){
      if($(this).val().length < 1 ){
      /*  $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        emailError = true;
      }else{
      /*  $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        emailError = false;
      }
    });
        
        
            $('.emaill').blur(function(){
      if($(this).val().length < 1 ){
      /*  $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        emailError = true;
      }else{
      /*  $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        emailError = false;
      }
    });    
        
        $('.subject').blur(function(){
      if($(this).val().length < 1 ){
       /* $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        subjectError = true;
      }else{
     /*   $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        subjectError = false;
      }
    });
        
        
        $('.message').blur(function(){
      if($(this).val().length < 10 ){
     /*   $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        messageError = true;
      }else{
    /*    $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        messageError = false;
      }
    });    
    
           $('.comment').blur(function(){
      if($(this).val().length < 4 ){
     /*   $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        messageError = true;
      }else{
    /*    $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        messageError = false;
      }
    });    
            $('.username').blur(function(){
      if($(this).val().length < 4 ){
   /*     $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
      }else{
     /*   $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        }
    });
            
     $('.mobilenumber').blur(function(){
      if($(this).val().length < 1 ){
   /*     $(this).css('border','2px solid #F00');*/
        $(this).parent().find('.custom-alert').fadeIn(200);
        mobileError = true;
      }else{
     /*   $(this).css('border','2px solid #080');*/
        $(this).parent().find('.custom-alert').fadeOut(200);
        mobileError = false;
      }
    });



$('.confirm').click(function(){
     return confirm ('Are You Sure');            
    });
 $('body').css('paddingTop', $('.navbar').innerHeight() + 11);
     $(".navbar-default .navbar-nav > li > a").click(function (e) {
     e.preventDefault();
     $('html, body').animate({
          
        scrollTop:$('#' + $(this).data('scroll')).offset().top - 130
          },2000);
     });
     
$(window).scroll(function(){
 var scrollToTop = $(".scroll-to-top");
 if ($(window).scrollTop() >= 1900) {
  if (scrollToTop.is(' :hidden')){
   scrollToTop.fadeIn(400);
  }
 } else {
  scrollToTop.fadeOut(400);
 }
  });
$(".scroll-to-top").click(function(event){
      event.preventDefault();
     $('html, body').animate({
          
        scrollTop: 0
          },3000);
     });


  $('[data-toggle="popover"]').popover()

});

