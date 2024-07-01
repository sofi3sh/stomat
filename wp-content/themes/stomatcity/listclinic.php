/**
* Template Name: listclinic
*/

CONTENT LISTCLINIC

<?php
$posts = get_posts( array(
        'numberposts' => -1,
        'category_name' => 'premium_clinic',
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'clinic',
    'suppress_filters' => true
))
?>