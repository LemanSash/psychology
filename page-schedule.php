<?php
/**
 * Template Name: Шаблон Расписание
 */

get_header();
?>

<body>
    <section class="add-page">
        <div class="schedule">
            <div class="days-top">
                <div class="day">
                    <h2>Понедельник</h2>
                    <div class="lessons">
                        <?php if(get_field('sched_rep_mon')): $i = 0; ?>
                            <?php while(has_sub_field('sched_rep_mon')) : $i++; ?>
                                <div class="time-box">                               
                                    <div class="time"><?php the_sub_field('sched_rep_mon_time'); ?></div>
                                    <div class="title"><?php the_sub_field('sched_rep_mon_title'); ?></div>
                                    <div class="name"><?php the_sub_field('sched_rep_mon_name'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>                       
                </div>

                <div class="day">
                    <h2>Вторник</h2>
                    <div class="lessons">
                        <?php if(get_field('sched_rep_tue')): $i = 0; ?>
                            <?php while(has_sub_field('sched_rep_tue')) : $i++; ?>
                                <div class="time-box">
                                    <div class="time"><?php the_sub_field('sched_rep_tue_time'); ?></div>
                                    <div class="title"><?php the_sub_field('sched_rep_tue_title'); ?></div>
                                    <div class="name"><?php the_sub_field('sched_rep_tue_name'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="day">
                    <h2>Среда</h2>
                    <div class="lessons">
                        <?php if(get_field('sched_rep_wed')): $i = 0; ?>
                            <?php while(has_sub_field('sched_rep_wed')) : $i++; ?>
                                <div class="time-box">
                                    <div class="time"><?php the_sub_field('sched_rep_wed_time'); ?></div>
                                    <div class="title"><?php the_sub_field('sched_rep_wed_title'); ?></div>
                                    <div class="name"><?php the_sub_field('sched_rep_wed_name'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                </div>

                <div class="day">
                    <h2>Четверг</h2>
                    <div class="lessons">
                        <?php if(get_field('sched_rep_thu')): $i = 0; ?>
                            <?php while(has_sub_field('sched_rep_thu')) : $i++; ?>
                                <div class="time-box">
                                    <div class="time"><?php the_sub_field('sched_rep_thu_time'); ?></div>
                                    <div class="title"><?php the_sub_field('sched_rep_thu_title'); ?></div>
                                    <div class="name"><?php the_sub_field('sched_rep_thu_name'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>

            <div class="days-bottom">
                <div class="day">
                    <h2>Пятница</h2>
                    <div class="lessons">
                        <?php if(get_field('sched_rep_fri')): $i = 0; ?>
                            <?php while(has_sub_field('sched_rep_fri')) : $i++; ?>
                                <div class="time-box">
                                    <div class="time"><?php the_sub_field('sched_rep_fri_time'); ?></div>
                                    <div class="title"><?php the_sub_field('sched_rep_fri_title'); ?></div>
                                    <div class="name"><?php the_sub_field('sched_rep_fri_name'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                </div>

                <div class="day">
                    <h2>Суббота</h2>
                    <div class="lessons">
                        <?php if(get_field('sched_rep_sat')): $i = 0; ?>
                            <?php while(has_sub_field('sched_rep_sat')) : $i++; ?>
                                <div class="time-box">
                                    <div class="time"><?php the_sub_field('sched_rep_sat_time'); ?></div>
                                    <div class="title"><?php the_sub_field('sched_rep_sat_title'); ?></div>
                                    <div class="name"><?php the_sub_field('sched_rep_sat_name'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="day">
                    <h2>Воскресенье</h2>
                    <div class="lessons">
                        <?php if(get_field('sched_rep_sun')): $i = 0; ?>
                            <?php while(has_sub_field('sched_rep_sun')) : $i++; ?>
                                <div class="time-box">
                                    <div class="time"><?php the_sub_field('sched_rep_sun_time'); ?></div>
                                    <div class="title"><?php the_sub_field('sched_rep_sun_title'); ?></div>
                                    <div class="name"><?php the_sub_field('sched_rep_sun_name'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php

get_footer();