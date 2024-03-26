<?php
/**
 * Template Name: Шаблон О нас
 */

get_header();
?>

<section class="add-page">
    <h1><?php the_field('about_title'); ?></h1>
    <p><?php the_field('about_text'); ?></p>
</section>


<?php

get_footer();