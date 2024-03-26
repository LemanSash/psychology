<?php
/**
 * Template Name: Шаблон Занятия
 */

get_header();
?>

<body>
    <section class="add-page">
        <div class="lessons-container">
            <?php if(get_field('training_rep')): $i = 0; ?>
                <?php while(has_sub_field('training_rep')) : $i++; ?>
                    <div class="lesson">
                        <h2><?php the_sub_field('training_rep_title'); ?></h2>
                        <img src="<?php the_sub_field('training_rep_img'); ?>" alt="Лекция по психологии">
                        <p><?php the_sub_field('training_rep_text'); ?></p>
                        <a href="<?php the_sub_field('training_rep_link'); ?>" class="read-more">Читать далее</a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</body>

<?php

get_footer();