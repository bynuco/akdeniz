<nav class="menu navbar navbar-expand-lg">

    <div class="container">
		<?php
		wp_nav_menu(

			array(
				'theme_location' => 'primary',
				'depth'          => 3,
                'menu_class'         => 'navbar-nav mr-auto',
                'menu_id'         => '',
                'container_id'         => 'menu-container'
			)
		);
		?>


        <ul class="navbar-right list-unstyled float-right text-center">
            <li><a href="#">TR</a></li>
            <li><a href="#">ENG</a></li>
        </ul>
    </div>
</nav>
