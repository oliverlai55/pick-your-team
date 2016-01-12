$(document).ready(function() {
	console.log("helo1");
   	$(".container").shapeshift();
   	console.log("hello");

   	//Fade Toggle
  $("#messi").click(function () {
    $("#messi-stats").fadeToggle(); 
  });

  // ======== Skills Functions ==========
var aboutColor = $('#skills').css('color');
    $('.chart').each(function(){
        $(this).easyPieChart({
            size:170,
            animate: 1500,
            lineCap:'butt',
            scaleColor: false,
            barColor: aboutColor,
            lineWidth: 10
        });
    });

});