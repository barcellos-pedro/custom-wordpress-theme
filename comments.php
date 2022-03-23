<!--  Display Comments -->

<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">
            <h2 class="comment-reply-title">
                <?= have_comments() ? comments_number() : '' ?>
            </h2><!-- .comments-title -->
        </div><!-- comments-header -->
        <div class="comments-inner">
            <?php
                // Get Post comments
                wp_list_comments([
                    'avatar_size' => 50,
                    'style' => 'div'
                ]);
            ?>  
        </div><!-- .comments-inner -->
    </div><!-- comments -->

    <hr aria-hidden="true">
    
    <?php
        // If current Post allow comments, show comment form
        if(comments_open()) {
            comment_form([
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h2>'
            ]);
        }
    ?>
</div>