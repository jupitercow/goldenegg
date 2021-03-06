<button id="menuToggle">
	<span class="menuText">MENU</span>
	<svg title="Open Menu" class="open">
		<title>Search</title>
		<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#menu"></use>
	</svg>
	<svg title="Close" class="close">
		<title>Close</title>
		<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#close"></use>
	</svg>
</button>

<nav class="menuFull">
<?php wp_nav_menu(array(
	'container' => false,
	'menu_class' => 'mainNav',
	'theme_location' => 'mainNav',
	'depth' => 2
)); ?>
</nav>
