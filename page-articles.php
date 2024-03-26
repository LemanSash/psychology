<?php
/**
 * Template Name: Шаблон Статьи
 */

get_header();
?>

<body>
    <section class="add-page">
        <div class="articles-container">
            <?php if(get_field('articles_rep')): $i = 0; ?>
                <?php while(has_sub_field('articles_rep')) : $i++; ?>
                    <div class="article">
                        <h2><?php the_sub_field('articles_rep_title'); ?></h2>
                        <img src="<?php the_sub_field('articles_rep_img'); ?>" alt="Психология стресса">
                        <p><?php the_sub_field('articles_rep_text'); ?></p>
                        <a href="<?php the_sub_field('articles_rep_link'); ?>" class="read-more">Читать далее</a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</body>


<?php

get_footer();