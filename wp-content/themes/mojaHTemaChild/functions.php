<?php 
 function add_homepage_post_type(){
     $labels = array(
         'name' => 'Homepage',
         'singular name' => 'Story',
         'add_new' => 'Add new',
         'add_new_item' => 'Add New Homepage Story',
         'edit' => 'Edit',
         'edit_item' => 'Edit Homepage Story',
         'new_item' => 'New Homepage Story',
         'view' => 'View',
         'view_item' => 'View Homepage Story',
         'search_items' => 'Search Homepage Stories',
         'not_found' => 'No Homepage Stories Found',
         'not_found_in_trash' => 'No Homepage Stories Found in Trash'
         );
         
         $args = array(
         'labels' => $labels,
         'description' => 'Specifies All Homepage stories',
         'public' => true,
         'menu_position' => 2,
         'supports' => array('title','editor','thumbnail','custom-fields'),
         'has_archive' => true
         );
         
         
         register_post_type('homepage',$args);
 }
 
 add_action('init','add_homepage_post_type');



?>