<div class="wrap fullculqi_addons_wrap">
	<div class="fullculqi_addons_title">
		<h1><?php esc_html_e( 'Culqi Addons', 'fullculqi' ); ?></h1>
	</div>
	<div class="fullculqi_addons_all">
		<div class="fullculqi_addons_container">
			<div class="fullculqi_addons_item">
				<div class="fullculqi_addons_header">
					<img src="<?php echo esc_url( $banner_1 ); ?>" alt="Fullculqi One Click" />
				</div>
				<div class="fullculqi_addons_body">
					<img src="<?php echo esc_url( $icon_wc ); ?>" alt="wordpress" />
					<h2><?php esc_html_e( 'Culqi One Click Payments', 'fullculqi' ); ?></h2>
					<p><?php esc_html_e( 'Your buyers will can do their purchase with a single click in the checkout page', 'fullculqi' ); ?></p>
				</div>
				<div class="fullculqi_addons_footer">
					<?php if( $has_oneclick ) : ?>
						<a href="https://bit.ly/375PcbS" target="_blank" class="button">
							<img src="<?php echo esc_url( admin_url('images/yes.png') ); ?>" alt="check" style="vertical-align: middle" />
							<?php esc_html_e( 'Installed','fullculqi' ); ?>
						</a>
					<?php else : ?>
						<a href="https://bit.ly/375PcbS" target="_blank" class="button"><?php esc_html_e( 'Download', 'fullculqi' ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="fullculqi_addons_container">
			<div class="fullculqi_addons_item">
				<div class="fullculqi_addons_header">
					<img src="<?php echo esc_url( $banner_2 ); ?>" alt="Fullculqi Subscriptions" />
				</div>
				<div class="fullculqi_addons_body">
					<img src="<?php echo esc_url( $icon_wc ); ?>" alt="woocommerce" />
					<h2><?php esc_html_e( 'Culqi Subscriptions', 'fullculqi' ); ?></h2>
					<p><?php esc_html_e( 'Your ecommerce will can sell products or services using Culqi recurring payment.', 'fullculqi' ); ?></p>
				</div>
				<div class="fullculqi_addons_footer">
					<?php if( $has_subscribers ) : ?>
						<a href="https://bit.ly/2Y8qoMi" target="_blank" class="button">
							<img src="<?php echo esc_url( admin_url('images/yes.png') ); ?>" alt="check" style="vertical-align: middle" />
							<?php esc_html_e( 'Installed', 'fullculqi' ); ?>
						</a>
					<?php else : ?>
						<a href="https://bit.ly/2Y8qoMi" target="_blank" class="button"><?php esc_html_e( 'Download', 'fullculqi' ); ?></a>
					<?php endif;?>
				</div>
			</div>
		</div>

	</div>

</div>