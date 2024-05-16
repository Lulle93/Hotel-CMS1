<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?> >
    <header>
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" width="45" height="36" class="d-inline-block align-text-top">
                    <?php bloginfo("name") ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <!-- <?php 
                    wp_nav_menu(
                        array(
                            "theme_location" => "main-menu"
                        ));
                    ?> -->

                    <ul>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path("frontpage")) ?>">Frontpage</a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path("events")) ?>">Events</a>
                        </li>
                        <li>
                            <a href="#">Rooms</a>
                            <ul>
                                <?php 
                                $myRoomsLoop = new WP_Query(array(
                                    "post_type" => "room",
                                    "post_per_page" => -1
                                ));
                                ?>

                                <?php if($myRoomsLoop->have_posts()): ?>
                                    <?php while ($myRoomsLoop->have_posts()): $myRoomsLoop->the_post() ?>

                                        <?php
                                            $title = get_the_title();
                                            $link = get_permalink();
                                        ?>

                                        <li><a href="<?php echo $link ?>"><?php echo $title ?></a></li>


                                    <?php endwhile ?>
                                <?php endif ?> 
                            </ul>
                        </li>
                    </ul>
                    <?php get_search_form() ?>
                </div>
                <form class="d-flex navbar-form navbar-right">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="search.html" class="btn btn-outline-success" type="submit">Search</a>
                </form>
            </div>
        </nav>
    </header>

    <main>