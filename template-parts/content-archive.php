<!-- Display Posts -->

<div class="container">
    <div class="post mb-5">
        <div class="media">
            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="images/thumbs/1.jpg" alt="image">
            <div class="media-body">
                <h3 class="title mb-1">
                    <a href="<?= the_permalink(); ?>">
                        <?= the_title(); ?>
                    </a>
                </h3>
                <div class="meta mb-1">
                    <span class="date">
                        <?= the_date(); ?>
                    </span>
                    <!-- TODO: Minutes to read -->
                    <!-- <span class="time">
                        5 min read
                    </span> -->
                    <span class="comment">
                        <a href="#">
                            <?= comments_number(); ?>
                        </a>
                    </span>
                </div>
                <div class="intro">
                    <?= the_excerpt(); ?>
                </div>
                <a class="more-link" href="<?= the_permalink(); ?>">
                    Read more &rarr;
                </a>
            </div>
        </div>
    </div>
</div>