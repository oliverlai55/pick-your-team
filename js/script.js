$(document).ready(function() {
   	$(".container").shapeshift();
 
   	//Fade Toggle
  $("#messi").click(function () {
    $("#messi-stats").fadeToggle(); 
  });


    jQuery('.skillbar').each(function() {
      jQuery(this).appear(function() {
        jQuery(this).find('.count-bar').animate({
          width:jQuery(this).attr('data-percent')
        },1000);
        var percent = jQuery(this).attr('data-percent');
        jQuery(this).find('.count').html('<span>' + percent + '</span>');
      });
    }); 



});