<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header') ?>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <?php if (is_category()) : ?>
                            <h1>Category</h1>
                        <?php else : ?>
                            <h1>Tag</h1>
                        <?php endif; ?>
                        <span class="subheading"><?php wp_title(''); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- Post preview-->
                        <div class="post-preview">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="post-title">
                                    <?php the_title(); ?>
                                </h2>
                                <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <?php the_author(); ?>
                                on <?php the_time(get_option('date_format')); ?>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    <?php endwhile; ?>

                    <!-- Pager-->
                    <div class="d-flex mb-4 justify-content-around">
                        <?php
                        $link = get_previous_posts_link('← Newer Posts');
                        if ($link) {
                            $link = str_replace('<a', '<a class="btn btn-primary text-uppercase float-left"', $link);
                            echo $link;
                        } ?>


                        <?php
                        $link = get_next_posts_link('Older Posts →');
                        if ($link) {
                            $link = str_replace('<a', '<a class="btn btn-primary text-uppercase float-right"', $link);
                            echo $link;
                        } ?>

                    </div>
                <?php else : ?>
                    <p>記事が見つかりませんでした！</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_template_part('includes/footer') ?>

    <?php get_footer(); ?>
</body>

</html>