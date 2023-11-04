<?php
$bg_image = get_field( 'hero_breadcrumb_bg_image' );
$prev_link = get_field( 'hero_breadcrumb_previous_link' );
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
                    <div class="breadcumb-menu">
                        <span>
                            <span>
                                <?php if( $prev_link != '' ): ?>
                                <a href="<?php echo $prev_link['url']; ?>"><?php echo $prev_link['title']; ?></a>
                                <?php else: ?>
                                <a href="/">Početna</a>
                                <?php endif; ?>
                            </span>
                                »
                            <span class="breadcrumb_last" aria-current="page"><?php echo $page_obj->post_title; ?></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
