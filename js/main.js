'use strict';
     $(function() {
      //POP UP ORDER FORM
      //Card-1
       $('.btn-price1').click(function(){
           $('#overlay').fadeIn('slow');
           $('#overlay-form1').fadeIn('slow');
       });

/*Close*/
       $(document).mouseup(function (e)
{
    var container = $("#overlay-form1");
    var overlay = $("#overlay");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut(500);
        overlay.fadeOut(500);
    }
});

           /*$('.btn-close1').click(function(){
           $('#overlay').fadeOut('slow');
           $('#overlay-form1').fadeOut('slow');
       });*/

      //Card-2
        $('.btn-price2').click(function(){
           $('#overlay').fadeIn('slow');
           $('#overlay-form2').fadeIn('slow');
       });


/*Close*/
       $(document).mouseup(function (e)
{
    var container = $("#overlay-form2");
    var overlay = $("#overlay");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut(500);
        overlay.fadeOut(500);
    }
});
        /*$('.btn-close2').click(function(){
           $('#overlay').fadeOut('slow');
           $('#overlay-form2').fadeOut('slow');
       });*/


        //Card-3
         $('.btn-price3').click(function(){
           $('#overlay').fadeIn('slow');
           $('#overlay-form3').fadeIn('slow');
       });


/*Close*/
       $(document).mouseup(function (e)
{
    var container = $("#overlay-form3");
    var overlay = $("#overlay");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut(500);
        overlay.fadeOut(500);
    }
});

         /*$('.btn-close3').click(function(){
           $('#overlay').fadeOut('slow');
           $('#overlay-form3').fadeOut('slow');
       });*/


        //Card-4
          $('.btn-price4').click(function(){
           $('#overlay').fadeIn('slow');
           $('#overlay-form4').fadeIn('slow');
       });


/*Close*/
       $(document).mouseup(function (e)
{
    var container = $("#overlay-form4");
    var overlay = $("#overlay");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut(500);
        overlay.fadeOut(500);
    }
});

          /*$('.btn-close4').click(function(){
           $('#overlay').fadeOut('slow');
           $('#overlay-form4').fadeOut('slow');
       });*/

  

      //Masked input
      $(".input-phone").mask("+7(999) 999-99-99");
      $(".input-tel").mask("+7(999) 999-99-99");



      //PRICHESKI TAB-PANEL

      //fake link behaviour
     $(".tab-nav").css('cursor', 'pointer');

    //jquery tap panel
     $(".tab-nav").on('click', function() {
      
      //we take the index of the clicked button and show the article with the same index
     var number = $(this).index();
  
      //hide current article and show the selected one
      $('.tab-content').hide().eq(number).fadeIn(500); 

      //mark the selected button
      $(this).addClass('active-tab');
      $(".tab-nav").not(this).removeClass('active-tab');

    });
      //hide all articles except the first one
    $('.tab-content').not(":first").hide();

     });//$(document).ready(function(){}) CLOSURE

