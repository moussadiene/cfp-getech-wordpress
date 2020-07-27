<?php

	/**
	 *	All functions, actions and filters to customize the picture for Thumbnails
	 */

	// article picture
	function gardener_article_picture( $picture, $post, $cols, $media )
	{
		global $tempo_layout;

		$thumbnail = get_post( get_post_thumbnail_id( $post ) );

		$media = array(
			// 0, width: 1600px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-full' ),

			// 1, width: 1050px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-classic' ),

			// 2, width: 991px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-991' ),

			// 3, width: 785px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-grid' ),

			// 4, width: 691px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-tablet' ),

			// 5, width: 515px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-gallery' ),

			// 6, width: 480px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-480' ),

			// 7, width: 420px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-small' ),

			// 8, width: 315px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-315' )
	    );

		if( $cols == 1 ){

			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1661px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1321px)"	srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1261px)"	srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1161px)"	srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 881px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 780px)"		srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';


			    $picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
			    $picture .= '</picture>';
			}

			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1161px)"    srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 881px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 780px)"		srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

			    $picture .= '<img src="' . esc_url( $media[ 0 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
			    $picture .= '</picture>';
			}
		}

		// 2 columns
		else if( $cols == 2 ){

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 1661px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1465px)"	srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1261px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1178px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 971px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 678px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 5 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 1559px)"	srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1178px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 971px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 678px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 3 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}
		}

		// 3 columns
		else{

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){

				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 1681px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1261px)"	srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1201px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1178px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 971px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 678px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 7 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1655px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1460px)"	srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1201px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1178px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 971px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 678px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

			    $picture .= '<img src="' . esc_url( $media[ 5 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
			    $picture .= '</picture>';
			}
		}

		return $picture;
	}

	add_filter( 'tempo_article_picture', 'gardener_article_picture', 10, 4 );


	// single post or page picture
	function gardener_single_picture( $picture, $post, $media )
	{
		global $tempo_layout;

		$thumbnail = get_post( get_post_thumbnail_id( $post ) );

		$media = array(
			// 0, width: 1600px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-full' ),

			// 1, width: 1050px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-classic' ),

			// 2, width: 991px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-991' ),

			// 3, width: 785px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-grid' ),

			// 4, width: 691px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-tablet' ),

			// 5, width: 515px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-gallery' ),

			// 6, width: 480px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-480' ),

			// 7, width: 420px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-small' ),

			// 8, width: 315px
			wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-315' )
		);

		if( $tempo_layout -> layout !== 'full' ){
			$picture  = '<picture>';
			$picture .= '<source media="(min-width: 1661px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1321px)"	srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1261px)"	srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1161px)"	srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 881px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 780px)"		srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

			$picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
			$picture .= '</picture>';
		}

		else{
			$picture  = '<picture>';
			$picture .= '<source media="(min-width: 1161px)"    srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 881px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 780px)"		srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

			$picture .= '<img src="' . esc_url( $media[ 0 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '"/>';
			$picture .= '</picture>';
		}

		return $picture;
	}

	add_filter( 'tempo_single_picture', 'gardener_single_picture', 10, 3 );

	// single post or page picture
	function gardener_portfolio_picture( $picture, $post, $cols, $media )
	{
		global $tempo_layout;

		$thumbnail = get_post( get_post_thumbnail_id( $post ) );

		$media = array(

			// 0, width: 785px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-portfolio' ),

			// 1, width: 691px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-portfolio-tablet' ),

			// 2, width: 480px
	        wp_get_attachment_image_src( $thumbnail -> ID , 'tempo-portfolio-480' )
	    );

		// 2 columns
		if( $cols == 2 ){

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 2 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1200px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}
		}

		// 3 columns
		else{

			// content with sidebar
			if( $tempo_layout -> layout !== 'full' ){

				$picture  = '<picture>';
		        $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 521px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
		        $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

		        $picture .= '<img src="' . esc_url( $media[ 2 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
		        $picture .= '</picture>';
			}

			// full width content
			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 992px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
			    $picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';

			    $picture .= '<img src="' . esc_url( $media[ 2 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="effect-scale"/>';
			    $picture .= '</picture>';
			}
		}

		return $picture;
	}

	add_filter( 'tempo_portfolio_picture', 'gardener_portfolio_picture', 10, 4 );

	// gallery picture
	function gardener_gallery_picture( $picture, $thumbnail, $cols, $media )
	{
		global $tempo_layout;

		$media = array(
			// 0, width: 1600px
			wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-full' ),

			// 1, width: 1050px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-classic' ),

			// 2, width: 991px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-991' ),

			// 3, width: 785px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-grid' ),

			// 4, width: 691px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-tablet' ),

			// 5, width: 515px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-gallery' ),

			// 6, width: 480px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-480' ),

			// 7, width: 420px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-small' ),

			// 8, width: 315px
	        wp_get_attachment_image_src( $thumbnail -> ID, 'tempo-315' )
	    );

		// one column
		if( $cols == 1 ){
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1661px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1321px)"	srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1261px)"	srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1161px)"	srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 881px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 780px)"		srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';


				$picture .= '<img src="' . esc_url( $media[ 1 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}

			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1161px)"    srcset="' . esc_url( $media[ 0 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 1 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 881px)"		srcset="' . esc_url( $media[ 2 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 780px)"		srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 644px)"		srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 605px)"		srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 541px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 381px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 0 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}
		}

		// 2 columns
		else if( $cols == 2 ){
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1661px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1461px)"	srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1261px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1181px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 971px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 4 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}

			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1560px)"	srcset="' . esc_url( $media[ 3 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1181px)"	srcset="' . esc_url( $media[ 4 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1101px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 971px)"		srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 768px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 3 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}
		}

		// 3 columns
		else if( $cols == 3 ){
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1690px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 7 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}

			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 1651px)"	srcset="' . esc_url( $media[ 5 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1460px)"	srcset="' . esc_url( $media[ 6 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1120px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 5 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}
		}

		// 4 columns
		else if( $cols == 4 ){
			if( $tempo_layout -> layout !== 'full' ){
				$picture  = '<picture>';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 8 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}
			else{
				$picture  = '<picture>';
				$picture .= '<source media="(min-width:	1491px)"	srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
				$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

				$picture .= '<img src="' . esc_url( $media[ 7 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
				$picture .= '</picture>';
			}
		}

		// 5, ... 9 columns
		else {
			$picture  = '<picture>';
			$picture .= '<source media="(min-width: 481px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 316px)"		srcset="' . esc_url( $media[ 7 ][ 0 ] ) . '">';
			$picture .= '<source media="(min-width: 1px)"		srcset="' . esc_url( $media[ 8 ][ 0 ] ) . '">';

			$picture .= '<img src="' . esc_url( $media[ 8 ][ 0 ] ) . '" alt="' . esc_attr( get_the_title( $thumbnail ) ) . '"/>';
			$picture .= '</picture>';
		}

		return $picture;
	}

	add_filter( 'tempo_gallery_picture', 'gardener_gallery_picture', 10, 4 );
?>
