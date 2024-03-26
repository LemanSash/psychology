<?php
/**
 * Template Name: Шаблон Страница Контактов
 */

get_header();
?>


<section id="contact" class="contact-page">
         <div class="container">
         <h1>Контакты</h1>
            <div class="row">
               <div class="col-sm-12">
               <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A13842e5a012a0a76f5c045d1f76bdb08bd0292ea91256b112abc27b3a94ab230&amp;source=constructor" width="100%" height="631" frameborder="0"></iframe>
                  <div class="contact-card">
                     <h2><?php the_field('section6_title'); ?></h2>
                     <div class="contact-item"><span>Адрес:</span><?php the_field('site_address', 'options'); ?></div>
                     <div class="contact-item"><span>Телефон:</span> <a href="tel:<?php the_field('site_tele', 'options'); ?>"><?php the_field('site_tele', 'options'); ?></a></div>
                     <div class="contact-item"><span>Email:</span> <a href="mailto:<?php the_field('site_email', 'options'); ?>"><?php the_field('site_email', 'options'); ?></a></div>
                     <div class="contact-item"><span>Часы работы:</span><?php the_field('site_worktime', 'options'); ?></div>
                  </div>
               </div>
            </div>
         </div>
      </section>


<?php

get_footer();


