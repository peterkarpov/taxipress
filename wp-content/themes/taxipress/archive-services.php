<?php get_header(); ?>

    <!-- Content -->
    <div class="wrap">
        <section class="content">

            <h2><?php _e('Services','aletheme');?></h2>

            <div class="breadcrumb">
            <?php get_breadcrumbs(); ?>
            </div>

            <div class="text">
                <p>
                    <?php echo ale_get_option('service_description'); ?>
                </p>
            </div>

            <!-- # # # # # # # # -->
            <div class="tiles cf">

                <?php

                $custom_query = new WP_Query( array( 'post_type' => 'services','posts_per_page'=>'-1' ) );

                $i=0;
                if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();

                $i++;

                    if($i==3 or $i==4 or $i==7 or $i==8){?>

                        <div class="col-6 cf">
                            <div class="col-6 img">
                                <?php echo get_the_post_thumbnail(null, 'services-mini'); ?>
                            </div>
                            <div class="col-6 txt left">
                                <h3><?php echo the_title(); ?></h3>
                                <p>
                                    <?php echo the_excerpt(); ?>
                                </p>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="col-6 cf">
                            <div class="col-6 txt right">
                                <h3><?php echo the_title(); ?></h3>
                                <p>
                                    <?php echo the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="col-6 img">
                                <?php echo get_the_post_thumbnail(null, 'services-mini'); ?>
                            </div>
                        </div>

                    <?php } ?>

                <?php endwhile; endif; ?>

                <?php  /* global $query_string;
                        query_posts($query_string.'$posts_per_page=-1'); ?>
                <?php   if (have_posts()) : while (have_posts()) : the_posts(); ?>
                            <div class="col-6 airport cf">
                                <div class="col-6 img">
                                    <img src="css/images/services/1.jpg" alt=""/>
                                </div>
                                <div class="col-6 txt left">
                                    <h3><?php echo the_title(); ?></h3>
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                    <?php endwhile; endif; */ ?>



                <!--div class="col-6 airport cf">
                    <div class="col-6 img">
                        <img src="css/images/services/1.jpg" alt=""/>
                    </div>
                    <div class="col-6 txt left">
                        <h3>Airport Meeting</h3>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                </div>
                <div class="col-6 retro cf">
                    <div class="col-6 img">
                        <img src="css/images/services/2.jpg" alt=""/>
                    </div>
                    <div class="col-6 txt left">
                        <h3>Retro Cab</h3>
                        <p>
                            It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking
                            at its layout.
                        </p>
                    </div>
                </div>
                <div class="col-6 vip cf">
                    <div class="col-6 txt right">
                        <h3>VIP Taxi</h3>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="col-6 img">
                        <img src="css/images/services/3.jpg" alt=""/>
                    </div>
                </div>
                <div class="col-6 truck cf">
                    <div class="col-6 txt right">
                        <h3>Truck</h3>
                        <p>
                            It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="col-6 img">
                        <img src="css/images/services/4.jpg" alt=""/>
                    </div>
                </div-->
            </div>


        </section>
    </div>

<?php get_footer(); ?>