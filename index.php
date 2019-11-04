<?php
/* Template Name: consolution  */
get_header();
?>

  <body>


    <?php
    if( have_rows('page_layout') ):
         // loop through the rows of data
        while ( have_rows('page_layout') ) : the_row();

            if( get_row_layout() == 'header2' ):
              $heading_text1 = get_sub_field('heading_text1');
              $heading_copy1 = get_sub_field('heading_copy1');
              $heading_image1 = get_sub_field('heading_image1');
              $heading_text2 = get_sub_field('heading_text2');
              $heading_copy2 = get_sub_field('heading_copy2');
              $heading_image2 = get_sub_field('heading_image2');
              $service_button = get_sub_field('service_button');
              if( $service_button ):
	               $service_button_url = $service_button['url'];
	               $service_button_title = $service_button['title'];
              ?>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url('<?php echo $heading_image1['url']; ?>');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading"><?php echo $heading_copy1; ?></span>
            <h1 class="mb-4"><?php echo $heading_text1;?></h1>
            <p><a href="<?php echo $service_button_url;?>" class="btn btn-primary px-4 py-3 mt-3"><?php echo $service_button_title;?></a></p>

          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url('<?php echo $heading_image2['url']; ?>');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
          	  <span class="subheading"><?php echo $heading_copy2; ?></span>
              <h1 class="mb-4"><?php echo $heading_text2; ?></h1>
              <p><a href="<?php echo $service_button_url;?>" class="btn btn-primary px-4 py-3 mt-3"><?php echo $service_button_title;?></a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif;?>
    <?php
    elseif( get_row_layout() == 'features' ):
      $feature_heading = get_sub_field('feature_heading');
      $feature_copy = get_sub_field('feature_copy');
      $feature_image = get_sub_field('feature_image');
      $feature_story_title = get_sub_field('feature_story_title');
      $feature_story_copy = get_sub_field('feature_story_copy');
      $contact_us_btn = get_sub_field('contact_us_btn');
      if( $contact_us_btn ):
         $contact_us_btn_url = $contact_us_btn['url'];
         $contact_us_btn_title = $contact_us_btn['title'];
    ?>
		<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate">
							<div class="img" style="background-image: url('<?php echo $feature_image['url']; ?>'); border"></div>
							<div class="text">
								<h3><?php echo $feature_story_title;?></h3>
								<p><?php echo $feature_story_copy;?></p>
								<!-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p> -->
								<p><a href="<?php echo $contact_us_btn_url; ?>" class="btn btn-primary py-3 px-4"><?php echo $contact_us_btn_title; ?></a></p>
              <?php endif;?>
							</div>
						</div>
					</div>
					<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
          	<h2 class="mb-4"><?php echo $feature_heading;?></h2>
						<p><?php echo $feature_copy;?></p>
            <?php if( have_rows('main_features') ):?>
            <div class="row mt-5">
                <?php while( have_rows('main_features') ): the_row();
                $main_feature_icon = get_sub_field('main_feature_icon');
                $main_feature_title = get_sub_field('main_feature_title');
                $main_feature_copy = get_sub_field('main_feature_copy');

                ?>

							  <div class="col-lg-6">
								  <div class="services text-center">
								    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="<?php echo $main_feature_icon;?>"></span></div>
									  <div class="text media-body">
										  <h3><?php echo $main_feature_title;?></h3>
										  <p><?php echo $main_feature_copy;?></p>
									  </div>
								  </div>
							  </div>
                <?php endwhile;?>
            </div>
            <?php endif;?>
					</div>
				</div>
			</div>
		</section>

    <?php
      elseif( get_row_layout() == 'report' ):
        $report_heading = get_sub_field('report_heading');
        $report_image = get_sub_field('report_image');
        $project_comp = get_sub_field('project_comp');
        $project_comp_value = get_sub_field('project_comp_value');
        $satisfied_custo = get_sub_field('satisfied_custo');
        $satisfied_custo_value = get_sub_field('satisfied_custo_value');
        $awwards = get_sub_field('awwards');
        $awwards_value = get_sub_field('awwards_value');
        $experience = get_sub_field('experience');
        $experience_value = get_sub_field('experience_value');

    ?>
		<section class="ftco-intro ftco-no-pb img" style="background-image: url('<?php echo $report_image['url']; ?>');">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0"><?php echo $report_heading;?></h2>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="wrapper">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="<?php echo $project_comp_value;?>">0</strong>
		                <span><?php echo $project_comp;?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="<?php echo $satisfied_custo_value;?>">0</strong>
		                <span><?php echo $satisfied_custo;?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="<?php echo $awwards_value;?>">0</strong>
		                <span><?php echo $awwards;?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="<?php echo $experience_value;?>">0</strong>
		                <span><?php echo $experience;?></span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <?php
        elseif( get_row_layout() == 'services' ):
          $service_title = get_sub_field('service_title');
          $service_copy = get_sub_field('service_copy');

     ?>
    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><?php echo $service_title; ?></h2>
            <p><?php echo $service_copy; ?></p>
          </div>
        </div>
        <?php if( have_rows('main_services') ): ?>
        <div class="row no-gutters">
        <?php  while( have_rows('main_services') ): the_row();
            $main_services_title = get_sub_field('main_services_title');
            $main_services_copy = get_sub_field('main_services_copy');
            $main_services_icon = get_sub_field('main_services_icon');
          ?>

					<div class="col-lg-4 d-flex" >
						<div class="services-2 noborder-left text-center ftco-animate" >
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="<?php echo $main_services_icon;?>"></span></div>
							<div class="text media-body">
								<h3><?php echo $main_services_title; ?></h3>
								<p><?php echo $main_services_copy; ?></p>
							</div>
						</div>
					</div>
        <?php endwhile;?>
      	</div>
        <?php endif;?>
			</div>
		</section>

    <?php elseif( get_row_layout() == 'guidance' ):
      $guidance_title = get_sub_field('guidance_title');
      $guidance_bg_image = get_sub_field('guidance_bg_image');
      $request_quote_btn = get_sub_field('request_quote_btn');
      if( $request_quote_btn ):
         $request_quote_btn_url = $request_quote_btn['url'];
         $request_quote_btn_title = $request_quote_btn['title'];
    ?>
		<section class="ftco-intro ftco-no-pb img" style="background-image: url('<?php echo $guidance_bg_image['url']; ?>');">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0"><?php echo $guidance_title; ?></h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="<?php echo $request_quote_btn_url ;?>" class="btn btn-white py-3 px-4"><?php echo $request_quote_btn_title ;?></a></p>
          <?php endif;?>
          </div>
        </div>
    	</div>
    </section>

    <?php
      elseif ( get_row_layout() == 'projects'):
        $project_heading = get_sub_field('project_heading');
        $project_copy = get_sub_field('project_copy');
    ?>
		<section class="ftco-section ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row no-gutters justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4"><?php echo $project_heading;?></h2>
            <p><?php echo $project_copy;?></p>
            <p></p>
          </div>
        </div>

        <?php
         $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'fields' => 'ids',
    	    'post_type'   => 'Projects',
          'order' => 'ASC',
          'paged' => get_query_var('paged'),
          'posts_per_page'   => 8
        );
        $the_query = new WP_Query( $args );
        $posts_ids = $the_query->posts;
        $author_id = $post->post_author;
        ?>
        <?php if ( $the_query->have_posts() ) :?>
        <div class="row no-gutters">
          <?php foreach ($posts_ids as $posts_id) {
          $project_copy_text = get_field('project_copy_text');
          ?>
    			<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url('<?php echo get_the_post_thumbnail_url($posts_id); ?>');">
    					<div class="overlay"></div>
    					<a href="<?php echo get_post_permalink($posts_id) ;?>" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="<?php echo get_post_permalink($posts_id) ;?>"><?php echo get_the_title($posts_id); ?></a></h3>
	    					<span><?php echo $project_copy_text; ?></span>
	    				</div>
    				</div>
  				</div>

        <?php }?>
    		</div>
      <?php endif;?>
			</div>
		</section>

    <?php elseif( get_row_layout() == 'request_quote' ):
      $request_quote_heading = get_sub_field('request_quote_heading');
      $request_quote_copy = get_sub_field('request_quote_copy');
      $request_quote_bg_image = get_sub_field('request_quote_bg_image');
    ?>
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url('<?php echo $request_quote_bg_image['url']; ?>');" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4"><?php echo $request_quote_heading; ?></h2>
		            <p><?php echo $request_quote_copy; ?></p>
		          </div>
		          <form action="#" class="appointment-form ftco-animate">
		    				<?php echo do_shortcode('[contact-form-7 id="208" title="new form"]'); ?>
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>

    <?php

    $args = array(
      'fields' => 'ids',
	    'post_type'   => 'post',
      'posts_per_page'   => 3
    );
    $the_query = new WP_Query( $args );
    $posts_ids = $the_query->posts;
    $author_id = $post->post_author;
    ?>
    <?php
     elseif( get_row_layout() == 'recent_blogs' ):
        $recent_blog_heading = get_sub_field('recent_blog_heading');
        $recent_blog_copy = get_sub_field('recent_blog_copy');

      ?>
		<!-- Display Post Here -->

  		<section class="ftco-section bg-light">
  			<div class="container">
          <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
              <h2 class="mb-4"><span><?php echo $recent_blog_heading;?></span></h2>
              <p><?php echo $recent_blog_copy;?></p>
            </div>
          </div>

          <?php

          if ( $the_query->have_posts() ) :
          ?>
  				<div class="row">
            <?php foreach ($posts_ids as $posts_id) {
              $read_more = get_sub_field('read_more');
              $blog_copy = get_sub_field('blog_copy');
              //$content = get_the_excerpt($posts_id);
               //while( $the_query->have_posts() ) : $the_query->the_post() ?>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a href="<?php echo get_post_permalink($posts_id) ;?>" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_the_post_thumbnail_url($posts_id); ?>');">
  								<div class="meta-date text-center p-2">
                    <span class="day"><?php echo get_the_date( 'd', $posts_id ); ?></span>
                    <span class="mos"><?php echo get_the_date( 'M', $posts_id ); ?></span>
                    <span class="yr"><?php echo get_the_date( 'Y', $posts_id ); ?></span>
                  </div>
                </a>
                <div class="text bg-white p-4">
                  <h3 class="heading"><a href="<?php echo get_post_permalink($posts_id) ;?>"><?php echo get_the_title($posts_id); ?></a></h3>
                  <p><?php echo substr($blog_copy,0,116); ?></p>
                  <div class="d-flex align-items-center mt-4">
  	                <p class="mb-0"><a href="<?php echo get_post_permalink($posts_id) ;?>" class="btn btn-primary"><?php echo $read_more ;?> <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <?php //endif;?>
  	                <p class="ml-auto mb-0">
  	                	<a href="#" class="mr-2"><?php echo get_the_author_meta('display_name',$author_id); ?></a>
  	                	<a href="#" class="meta-chat"><span class="icon-chat"></span><?php echo get_comments_number($posts_id); ?></a>
  	                </p>
                  </div>
                </div>
              </div>
            </div>
          <?php// endwhile; ?>



        <?php }// endwhile;?>
          </div>
        <?php //endif; ?>
        <?php endif;?>
  			</div>
      </section>

  <?php
   // elseif( get_row_layout() == 'recent_blogs' ):
   //    $recent_blog_heading = get_sub_field('recent_blog_heading');
   //    $recent_blog_copy = get_sub_field('recent_blog_copy');

    ?>
		<!-- <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span><?php //echo $recent_blog_heading;?></span></h2>
            <p><?php //echo $recent_blog_copy;?></p>
          </div>
        </div> -->

        <?php// if( have_rows('blogs') ): ?>
				<!-- <div class="row"> -->
          <?php
          // while( have_rows('blogs') ): the_row();
          //   $blog_image = get_sub_field('blog_image');
          //   $blog_title = get_sub_field('blog_title');
          //   $blog_copy = get_sub_field('blog_copy');
          //   $blog_date = get_sub_field('blog_date');
          //   $blog_month = get_sub_field('blog_month');
          //   $blog_year = get_sub_field('blog_year');
          //   $blog_admin = get_sub_field('blog_admin');
          //   $blog_no = get_sub_field('blog_no');
          //   $blog_icon = get_sub_field('blog_icon');
          //   $read_more_link = get_sub_field('read_more_link');
          //   if( $read_more_link ):
          //      $read_more_link_url = $read_more_link['url'];
          //      $read_more_link_title = $read_more_link['title'];
          ?>
          <!-- <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php //echo $blog_image['url']; ?>');">
								<div class="meta-date text-center p-2">
                  <span class="day"><?php //echo $blog_date; ?></span>
                  <span class="mos"><?php// echo $blog_month; ?></span>
                  <span class="yr"><?php //echo $blog_year; ?></span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?php //echo $blog_title; ?></a></h3>
                <p><?php// echo $blog_copy; ?></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="<?php //echo $read_more_link_url ;?>" class="btn btn-primary"><?php //echo $read_more_link_title ;?> <span class="ion-ios-arrow-round-forward"></span></a></p>
                <?php //endif;?> -->
	                <!-- <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2"><?php //echo $blog_admin; ?></a>
	                	<a href="#" class="meta-chat"><span class="<?php //echo $blog_icon; ?>"></span><?php //echo $blog_no; ?></a>
	                </p>
                </div>
              </div>
            </div>
          </div> -->
        <?php// endwhile;?>
        <!-- </div> -->
      <?php //endif;?>
			<!-- </div> -->
		</section>


  <?php elseif( get_row_layout() == 'clients' ):
    $clients_heading = get_sub_field('clients_heading');
    $clients_copy = get_sub_field('clients_copy');
    ?>
		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><?php echo $clients_heading; ?></h2>
            <p><?php echo $clients_copy; ?></p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <?php if( have_rows('our_clients') ): ?>
            <div class="carousel-testimony owl-carousel">
              <?php while( have_rows('our_clients') ): the_row();
                $client_image = get_sub_field('client_image');
                $client_name = get_sub_field('client_name');
                $client_prof = get_sub_field('client_prof');
                $client_copy = get_sub_field('client_copy');
                $client_quote_icon = get_sub_field('client_quote_icon');
              ?>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url('<?php echo $client_image['url']; ?>')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="<?php echo $client_quote_icon; ?>"></i>
                    </span>
                    <p><?php echo $client_copy; ?></p>
                    <p class="name"><?php echo $client_name; ?></p>
                    <span class="position"><?php echo $client_prof; ?></span>
                  </div>
                </div>
              </div>
            <?php endwhile;?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <?php
    endif;
    endwhile;
    endif;
    ?>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>



<?php get_footer();?>
