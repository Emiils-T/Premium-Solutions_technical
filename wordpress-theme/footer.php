<footer>
    <div class="container-fluid">
        <section class="footer-section">
            <div class="manager-image">
                <div class="contact-image">
                    <img src="<?php the_field("footer_image") ?>" alt="">
                </div>
            </div>
            <div class="form">
                <h2> <span style="color:#13B1E7">
                        <?php the_field("contact_form_header_part_1") ?></span> <?php the_field("contact_form_header_part_2") ?>
                </h2>
                <p><?php the_field("contact_form_text") ?></p>
                <form>
                    <div class="form-row">
                        <input type="text" placeholder="<?php the_field("form_name_placeholder") ?>*">
                        <input type="text" placeholder="<?php the_field("form_phone_number_placeholder") ?>*">
                    </div>
                    <div class="form-row">
                        <input type="email" placeholder="<?php the_field("form_email_placeholder") ?>*">
                        <input type="text" placeholder="<?php the_field("form_company_name_placeholder") ?>*">
                    </div>
                    <textarea class="contact-text-input"
                              placeholder="<?php the_field("form_text_area_placeholder") ?>*"></textarea>
                    <div class="form-checkbox">
                        <input type="checkbox" id="consent">
                        <label for="consent"><?php the_field("form_consent_text") ?></label>
                    </div>
                    <div>
                        <p class="privacy-policy"><?php the_field("privacy_policy_text") ?></p>
                    </div>
                    <button class="form-button" type="submit"><?php the_field("send_button") ?></button>
                </form>

                <div class="contact-info">
                    <p><?php the_field("contact_number_1") ?></p>
                    <p><?php the_field("contact_number_2") ?></p>
                    <p><?php the_field("contact_number_3") ?></p>
                    <p>
                        <?php the_field("contact_email_text") ?>
                        <a style=" text-decoration: none;" href="mailto:<?php the_field("contact_email_part_2") ?>">
                            <span style="color:#99B56F"><?php the_field("contact_email_part_2") ?></span>
                        </a>
                    </p>


                </div>
            </div>
        </section>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

<script>
    document.querySelector('.hamburger-button').addEventListener('click', function () {
        document.querySelector('.hamburger-dropdown-menu').classList.toggle('active');
        document.querySelector('.menu-overlay').classList.toggle('active');
    });
    document.querySelector('.close-button').addEventListener('click', function () {
        document.querySelector('.hamburger-dropdown-menu').classList.remove('active');
        document.querySelector('.menu-overlay').classList.remove('active');
    });

    document.querySelector('.menu-overlay').addEventListener('click', function () {
        document.querySelector('.hamburger-dropdown-menu').classList.remove('active');
        this.classList.remove('active');
    });
</script>
</body>
</html>