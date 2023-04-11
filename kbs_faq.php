<?php
/**
 * Template Name:  KbS FAQ
 * 
 */



$context         = Timber::context();
$timber_post     = Timber::get_post();
$context['post'] = $timber_post;
$current_user_id = get_current_user_id();
$new_user = get_userdata( $current_user_id  );

$context['title'] = get_field('title');
$context['topics'] = get_field('topic');

//?methoids 

Timber::render( array( 'page-' . $timber_post->post_name . '.twig',  'template-faq.twig' ), $context );
