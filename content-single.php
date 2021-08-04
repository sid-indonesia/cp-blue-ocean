<!-- Post Header   -->
<div class="post-header">
    <div class="mb-3">
        <div class="avatar">
            <?php echo get_avatar( $id_or_email, $size, $default, $alt, $args); ?>
                     <a class="align-middle text-dark" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
            <small class="align-middle text-muted">· Last Update <?php the_date(); ?></small>
        </div>
    </div>

    <h2 class="card-title mb-3 post-title font-weight-bold"><?php the_title(); ?></h2>
    <hr>
    <!-- Tag -->
    <div>
  
        <?php
    $post_tags = get_the_tags();
 
    if ( $post_tags ) {
        foreach( $post_tags as $tag ) { ?>
            <span class="badge badge-primary text-white"># <a class="text-white" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></span>
        <?php 
        }
    }
        ?>
    </div>
    <!-- End Tag -->
</div>
<!-- End Post Header   -->

<div class="post-content my-5">
    <?php the_content(); ?>
    <div class="sharethis-inline-share-buttons"></div>
</div>
