<?php
/*
Template Name: Blank Page
*/
?>

<!DOCTYPE html>
<html>
<style>
    html {
        display: none;
    }
</style>
<body>
<section>
    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>
</section>
</body>
</html>