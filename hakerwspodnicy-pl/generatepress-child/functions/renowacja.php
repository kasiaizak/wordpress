<?php

	// Funkcja tworząca custom post type
	function register_renowacja_post_type() {

		$labels = array(
			'name'               => __( 'Renowacja na życzenie', 'text-domain' ), // Ogólna nazwa typu postów
			'singular_name'      => __( 'Projekt RNŻ', 'text-domain' ), // Nazwa dla jednego obiektu tego typu
			'edit_item'          => __( 'Edytuj projekt RNŻ' ),
            'new_item'           => __( 'Nowy projekt RNŻ' ),
            'add_new_item'       => 'Dodaj nowy projekt RNŻ',
            'add_new'            => 'Dodaj nowy projekt RNŻ'
		);

		$supports = array( 'title', 'thumbnail', 'editor', 'comments', 'post-formats' );

		$args = array(
			'labels'              => $labels, // Etykiety dla danego typu postów
			'description'         => __( 'Lista projektów.', 'text-domain' ), // Opis
			'public'              => true, // Kontrola widoczności tego typu postów
			'has_archive'         => false, // Czy dany typ postów ma archiwum
			'rewrite'             => array( 'slug' => 'renowacja' ), // Slug postów tego typu
			'taxonomies'		  => array( 'kategoria-rnz' ),
			'supports'            => $supports,
			'show_in_rest'		  => true,
			'menu_position'       => 5
		);

		register_post_type( 'renowacja', $args ); // Rejestracja postów o typie renowacja
	}

	// Podłączenie funkcji w konfiguracji motywu
	add_action( 'init', 'register_renowacja_post_type' );

?>