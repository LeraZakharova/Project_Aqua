"use strict";

// этот код будет работать по современному стандарту ES5

$(document).ready(function() {
    $("#phone").mask("+7 (999) 999-9999");
  });

$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	});
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});
});


function showHide(element_id) {
	var	obj = document.getElementById(element_id);
	if (obj.style.display != "block") {
		obj.style.display = "block"; //Показываем элемент
	} else obj.style.display = "none"; //Скрываем элемент
} 

function hide(element_id){
	var	obj = document.getElementById(element_id);
	if (obj.style.display = "block") {
		obj.style.display = "none"; //Скрываем элемент
	}
}