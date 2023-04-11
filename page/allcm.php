<?php 
add_filter('comment_flood_filter', '__return_false');

function your_theme_slug_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="comment-wrap">
            <div class="comment-img">
                <?php echo get_avatar($comment, $args['avatar_size'], null, null, array('class' => array('img-responsive', 'img-circle'))); ?>
            </div>
        <div class="comment-body">
            <h4 class="comment-author"><?php echo get_comment_author_link(); ?></h4>
            <span class="comment-date"><?php printf(__('%1$s lúc %2$s', 'inithtml'), get_comment_date(), get_comment_time()) ?></span>
            <?php if ($comment->comment_approved == '0') { ?><em><?php _e('Bình luận đang xét duyệt.', 'inithtml'); ?></em><br /><?php } ?>
            <?php comment_text(); ?>
            <span class="comment-reply"> <?php comment_reply_link(array_merge($args, array('reply_text' => __('Trả lời', 'inithtml'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
        </div>
    </div>
<?php }

/**
 * Rich Text Comment
 */
add_filter('comment_form_defaults', 'rich_text_comment_form');
function rich_text_comment_form($args) {
    ob_start();
    wp_editor('', 'comment', array(
        'wpautop' => false,
        'media_buttons' => false,
        'textarea_rows' => '8',
        'dfw' => false,
        'tinymce' => true,
        'quicktags' => false
    ));
    $args['comment_field'] = ob_get_clean();
    return $args;
}