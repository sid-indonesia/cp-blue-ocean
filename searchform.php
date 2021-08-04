<!-- Search Form Area Start -->
<div class="search-form-area animated">
    <form class="form-inline my-lg-0" action="<?php echo home_url( '/' ); ?>">
    <input type="text" class="form-control" id="s" name="s" type="text" placeholder="<?php echo __('Search'); ?>" aria-label="Search">
        <button type="submit" class="d-none">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/search-icon.png"
                alt="Search"></button>
    </form>
</div>
<!-- Search btn -->
<div class="search-button">
    <a href="#" id="search-btn">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/search-icon.png" alt="Search"></a>
</div>