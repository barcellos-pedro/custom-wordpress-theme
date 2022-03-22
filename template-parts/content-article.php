<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date">Published <?= the_date(); ?></span>
            <?php
                // Show Post Tags
                the_tags(
                    'Tags <span class="tag"> <i class="fa fa-tag"></i>',
                    '</span> <span class="tag"> <i class="fa fa-tag"></i>',
                    '</span>'
                );
            ?>
            <span class="comment">
                <a href="#comments">
                    <i class='fa fa-comment'></i>
                    <?= comments_number(); ?>
                </a>
            </span>
        </div>
    </header>

    <?php
        the_content();
    ?>
</div>