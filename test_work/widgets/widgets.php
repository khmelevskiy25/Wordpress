<?php

// register Services_Widget widget
function register_services_widget() {
    register_widget( 'Services_Widget' );
}
add_action( 'widgets_init', 'register_services_widget' );

// register Social_Widget widget
function register_social_widget() {
    register_widget( 'Social_Widget' );
}
add_action( 'widgets_init', 'register_social_widget' );