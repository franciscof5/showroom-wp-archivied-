jQuery(document).ready(function($) {
	$("ul.children").addClass('dropdown-menu');
	$("ul.children").parent().wrap( "<li class='dropdown'></li>" );
	$("ul.children").parent().unwrap();
	$("ul.children").prev().attr("data-toggle","dropdown");
	$("ul.children").prev().addClass("dadropdownta-toggle","dropdown");
	$("ul.children").prev().append('<span class="caret" style="float:right;margin-top:8px;"></span>');
	$("dadropdownta-toggle").unwrap();
	//
	//$(".wpp-list").addClass("col-sm-8 row cointainer-fluid");
	//$(".wpp-list").wrap( "<div class='col-sm-8'></div>" );
	$(".wpp-list li").addClass("col-sm-1");
});