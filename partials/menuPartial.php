

    <div class="container">


		<?php
		wp_nav_menu(

			array(
				'theme_location' => 'primary',
				'depth'          => 3,
                'menu_class'         => 'navbar-nav mr-auto animated fadeIn',
                'menu_id'         => '',
                'container_id'         => 'menu-container'
			)
		);
		?>
        <div class="clearfix"></div>
        <div class="toggle">
            <label for="toggleMenu">
                <i class="fas fa-bars fa-2x mt-1"></i>
                <span style="margin-left: 5px; font-size: 2em">MENU</span>
            </label>
            <input type="checkbox" id="toggleMenu">
        </div>

        <ul class="navbar-right list-unstyled float-right text-center">
            <li><a href="http://eng.akdeniz.edu.tr/">ENG</a></li>
        </ul>
    </div>
