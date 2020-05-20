<div class="mobilehide">
	<div class="user-menu-bar">
		<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php wp_nav_menu(
							array(
								'menu'  => 'Dashboard Menu',
								'menu_class' => 'dashboard-menu'
							)
						); ?>
					</div>
					<div class="col-md-6">
						<?php 
							$current_user = wp_get_current_user();
							$current_user_name = $current_user->user_login;
						?>
											
						<?php if ( is_user_logged_in() ) { ?>
							<div class="menu-user-menu-container">
								<ul id="menu-user-menu" class="user-menu">
									<li><a href="/members/me/front/">Profile</a></li>
									<li><a href="/members/me/shop/cart/">Cart</a></li>
									<li><a href="/members/me/settings/">Settings</a></li>
									<li><a href="<?php echo wp_logout_url(); ?>">Log Out</a></li>
								</ul>
							</div>
						<?php } else { ?>
							<div class="menu-user-menu-container">
								<ul id="menu-user-menu" class="user-menu">
									<li><a href="/login">Log In</a></li>
								</ul>
							</div>
						<?php } ?>

						<?php echo get_avatar( $current_user->ID, 60, $default, $alt, array( 'class' => 'dash-user-avatar' ) ); ?>
					</div>

				</div>
		
		</div>
	</div>
</div>
<div class="mobileshow">
	<div class="user-menu-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mobiledashnav">
    				<input type="checkbox" id="show-menu" role="button">
    				<label for="show-menu" class="show-menu"><i class="fa fa-bars" aria-hidden="true"></i> Dashboard Menu</label>
					<?php wp_nav_menu(
						array(
							'menu'  => 'Dashboard Menu Mobile',
							'menu_class' => 'dashboard-menu',
							'menu_id' => 'mobiledashmenu',
							'container'=> false,
						)
					); ?>
				</div>
			</div>
		</div>
	</div>
</div>
