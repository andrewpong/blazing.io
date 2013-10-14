<?php

class Theme_Walker_Nav_Menu_Edit extends Walker_Nav_Menu_Edit {
        
    function start_el(&$output, $item, $depth, $args) {
        parent::start_el($output, $item, $depth, $args);
        
        if ( ! class_exists( 'phpQuery') ) {
            require_once (THEME_PLUGINS . '/phpQuery-onefile.php');
        }
        
        $_doc = phpQuery::newDocumentHTML( $output );
        $_li = phpQuery::pq( 'li.menu-item:last' ); 
        
        $menu_item_id = str_replace( 'menu-item-', '', $_li->attr( 'id' ) );

        if( $menu_item_id != $item->ID ) {
            return;
        }
        
        $icon_val = esc_attr( get_post_meta( $menu_item_id, 'menu-item-icon', TRUE ) );
        $icon_color_val = esc_attr( get_post_meta( $menu_item_id, 'menu-item-icon-color', TRUE ) );

        if($icon_val) {
            if($icon_color_val){
                $icon_color_style = ' style="color:'.$icon_color_val.'"';
            } else {
                $icon_color_style = '';
            }
            $icon = '<i class="icon-'.$icon_val.'"'.$icon_color_style.'></i>';
        }else {
            $icon = '';
        }
        if($icon){
            $options = '<span id="edit-menu-item-icon-'.$menu_item_id .'-preview" style="margin-right: 0.3em">'.$icon.'</span> '.
            '<a class="theme-nav-icon-chosen" href="#" data-target="'.$menu_item_id.'">Change Icon</a> '.
            '<a class="theme-nav-icon-remove" href="#" data-target="'.$menu_item_id.'">Remove Icon</a>';
        } else{
            $options = '<span id="edit-menu-item-icon-'.$menu_item_id .'-preview" style="margin-right: 0.3em"></span> '.
            '<a class="theme-nav-icon-chosen" href="#" data-target="'.$menu_item_id.'">Insert Icon</a> '.
            '<a class="theme-nav-icon-remove" style="display:none" href="#" data-target="'.$menu_item_id.'">Remove Icon</a>';
        } 
        $icon_html = '<p class="description description-thin">'.
            '<label for="edit-menu-item-icon-'.$menu_item_id .'">'.
                __( 'Icon (optional)','theme_admin').'<br />'.
                $options.
                '<input type="hidden" id="edit-menu-item-icon-'.$menu_item_id .'" class="widefat edit-menu-item-icon" name="menu-item-icon['.$menu_item_id.']" value="'.esc_attr( $icon_val ).'" />'.
                '<input type="hidden" id="edit-menu-item-icon-color-'.$menu_item_id .'" class="widefat edit-menu-item-icon-color" name="menu-item-icon-color['.$menu_item_id.']" value="'.esc_attr( $icon_color_val ).'" />'.
            '</label>'.
        '</p>';

        $_li->find( '.field-link-target' )->after( $icon_html );
        
        $output = $_doc->html();
    }
}