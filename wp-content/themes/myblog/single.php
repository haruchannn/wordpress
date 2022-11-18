<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('includes/header') ?>
    <?php if (have_posts()) :; ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- Page Header-->
            <?php $img_src = get_eyecatch_with_default(); ?>
            <header class="masthead" style="background-image: url('<?php echo $img_src[0] ?>)">
                <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="post-heading">
                                <h1><?php the_title(); ?></h1>
                                <span class="meta">
                                    Posted by
                                    <?php the_author(); ?>
                                    on <?php the_date(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Post Content-->
            <article class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_template_part('includes/footer') ?>
    <?php get_footer(); ?>
</body>

</html>