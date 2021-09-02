<?php

/**
 * city_table--state | choices: CA, CO, IL, TX
 * city_table--background-image | image
 */


get_children(array(
    'post_parent' => $post->ID,
    'orderby' => 'menu_order',
    'order' => 'ASC'
));

$childrenPages = get_children()

?>
<section class="get-other-children-in-table relative">
    <div class="relative">
        <h2 class="color-secondary text-center">State Table Shortcode headline</h2>
        <div class="get-other-children-in-table--container m-r-20">
            <ul class="row">
                <?php foreach ($childrenPages as $page) : ?>
                    <li class="col-xs-6 col-sm-4 col-md-3 m-t-10 m-b-5"><a class="color-secondary" href="<?= $page->guid ?>"><?= $page->post_title ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,202.7C384,213,480,171,576,149.3C672,128,768,128,864,138.7C960,149,1056,171,1152,197.3C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>