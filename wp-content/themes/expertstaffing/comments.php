<div id="comments">
    <?php
    $aria_req = ( $req ? " aria-required='true'" : '' );
        if ( comments_open() ) {
            comment_form( array(
                'fields' => array(
                    'author' => '<p class="comment-form-author"><label for="author">' . __( 'Name', 'textdomain' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                                '<input required id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email', 'textdomain' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                                '<input required id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                            
                ),
                'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'textdomain' ) . ' *</label> ' .
                            '<textarea required id="comment" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea></p>',
                'class_submit' => '',
                'comment_notes_before' => '',
                'comment_notes_after' => '',
                'title_reply' => 'Leave a Comment',
            ) );
        }
        
        if ( have_comments() ) :
        global $comments_by_type;
        $comments_by_type = separate_comments( $comments );
        if ( !empty( $comments_by_type['comment'] ) ) :
    ?>

    <section id="comments-list" class="comments">
        <h2 class="comments-title"><?php comments_number(); ?></h2>

        <?php if ( get_comment_pages_count() > 1 ) : ?>
            <nav id="comments-nav-above" class="comments-navigation" role="navigation">
            <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
            </nav>
        <?php endif; ?>

        <ul>
            <?php wp_list_comments( 'type=comment' ); ?>
        </ul>

        <?php if ( get_comment_pages_count() > 1 ) : ?>
            <nav id="comments-nav-below" class="comments-navigation" role="navigation">
            <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
            </nav>
        <?php endif; ?>
    </section>
    <?php
        endif;
        if ( !empty( $comments_by_type['pings'] ) ) :
        $ping_count = count( $comments_by_type['pings'] );
    ?>
    <section id="trackbacks-list" class="comments">
        <h2 class="comments-title"><?php echo '<span class="ping-count">' . esc_html( $ping_count ) . '</span> ' . esc_html( _nx( 'Trackback or Pingback', 'Trackbacks and Pingbacks', $ping_count, 'comments count', 'blankslate' ) ); ?></h2>
        <ul>
            <?php wp_list_comments( 'type=pings&callback=blankslate_custom_pings' ); ?>
        </ul>
    </section>
    <?php
        endif;
        endif;        
    ?>
</div>
