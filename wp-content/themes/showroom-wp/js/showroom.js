jQuery(document).ready(function($) {
	//header nav menu
	$("ul.children").addClass('dropdown-menu');
	$("ul.children").parent().wrap( "<li class='dropdown'></li>" );
	$("ul.children").parent().unwrap();
	$("ul.children").prev().attr("data-toggle","dropdown");
	$("ul.children").prev().addClass("dadropdownta-toggle","dropdown");
	$("ul.children").prev().append('<span class="caret" style="float:right;margin-top:8px;"></span>');
	$("dadropdownta-toggle").unwrap();
	//header extra
	$(".wpp-list li").addClass("col-sm-1");
	$(".wpp-list a").each(function() {
		var novot = $(this).parent().find(".wpp-views").text();
		novot = novot.slice(0,-5);
		novot = novot + " visualizações";
		$(this).parent().attr("data-toggle","tooltip");
		$(this).parent().attr("data-placement","bottom");
		$(this).parent().attr("title",novot);
		$(this).parent().find(".wpp-views").hide();
	});
	//data-toggle="tooltip" data-placement="top" title="Hooray!"
	$('[data-toggle="tooltip"]').tooltip(); 

	//responsive tricks
	$(window).resize(function() {
		adjust();
	});
	adjust();
	
	function adjust() {
		$(".copy-height").each(function() {
			$(this).css("height", $(this).prev().height());
			$(this).children().css("height", $(this).prev().height()/2);
			//$(this).children().children().css("width", $(this).prev().width()/2);
			//$(this).children().children().css("height", $(this).prev().height()/4);
			//$(this).children(":second").css("height", $(this).prev().height()/2);
		});
	}
});