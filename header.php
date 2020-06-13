Fix the mobile "ADD" button so it points to add a new venue.
In theme editor, DirectoryEngine: header.php (mobile/header.php) 
<!-- Menu Bottom -->
<!--<a class="<?php //echo $post_place_active; ?>" href="<?php //echo et_get_page_link('post-place') ?>"><i class="fa fa-plus"></i><?php //_e('Submit', ET_DOMAIN)?></a> -->
<a class="<?php echo $post_place_active; ?>" href="https://website.com/post-places/"><i class="fa fa-plus"></i><?php _e('Submit', ET_DOMAIN)?></a>
