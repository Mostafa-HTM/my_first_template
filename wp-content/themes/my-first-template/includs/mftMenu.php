<div id="mftMenu">
        <div class="mftMenu">
            <?php
                $args = [
                    'taxonomy' => 'downloads',
                    'hide_empty' => true,
                    'parent' => 0,
                ];
                $terms = get_terms($args);
            ?>
            <ul>
                <?php foreach($terms as $term) { ?>
                <li><a href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name ?></a>
                <?php
                $child_args = [
                    'taxonomy' => 'downloads',
                    'hide-empty' => true,
                    'parent' => $term->term_id,
                ];
                $child_terms = get_terms($child_args);
                ?>
                    <ul>
                        <?php foreach ($child_terms as $child_term) { ?>
                        <li>
                            <?php 
                            $rand_args = [
                                'post_type' => 'download',
                                'orderby'   => 'rand',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'downloads',
                                        'field'    => 'term_id',
                                        'terms'    => $child_term->term_id,
                                    ]
                                ]
                            ];
                            $rand_posts = get_posts ($rand_args);
                            $thumbnail = get_the_post_thumbnail( $rand_posts[0] );
                            ?>                         
                            <a href="<?php echo get_term_link( $child_term->term_id ); ?>" class="image-link"><?php echo $thumbnail; ?></a>
                            <a href="<?php echo get_term_link( $child_term->term_id ); ?>" class="title"><?php echo $child_term->name; ?> </a>    
                        </li>
                        <?php }; ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>