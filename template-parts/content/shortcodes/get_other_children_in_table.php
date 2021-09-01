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
    <img class="" src="<?= get_field('get_other_children_in_table--background-image')['url'] ?>" alt="">
    <div class="absolute-top-left full-cover">
        <h2 class="color-white text-center">State Table Shortcode headline</h2>
        <div class="get-other-children-in-table--container m-r-20">
            <ul class="row">
                <?php foreach ($childrenPages as $page) : ?>
                    <li class="col-xs-6 col-sm-4 col-md-3 m-t-10 m-b-10"><a class="color-white" href="<?= $page->guid ?>"><?= $page->post_title ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>