<?php
/**
 * Template Name: Шаблон Афиша
 */

get_header();
?>

<body>
    <section class="add-page">
        <div class="events-container">
            <?php if(get_field('afisha_rep')): $i = 0; ?>
                <?php while(has_sub_field('afisha_rep')) : $i++; ?>
                    <div class="event">
                        <h2><?php the_sub_field('afisha_rep_title'); ?></h2>
                        <p>Выступает: <?php the_sub_field('afisha_rep_name'); ?></p>
                        <img src="<?php the_sub_field('afisha_rep_img'); ?>" alt="Концерт психологической музыки">
                        <p>Стоимость: <?php the_sub_field('afisha_rep_price'); ?> руб.</p>
                        <p>Дата и время: <?php the_sub_field('afisha_rep_date'); ?></p>
                        <a href="#" class="register">Записаться</a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</body>


<?php

get_footer();