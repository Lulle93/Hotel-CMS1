<?php get_header() ?> 
    <?php if(have_posts()): ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <?php while(have_posts()): the_post(); ?>

                            <?php
                            $title = get_the_title();
                            $link = get_permalink(); 
                            ?>

                            <li><a href="<?php echo $link ?>"><?php echo $title ?></a></li>
                        <?php endwhile ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>Nothing Found</h1>
                    <p>We could not find anything matching your search - please try again</p>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php get_footer() ?>