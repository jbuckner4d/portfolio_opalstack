<div id="pwp-changelog" class="wp-block-group alignwide is-layout-constrained wp-block-group-is-layout-constrained">

    <h2 class="wp-block-heading alignwide has-pwp-huge-font-size"><?php echo esc_html__( 'Changelog', 'portfolio-wp' ); ?></h2>

    <div class="pwp-admin-container wp-block-group alignwide">

        <?php
        // Get the content of the changelog file
        $changelog_content = file_get_contents( get_template_directory_uri() . "/changelog.txt" );

        // Convert newlines to HTML line breaks
        $changelog_content = nl2br( esc_html( $changelog_content ) );

        // Display the formatted content
        echo wp_kses_post( $changelog_content );
        ?>

    </div>

</div>
