<?php
/*
Template Name: Content
*/

get_header(); ?>

<?php
    $args_drinks = array( 'post_type' => 'drinks');
    $loop = new WP_Query( $args_drinks );

    $size_tell = "Tall";
    $size_grande = "Grande";
    $size_venti = "Venti";

    $price_tall = "price_tall";
    $price_grande = "price_grande";
    $price_venti = "price_venti";

?>
    <div class="container">
        <div>
            <h1><?php echo get_the_title(); ?></h1>
        </div>

        <table class="w-100">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"><?php echo $size_tell?></th>
                <th scope="col"><?php echo $size_grande?></th>
                <th scope="col"><?php echo $size_venti?></th>
            </tr>
            </thead>

            <tbody>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <tr>

                <th scope="row">
                    <a href="<?php the_permalink() ?>">
                        <?php echo the_title();?>
                    </a>
                </th>

                <td><?php echo the_field($price_tall) ?></td>
                <td><?php echo the_field($price_grande) ?></td>
                <td><?php echo the_field($price_venti) ?></td>
            </tr>
            <?php endwhile; ?>
            </tbody>

        </table>
    </div>

<?php
get_footer();
