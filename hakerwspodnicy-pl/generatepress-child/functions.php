<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


require_once 'functions/photoblog.php';
require_once 'functions/renowacja.php';
require_once 'functions/przepisy.php';
require_once 'functions/diy.php';

add_action( 'after_setup_theme', 'init_my_theme' );
function init_my_theme() {
    // … inne inicjalizcaje
    add_theme_support( 'post-formats', array( 'aside', 'gallery',
                              'link', 'video', 'image', 'quote' ) );
}