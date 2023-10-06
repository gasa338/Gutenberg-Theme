<?php
$bg_image = get_field( 'hero_breadcrumb_bg_image' );
$page_obj = get_queried_object();
?>
<!--==============================
Breadcrumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?php echo $bg_image['url']; ?>">
	<!-- bg animated image/ -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h1 class="breadcumb-title"> <?php echo $page_obj->post_title; ?></h1>
                    <?php echo yoast_breadcrumb( '<ul class="breadcumb-menu">', '</ul>', ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
