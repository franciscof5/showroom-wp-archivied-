jQuery(document).ready(function($) {
	$("ul.children").addClass('dropdown-menu');
	$("ul.children").parent().wrap( "<li class='dropdown'></li>" );
	$("ul.children").parent().unwrap();
	$("ul.children").parent().find("a").attr("data-toggle","dropdown");
	$("ul.children").parent().find("a").addClass("dadropdownta-toggle","dropdown");
	$("ul.children").prev().append('<span class="caret"></span>');
	$("dadropdownta-toggle").unwrap();
	
	//$('<span class="caret"></span>').insertBefore("ul.children");
});