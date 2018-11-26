"use strict";

// этот код будет работать по современному стандарту ES5

$(document).ready(function() {
    $("#phone").mask("+7 (999) 999-9999");
  });

$(document).ready(function(){
    $("#navigation").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
});

function showHide(element_id) {
	var	obj = document.getElementById(element_id);
	if (obj.style.display != "flex") {
		obj.style.display = "flex"; //Показываем элемент
	} else obj.style.display = "none"; //Скрываем элемент
} 

function hide(element_id){
	var	obj = document.getElementById(element_id);
	if (obj.style.display = "flex") {
		obj.style.display = "none"; //Скрываем элемент
	}
}

$(document).scroll( function() {
	if ( $(document).scrollTop() > 0 ) {
		$('#toTop').fadeIn();
		}
	else {
		$('#toTop').fadeOut();
	}
});

function up() {  
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);  
	if(top > 0) {  
	  window.scrollBy(0,((top+100)/-10));  
	  t = setTimeout('up()',10);  
	} else clearTimeout(t);  
	return false;  
} 
