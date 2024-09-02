<?php get_header(); ?>

    <div class="services-section">
        <h2> <?php the_field('services_title') ?> </h2>
        <div class="service-item">
            <div class="icon-and-title">
                <img src="<?php the_field("service_1_icon") ?>" alt="">
                <h3> <?php the_field('service_1_title') ?> </h3>
            </div>
            <div class="service-content">
                <h4><?php the_field('service_1_heading_1') ?></h4>
                <p><?php the_field('service_1_description_1') ?></p>
                <h4><?php the_field('service_1_heading_2') ?></h4>
                <p><?php the_field('service_1_description_2') ?></p>
                <h4><?php the_field('service_1_heading_3') ?></h4>
                <p><?php the_field('service_1_description_2') ?></p>
            </div>
        </div>
        <div class="service-item">
            <div class="icon-and-title">
                <img src="<?php the_field("service_2_icon") ?>" alt="">
                <h3><?php the_field('service_2_title') ?></h3>
            </div>
            <div class="service-content">
                <h4><?php the_field('service_2_heading_1') ?></h4>
                <p><?php the_field('service_2_description_1') ?></p>
                <h4><?php the_field('service_2_heading_2') ?></h4>
                <p><?php the_field('service_2_description_2') ?></p>
                <h4><?php the_field('service_2_heading_3') ?></h4>
                <p><?php the_field('service_2_description_3') ?></p>
                <h4><?php the_field('service_2_heading_4') ?></h4>
                <p><?php the_field('service_2_description_4') ?></p>
            </div>
        </div>
        <div class="service-item">
            <div class="icon-and-title">
                <img src="<?php the_field("service_3_icon") ?>" alt="">
                <h3><?php the_field('service_3_title') ?></h3>
            </div>
            <div class="service-content">
                <h4><?php the_field('service_3_heading_1') ?></h4>
                <p><?php the_field('service_3_description_1') ?></p>
                <h4><?php the_field('service_3_heading_2') ?></h4>
                <p><?php the_field('service_3_description_2') ?></p>
                <h4><?php the_field('service_3_heading_3') ?></h4>
                <p><?php the_field('service_3_description_3') ?></p>
            </div>
        </div>


    </div>
    <div class="contact-container">
        <button class="contact-btn"><?php the_field('contact_button') ?></button>
    </div>
    <section class="about-us">
        <div class="text-content">
            <h1><?php the_field('about_us_title') ?></h1>
            <p><?php the_field('about_us_content') ?></p>
            <h3><?php the_field('core_values_heading') ?></h3>
            <ul>
                <li><?php the_field('core_value_1') ?></li>
                <li><?php the_field('core_value_2') ?></li>
                <li><?php the_field('core_value_3') ?></li>
            </ul>
            <button class="contact-btn"><?php the_field('contact_button') ?></button>
        </div>
        <div class="image-content">
            <img src="<?php the_field("about_us_image") ?>" alt="">
        </div>
    </section>
    <section class="icon-grid">
        <div class="icon-grid-inner">
            <div class="icon-item">
                <img src="<?php the_field("achievement_1_icon") ?>" alt="">
                <p><?php the_field("achievement_1_text") ?></p>
            </div>
            <div class="icon-item">
                <img src="<?php the_field("achievement_2_icon") ?>" alt="">
                <p><?php the_field("achievement_2_text") ?></p>
            </div>
            <div class="icon-item">
                <img src="<?php the_field("achievement_3_icon") ?>" alt="">
                <p><?php the_field("achievement_3_text") ?></p>
            </div>
            <div class="icon-item">
                <img src="<?php the_field("achievement_4_icon") ?>" alt="">
                <p><?php the_field("achievement_4_text") ?></p>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <section class="testimonial-container">
            <h2><?php the_field("testimonial_header") ?></h2>

            <div class="client-testimonials">
                <div class="testimonial active">
                    <img src="<?php the_field("testimonial_1_client_logo") ?>" alt="">
                    <h3><?php the_field("testimonial_1_author") ?></h3>
                    <p><?php the_field("testimonial_1_author_position") ?></p>
                    <p class="testimonial-text"><?php the_field("testimonial_1_text") ?></p>
                </div>
                <div class="testimonial">
                    <img src="<?php the_field("testimonial_2_client_logo") ?>" alt="">
                    <h3><?php the_field("testimonial_2_author") ?></h3>
                    <p><?php the_field("testimonial_2_author_position") ?></p>
                    <p class="testimonial-text"><?php the_field("testimonial_2_text") ?></p>
                </div>
                <div class="testimonial">
                    <img src="<?php the_field("testimonial_3_client_logo") ?>" alt="">
                    <h3><?php the_field("testimonial_3_author") ?></h3>
                    <p><?php the_field("testimonial_3_author_position") ?></p>
                    <p class="testimonial-text"><?php the_field("testimonial_3_text_1") ?></p>
                    <p class="testimonial-text"><?php the_field("testimonial_3_text_2") ?></p>
                </div>
            </div>
            <div class="testimonial-nav">
                <button class="prev">&lt;</button>
                <button class="next">&gt;</button>
            </div>
        </section>
    </div>


<?php get_footer(); ?>