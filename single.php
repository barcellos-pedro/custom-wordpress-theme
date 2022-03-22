<!--  Display single Post -->

<?= get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                
                // Modularizing our app
                // Get from the folder = {template-parts} file = {content-article}
                get_template_part('template-parts/content', 'article');
            }
        }
    ?>
</article>


<?= get_footer(); ?>