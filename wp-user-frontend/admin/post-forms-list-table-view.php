<div class="wrap">
    <h2>
        <?php
            _e( 'Post Forms', 'wpuf' );

            if ( current_user_can( wpuf_admin_role() ) ):
            ?>
                <a href="<?php echo $add_new_page_url; ?>" id="new-wpuf-post-form" class="page-title-action add-form"><?php _e( 'Add Form', 'wpuf' ); ?></a>
            <?php
            endif;
        ?>
    </h2>


    <div class="list-table-wrap wpuf-post-form-wrap">
        <div class="list-table-inner wpuf-post-form-wrap-inner">

            <form method="get">
                <input type="hidden" name="page" value="wpuf-post-forms">
                <?php
                    $wpuf_post_form = new WPUF_Admin_Post_Forms_List_Table();
                    $wpuf_post_form->prepare_items();
                    $wpuf_post_form->search_box( __( 'Search Forms', 'wpuf' ), 'wpuf-post-form-search' );

                    if ( current_user_can( wpuf_admin_role() ) ) {
                        $wpuf_post_form->views();
                    }

                    $wpuf_post_form->display();
                ?>
            </form>

        </div><!-- .list-table-inner -->
    </div><!-- .list-table-wrap -->

    <div class="wpuf-footer-help">
        <span class="wpuf-footer-help-content">
            <span class="dashicons dashicons-editor-help"></span>
            <?php printf( __( 'Learn more about <a href="%s" target="_blank">Frontend Posting</a>', 'wpuf' ), 'https://wedevs.com/docs/wp-user-frontend-pro/posting-forms/?utm_source=wpuf-footer-help&utm_medium=text-link&utm_campaign=learn-more-frontend-posting' ); ?>
        </span>
    </div>
</div>
