<?php

	// Funkcja tworząca custom post type
	function register_przepisy_post_type() {

		$labels = array(
			'name'               => __( 'Przepisy kulinarne', 'text-domain' ), // Ogólna nazwa typu postów
			'singular_name'      => __( 'Przepis kulinarny', 'text-domain' ), // Nazwa dla jednego obiektu tego typu
			'edit_item'          => __( 'Edytuj przepis kulinarny' ),
            'new_item'           => __( 'Nowy przepis kulinarny' ),
            'add_new_item'       => 'Dodaj nowy przepis kulinarny',
            'add_new'            => 'Dodaj nowy przepis kulinarny'
		);

		$supports = array( 'title', 'thumbnail', 'editor', 'comments', 'post-formats');

		$args = array(
			'labels'              => $labels, // Etykiety dla danego typu postów
			'description'         => __( 'Lista przepisów.', 'text-domain' ), // Opis
			'public'              => true, // Kontrola widoczności tego typu postów
			'has_archive'         => false, // Czy dany typ postów ma archiwum
			'rewrite'             => array( 'slug' => 'przepis' ), // Slug postów tego typu
			'taxonomies'		  => array( 'kategoria-przepisu' ),
			'supports'            => $supports,
			'show_in_rest'		  => true,
			'menu_position'       => 5
		);

		register_post_type( 'przepis', $args ); // Rejestracja postów o typie przepis
	}

	// Podłączenie funkcji w konfiguracji motywu
	add_action( 'init', 'register_przepisy_post_type' );

?>