<?php

	// Funkcja tworząca custom post type
	function register_diy_post_type() {

		$labels = array(
			'name'               => __( 'Wpisy DIY', 'text-domain' ), // Ogólna nazwa typu postów
			'singular_name'      => __( 'Wpis DIY', 'text-domain' ), // Nazwa dla jednego obiektu tego typu
			'edit_item'          => __( 'Edytuj wpis DIY' ),
            'new_item'           => __( 'Nowy wpis DIY' ),
            'add_new_item'       => 'Dodaj nowy wpis DIY',
            'add_new'            => 'Dodaj nowy wpis DIY'
		);

		$supports = array( 'title', 'thumbnail', 'editor', 'comments', 'post-formats');

		$args = array(
			'labels'              => $labels, // Etykiety dla danego typu postów
			'description'         => __( 'Lista projektów DIY.', 'text-domain' ), // Opis
			'public'              => true, // Kontrola widoczności tego typu postów
			'has_archive'         => false, // Czy dany typ postów ma archiwum
			'rewrite'             => array( 'slug' => 'diy' ), // Slug postów tego typu
			'taxonomies'		  => array( 'kategoria-diy' ),
			'supports'            => $supports,
			'show_in_rest'		  => true,
			'menu_position'       => 5
		);

		register_post_type( 'diy', $args ); // Rejestracja postów o typie diy
	}

	// Podłączenie funkcji w konfiguracji motywu
	add_action( 'init', 'register_diy_post_type' );

?>