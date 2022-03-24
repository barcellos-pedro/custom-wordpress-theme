<!-- Required and Fallback file -->
<!-- In this case our fallback will display the posts listing -->

<?= get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    <?php
        // Wordpress Loop
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }
    ?>

    <!-- Pagination -->
    <?= the_posts_pagination(); ?>
</article>


<?= get_footer(); ?>