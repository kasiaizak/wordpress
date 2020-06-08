<?php

	// Funkcja tworząca custom post type
	function register_photoblog_post_type() {

		$labels = array(
			'name'               => __( 'Photoblog' ), // Ogólna nazwa typu postów
			'singular_name'      => __( 'Wpis photobloga' ), // Nazwa dla jednego obiektu tego typu
            'edit_item'          => __( 'Edytuj wpis photobloga' ),
            'new_item'           => __( 'Nowy wpis photobloga' ),
            'add_new_item'       => 'Dodaj nowy wpis photobloga',
            'add_new'            => 'Dodaj nowy wpis photobloga',
		);

		$supports = array( 'title', 'thumbnail', 'editor', 'comments', 'post-formats');

		$args = array(
			'labels'              => $labels, // Etykiety dla danego typu postów
			'description'         => __( 'Lista albumów.' ), // Opis
			'public'              => true, // Kontrola widoczności tego typu postów
			'has_archive'         => false, // Czy dany typ postów ma archiwum
			'rewrite'             => array( 'slug' => 'photoblog' ), // Slug postów tego typu,
			'taxonomies'		  => array( 'kategoria-photobloga' ),
			'supports'            => $supports,
			'show_in_rest'		  => true,
			'menu_position'       => 5
		);

		register_post_type( 'photoblog', $args ); // Rejestracja postów o typie photoblog
	}

	// Podłączenie funkcji w konfiguracji motywu
	add_action( 'init', 'register_photoblog_post_type' );

?>