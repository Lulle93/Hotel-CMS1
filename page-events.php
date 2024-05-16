<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        
        <?php 
            $date_and_time = get_field("date_and_time");
        ?>

        
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    All the events take place in the lobby and our visitors have access free of charge.
                </div>
                <div class="col-12 pt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date and time</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $date_and_time; ?></td>
                                <td>Black sun stay</td>
                            </tr>
                            <tr>
                                <td><?php echo $date_and_time; ?></td>
                                <td>Oysters and bubbles</td>
                            </tr>
                            <tr>
                                <td><?php echo $date_and_time; ?></td>
                                <td>Jutland coffee table</td>
                            </tr>
                            <tr>
                                <td><?php echo $date_and_time; ?></td>
                                <td>Easter breakfast</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>