$(function() {
	var hash=window.location.hash;
	hash && $('ul.nav a[href="' +hash+ '"]').tab('show');
$("#home a:contains('Home')").parent().addClass('active');
$("#quienes_somos a:contains('Quienes Somos ')").parent().addClass('active');
$('ul.nav li.dropdown').hover(function() {
$('.dropdown-menu',this).fadeIn();
}, function() {
	$('.dropdown-menu',this).fadeOut('fast');
});
$("[data-toggle='tooltip']").tooltip({animation: true});
$('.modalphotos img').on('click', function() {
	$('#modal').modal ({
		show: true,
		})
		var mysrc=this.src.substr(0, this.src.length-7) + '.jpg';
		$('#modalimage').attr('src',mysrc);
		$('#modalimage').on('click', function(){
			$('#modal').modal('hide');
			})
});
	});
