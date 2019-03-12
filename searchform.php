<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="assistive-text"><?php _e( 'Search', 'rosa' ); ?></label>
    <div>
      <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search...', 'rosa' ); ?>" />
      <i class="fa fa-search" id="search-icon" aria-hidden="true"></i>
    </div>
</form>