
<div id="pwp-admin-intro" class="wp-block-columns alignwide are-vertically-aligned-bottom is-layout-flex wp-block-columns-is-layout-flex">
	<div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow">
		<h1 class="wp-block-heading has-black-color has-pwp-huge-font-size"><?php echo esc_html__( 'Hey,', 'portfolio-wp' ); ?> 👋 <br><?php echo esc_html__( 'We\'re PortfolioWP.', 'portfolio-wp' ); ?></h1>
	</div>
	<div class="wp-block-column is-vertically-aligned-bottom is-layout-flow wp-block-column-is-layout-flow">
		<p style="font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.444), 1.15rem);"><?php echo esc_html__( 'A portfolio theme designed to highlight your talent and engage your audience. Packed with expertly designed Blocks and Patterns to showcase your work in the best light.', 'portfolio-wp' ); ?></p>
	</div>
</div>

<div id="pwp-getting-started" class="wp-block-group alignwide is-layout-constrained wp-block-group-is-layout-constrained">

	<div class="pwp-admin-blocks-container alignwide">

		<div class="pwp-admin-block">
			<div class="pwp-admin-block-content">
				<span class="pwp-admin-block-icon"><i class="fa-solid fa-arrow-right"></i></span>
				<h4 class="wp-block-heading has-normal-font-size"><?php echo esc_html__( 'Get Started', 'portfolio-wp' ); ?></h4>
				<p><?php echo esc_html__( 'Let our PortfolioWP Theme Setup guide you effortlessly through the process of getting your site up and running. You\'re only a few steps away from launching your stunning website! Ready?', 'portfolio-wp' ); ?></p>
			</div>
			<div class="wp-block-button wp-block-button__width-100 has-small-font-size">
				<a class="wp-block-button__link has-text-align-center wp-element-button" href="<?php echo esc_url( 'admin.php?page=portfolio-wp&pwp_page=theme-setup' ); ?>"><?php echo esc_html__( 'Start the Theme Setup!', 'portfolio-wp' ); ?></a>
			</div>
		</div>

		<div class="pwp-admin-block">
			<div class="pwp-admin-block-content">
				<span class="pwp-admin-block-icon"><i class="fa-solid fa-book"></i></span>
				<h4 class="wp-block-heading has-normal-font-size"><?php echo esc_html__( 'Docs &amp; Support', 'portfolio-wp' ); ?></h4>
				<p><?php echo esc_html__( 'Need a little help along the way? Check out our theme documentation, or reach out to our support team for help. We\'ll get you back on track!', 'portfolio-wp' ); ?></p>
			</div>
			<div class="wp-block-button wp-block-button__width-100 has-small-font-size">
				<a class="wp-block-button__link has-text-align-center wp-element-button" target="_blank" href="<?php echo esc_url( 'https://portfoliowp.com/documentation/' ); ?>"><?php echo esc_html__( 'View Documentation', 'portfolio-wp' ); ?></a>
			</div>
		</div>
		
		<div class="pwp-admin-block">
			<div class="pwp-admin-block-content">
				<span class="pwp-admin-block-icon"><i class="fa-solid fa-clipboard-list"></i></span>
				<h4 class="wp-block-heading has-normal-font-size"><?php echo esc_html__( 'Changelog', 'portfolio-wp' ); ?></h4>
				<p><?php echo esc_html__( 'Looking for the latest info on PortfolioWP and what features have been rolled out, look no further. Check it all out here.', 'portfolio-wp' ); ?></p>
			</div>
			<div class="wp-block-button wp-block-button__width-100 has-small-font-size">
				<a class="wp-block-button__link has-text-align-center wp-element-button" href="<?php echo esc_url( 'admin.php?page=portfolio-wp&pwp_page=changelog' ); ?>"><?php echo esc_html__( 'View Changelog', 'portfolio-wp' ); ?></a>
			</div>
		</div>

	</div>
	
	<?php if ( ! PWP_EDD::is_wpcom() ) { // Hide content if WP.com ?>

	<div class="pwp-gopro alignwide">
		<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Go Pro', 'portfolio-wp' ); ?></h2>
		<?php // if ( class_exists( 'PWP_EDD' ) && PWP_EDD::is_valid() ): ?>
		<!-- <p>Thank you for going Pro! Your support helps us continue to develop and improve PortfolioWP. We're excited to see what you create!</p>
		<a href="https://portfoliowp.com/account/" class="button button-primary">Manage Your Account</a> -->
		<?php // else: ?>
		<p class="has-normal-font-size"><?php echo esc_html__( 'Enhance Your Creative Showcase with PortfolioWP Pro. Unlock advanced Patterns, premium Blocks, expert design feedback, and exclusive features that elevate your portfolio to professional heights. Go Pro and transform your online presence today.', 'portfolio-wp' ); ?></p>
		<!-- Create a table with three columns to compare the free and pro versions of the theme. -->
		<div class="pwp-features">
			<table class="pwp-features-table">
				<tr>
					<th><?php echo esc_html__( 'Features', 'portfolio-wp' ); ?></th>
					<th><?php echo esc_html__( 'Basic + Free', 'portfolio-wp' ); ?></th>
					<th><?php echo esc_html__( 'Go Pro', 'portfolio-wp' ); ?></th>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'WordPress Core Styled Blocks', 'portfolio-wp' ); ?></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Global Style Presets', 'portfolio-wp' ); ?></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'PortfolioWP Custom Blocks', 'portfolio-wp' ); ?></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/x.png" alt="No" /></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Dark Style Patterns', 'portfolio-wp' ); ?></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/x.png" alt="No" /></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Scrolling Marquee Pattern', 'portfolio-wp' ); ?></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/x.png" alt="No" /></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Pricing Table Patterns', 'portfolio-wp' ); ?></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/x.png" alt="No" /></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Portfolio Feedback', 'portfolio-wp' ); ?></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/x.png" alt="No" /></td>
					<td><img width="32" height="32" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/check.png" alt="Yes" /></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Header Patterns', 'portfolio-wp' ); ?></td>
					<td>2</td>
					<td>5</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Hero Patterns', 'portfolio-wp' ); ?></td>
					<td>2</td>
					<td>3</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Portfolio Patterns', 'portfolio-wp' ); ?></td>
					<td>3</td>
					<td>6</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Case Study Patterns', 'portfolio-wp' ); ?></td>
					<td>1</td>
					<td>3</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'About Content Patterns', 'portfolio-wp' ); ?></td>
					<td>2</td>
					<td>4</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Testimonial Patterns', 'portfolio-wp' ); ?></td>
					<td>2</td>
					<td>6</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Contact Patterns', 'portfolio-wp' ); ?></td>
					<td>2</td>
					<td>4</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Awards / Recognition Patterns', 'portfolio-wp' ); ?></td>
					<td>1</td>
					<td>3</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Social Media Link Patterns', 'portfolio-wp' ); ?></td>
					<td>2</td>
					<td>4</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Newsletter Signup Patterns', 'portfolio-wp' ); ?></td>
					<td>1</td>
					<td>2</td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Full Page Patterns', 'portfolio-wp' ); ?></td>
					<td>5</td>
					<td>13</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<div class="wp-block-button has-custom-width wp-block-button__width-100 has-normal-font-size">
							<a href="<?php echo esc_url( 'https://portfoliowp.com/pricing/' ); ?>" target="_blank" class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Buy Pro, Get More', 'portfolio-wp' ); ?></a>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<?php } ?>

</div>
