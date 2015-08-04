<?php
/*************************************************
ACCORDION
*************************************************/

function wpvkp_shortcodes_accordion_content($atts, $content = null) {

    /* Return Toggles */
    return '<div class="wpvkp-shortcode wpvkp-shortcode-accordion">'.do_shortcode($content).'</div>';

}
add_shortcode('wpvkp_accordion_content', 'wpvkp_shortcodes_accordion_content');

function wpvkp_shortcodes_accordion($atts, $content = null) {

    /* Set up variables */
    extract(shortcode_atts(array(
        'heading' => '',
        'onload' => 'closed'
    ), $atts));
    if($onload == "open") { $active_class = "wpvkp-shortcode-toggle-active"; } else { $active_class = ""; }

    return '<div class="wpvkp-shortcode wpvkp-shortcode-toggle '.$active_class.'"><h3 class="wpvkp-shortcode toggle-heading">'.$icon_code.$heading.'</h3><div class="wpvkp-shortcode toggle-content"><p>'.do_shortcode($content).'</p></div></div>';

}
add_shortcode('wpvkp_accordion', 'wpvkp_shortcodes_accordion');

/**************************************************
 BUTTONS
 *************************************************/
function wpvkp_shortcodes_button( $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'size' => '',
            'color' => '',
            'style' => '',
            'link' => '',
            'target' => '',
            'rel' => '',
        ), $atts )
    );

    // Code
return '<a class="wpvkp-button '. $size . ' '. $color .' '. $style .'" href="'. $link .'" target="'. $target .'" rel="'. $rel .'">'.$content.'</a>';
}
add_shortcode( 'wpvkp_button', 'wpvkp_shortcodes_button' );

/**************************************************
 NOTICE BOX
 *************************************************/
function wpvkp_shortcodes_notice( $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'color' => ''
        ), $atts )
    );

    // Code
return '<div class="wpvkp-notice '. $color .'">'.$content.'</div>';
}
add_shortcode( 'wpvkp_notice', 'wpvkp_shortcodes_notice' );

/*************************************************
COLUMNS
*************************************************/
function wpvkp_shortcodes_columns($atts, $content = null) {
    /* Return Tabs */
    $content = str_replace('<br />', '', $content);
    return '<div class="wpvkp-columns">'.do_shortcode($content).'</div>';

}
add_shortcode('wpvkp_columns', 'wpvkp_shortcodes_columns');

function wpvkp_shortcodes_column( $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'position' => ''
        ), $atts )
    );

    // Code
return '<div class="wpvkp-column '.$position.'">'.$content.'</div>';
}
add_shortcode( 'wpvkp_column', 'wpvkp_shortcodes_column' );

/*************************************************
CLEARFIX
*************************************************/
function wpvkp_shortcodes_clearfix( $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
        ), $atts )
    );

    // Code
return '<div class="wpvkp-clearfix"></div>';
}
add_shortcode( 'wpvkp_clearfix', 'wpvkp_shortcodes_clearfix' );

/*************************************************
DIVIDER
*************************************************/
function wpvkp_shortcodes_divider($atts, $content = null) {

    /* Set up variables */
    extract(shortcode_atts(array(
        'style' => ''
        ), $atts));

    return '<span class="wpvkp-divider '.$style.'"></span>';

}
add_shortcode('wpvkp_divider', 'wpvkp_shortcodes_divider');

/*************************************************
TABS
*************************************************/
/* Tabs content*/
function wpvkp_shortcodes_tabs($atts, $content = null) {
    /* Return Tabs */
    $content = str_replace('<br />', '', $content);
    return '<div class="wpvkp-shortcode-tabs">'.do_shortcode($content).'</div>';

}
add_shortcode('wpvkp_tabs', 'wpvkp_shortcodes_tabs');

/* Tab single */
function wpvkp_shortcodes_tab($atts, $content = null) {

    /* Set up variables */
    extract(shortcode_atts(array(
        'label' => ''
    ), $atts));
        remove_all_filters( 'the_content' );
    return '<div class="wpvkp-shortcode-tabpane">
            <div class="wpvkp-shortcode-tab-label">'.$label.'</div>'
           .$content.'</div>
           ';

}
add_shortcode('wpvkp_tab', 'wpvkp_shortcodes_tab');

/*************************************************
TOGGLE
*************************************************/
function wpvkp_shortcodes_toggle($atts, $content = null) {

    /* Set up variables */
    extract(shortcode_atts(array(
        'heading' => '',
        'onload' => 'closed'
    ), $atts));
    if($onload == "open") { $active_class = "wpvkp-shortcode-toggle-active"; } else { $active_class = ""; }

return '<div class="wpvkp-shortcode-toggle '.$active_class.'"><h3 class="toggle-heading">'.$heading.'</h3><div class="toggle-content"><p>'.do_shortcode($content).'</p></div></div>';

}
add_shortcode('wpvkp_toggle', 'wpvkp_shortcodes_toggle');

/*************************************************
HEADING
*************************************************/
function wpvkp_shortcodes_heading($atts, $content = null) {

    /* Set up variables */
    extract(shortcode_atts(array(
        'alwpvkpn' => '',
        'style' => 'normal'
    ), $atts));

    return '<h2 class="wpvkp-heading '.$style.' '.$alwpvkpn.'">'.$content.'</h2>';

}
add_shortcode('wpvkp_heading', 'wpvkp_shortcodes_heading');

/*************************************************
ICONS
*************************************************/
function wpvkp_shortcodes_icon($atts, $content = null) {

    /* Set up variables */
    extract(shortcode_atts(array(
        'icon' => '',
        'size' => '',
        ), $atts));

    return '<span class="genericon '.$icon.' '.$size.'"></span>';

}
add_shortcode('wpvkp_icon', 'wpvkp_shortcodes_icon');

/*************************************************
GOOGLE MAPS
*************************************************/
function wpvkp_shortcodes_map($atts, $content = null){ ?>

<?php	/* Set up variables */
    extract(shortcode_atts(array(
        'hewpvkpht' => '',
        'width' => '',
        'coordinates' => '',
        'address' => '',
        ), $atts));
        ob_start(); ?>

<div class="wpvkp-map">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;hewpvkpht:<?php echo $hewpvkpht;?>;">
<div id="gmap_canvas" style="hewpvkpht:<?php echo $hewpvkpht;?>; width:<?php echo $width;?>"></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>

<script type="text/javascript">
function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(<?php echo $coordinates;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $coordinates;?>)});infowindow = new google.maps.InfoWindow({content:"<b><?php echo $blog_title = get_bloginfo('name'); ?></b></br><?php echo $address; ?>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode('wpvkp_map', 'wpvkp_shortcodes_map');
