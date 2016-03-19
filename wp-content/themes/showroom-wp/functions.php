<?php

add_action("admin_menu", "add_theme_menu_item");
add_action( 'wp_enqueue_scripts', 'enqueue' );

//
function enqueue() {
	//styles
	wp_enqueue_style("bootstrap-css", get_template_directory_uri()."/css/bootstrap.min.css");
	//scripts
	wp_enqueue_script("showroom-js", get_template_directory_uri()."/js/bootstrap.min.js");
	wp_enqueue_script("showroom-js", get_template_directory_uri()."/js/jshowroom.js");
}

//settings page
function showroom_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>ShowRoom Panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}

function add_theme_menu_item()
{
	add_menu_page("ShowRoom", "ShowRoom", "manage_options", "showroom-panel", "showroom_settings_page", null, 99);
}

