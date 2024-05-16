<?php get_header() ?>

    <h1>404</h1>
    <p>Page not found</p>
    <div>Sorry, the page your are looking for does not exist.</div>
    <a href="<?php echo get_permalink(get_page_by_path("frontpage")) ?>">Go to frontpage!</a>

<?php get_footer() ?>