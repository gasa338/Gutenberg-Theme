<?php
/** pre init for inner blocks */
add_action( 'acf/init', 'acf_pre_init_blocks' );
function acf_pre_init_blocks(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {

		/** ==============================
		 * Service offering
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'service-offering',
			'title'           => 'Service offering',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/service-offering/service-offering.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/service-offering/service-offering.css',
		) );

		/** ==============================
		 * Service offering
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'why-choose-us',
			'title'           => 'Why choose us',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/why-choose-us/why-choose-us.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/why-choose-us/why-choose-us.css',
		) );

		/** ==============================
		 * Service We Provide
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'service-provide',
			'title'           => 'Service We Provide',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/service-provide/service-provide.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/service-provide/service-provide.css',
		) );

		/** ==============================
		 * Counter area
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'counter-area',
			'title'           => 'Counter Area',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/counter-area/counter-area.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/counter-area/counter-area.css',
		) );

		/** ==============================
		 * Testimonial 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-1',
			'title'           => 'Testimonial 1',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/testimonial-1/testimonial-1.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/testimonial-1/testimonial-1.css',
		) );

		/** ==============================
		 * Pricing plan Area
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'pricing-plan',
			'title'           => 'Pricing area 1',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/pricing-plan/pricing-plan.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/pricing-plan/pricing-plan.css',
		) );

		/** ==============================
		 * Goal area
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'goal-area',
			'title'           => 'Goal Area',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/goal-area/goal-area.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/goal-area/goal-area.css',
		) );

		/** ==============================
		 * Hero Breadcrumb
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-breadcrumb',
			'title'           => 'Hero Breadcrumb',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/hero-breadcrumb/hero-breadcrumb.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/hero-breadcrumb/hero-breadcrumb.css',
		) );
	}
}

/** init blocks with inner blocks */
add_action( 'acf/init', 'acf_init_inner_blocks' );
function acf_init_inner_blocks(): void {

	if ( function_exists( 'acf_register_block_type' ) ) {

		/*  ==== register HERO 1 */
		acf_register_block_type( array(
			'name'            => 'acf/hero-1',
			'title'           => 'Hero 1',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'edit',
			'image'           => get_template_directory_uri() . '/blocks/hero-home-1/Partner werden.png',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/hero-home-1/hero-section.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/hero-home-1/hero-section.css',
		) );


		/** ==============================
		 * feature Area
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'acf/feature-area',
			'title'           => 'Feature area',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'edit',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/feature-area/feature-area.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/feature-area/feature-area.css',
		) );


		/** ==============================
		 * About Area
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'acf/about-area',
			'title'           => 'About area',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/about-area/about-area.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/about-area/about-area.css',
		) );


		/** ==============================
		 * About Area
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'acf/cta-area',
			'title'           => 'CTA area',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/cta-area/cta-area.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/cta-area/cta-area.css',
		) );


		/** ==============================
		 * Parallax
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'acf/parallax',
			'title'           => 'Parallax',
			'description'     => 'A restricted content block.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true
			),
			'render_template' => 'blocks/parallax/parallax.php',
			'enqueue_style'   => get_template_directory_uri() . '/blocks/parallax/parallax.css',
		) );
	}
}