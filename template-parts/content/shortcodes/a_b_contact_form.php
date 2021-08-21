<?php 

$standardContactFormID = get_field('standard_contact_form_id', 'option');
?>


<section class="a-b-test a-b-test--contact-form contact_cta_section contact_form_shortcode_section shortcode_section">
    <h1><?= $standardContactFormID ?></h1>
    <div class="contact_form_cta_container contact_form_shortcode_container">
        <h4 class="contact_form_cta_headline">Take The First Step Towards Recovery</h4>
        <p>Talk to a Intake Coordinator</p>

        <div class="contact_form_cta_form_container contact_form_shortcode_cta_form_container">
            <?php echo do_shortcode("[gravityform id='. $standardContactFormID . ' title='false' description='false']") ?>
        </div>
    </div>
</section>