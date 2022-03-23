<!-- Required and Fallback file -->
<!-- In this case our fallback will display the posts listing, just like archive.php -->

<?= get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }
    ?>
</article>


<?= get_footer(); ?>