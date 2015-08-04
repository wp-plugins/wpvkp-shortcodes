<?php
add_action( 'admin_menu', 'wpvkp_shortcodes_register_menu_page' );

function wpvkp_shortcodes_register_menu_page(){
    add_menu_page( 'WPVKP Shortcodes', 'Shortcodes', 'manage_options', 'wpvkp-shortcodes', 'wpvkp_shortcodes_menu_page', 'dashicons-schedule' );
}

function wpvkp_shortcodes_menu_page() { ?>
  <div class="wrap">
  <h2><?php echo __('WPVKP Shortcodes','wpvkp-shortcodes'); ?></h2>
<div class="menu">
  <a href="http://wpvkp.com/"><?php echo __('Visit My WordPress Blog','wpvkp-shortcodes'); ?></a>
</div>
      <div class="widget-liquid-left">
            <h3><?php echo __('Shortcodes features','wpvkp-shortcodes'); ?></h3>
            <ul>
                <li><?php echo __('Amazing shortcodes','wpvkp-shortcodes'); ?></li>
                <li><?php echo __('Power of CSS3 transitions','wpvkp-shortcodes'); ?></li>
                <li><?php echo __('Powerful shortcodes customization','wpvkp-shortcodes'); ?></li>
                <li><?php echo __('SEO Optimized','wpvkp-shortcodes'); ?></li>
                <li><?php echo __('Documented','wpvkp-shortcodes'); ?></li>
            </ul>
          <h3><?php echo __('Connet With WPVKP - WordPress Community Support', 'wpvkp-shortcodes'); ?></h3>
                    <a title="Facebook" href="https://www.facebook.com/wpvkp" target="_blank">
                    <span class="facebook"><?php echo __('Facebook', 'wpvkp-shortcodes'); ?></span>
                    </a>
                    <?php echo __(' | ', 'wpvkp-shortcodes'); ?>
                    <a title="Twitter" href="https://twitter.com/wpvkp" target="_blank">
                    <span class="twitter"><?php echo __('Twitter','wpvkp-shortcodes'); ?></span>
                    </a>
                    <?php echo __(' | ', 'wpvkp-shortcodes'); ?>
                    <a title="Google Plus" href="https://plus.google.com/+VivekKumarPoddar/" target="_blank">
                    <span class="google"><?php echo __('Google Plus','wpvkp-shortcodes'); ?></span>
                    </a>
                    <?php echo __(' | ', 'wpvkp-shortcodes'); ?>
                    <a title="WPVKP Themes" href="http:/wpvkp.com" target="_blank">
                    <span class="website"><?php echo __('Website','wpvkp-shortcodes'); ?></span>
                    </a>
        </div>

<div style="display: block;float: left;width: 100%;">
    <div style="padding:0 15px 15px 15px; margin-top:15px; border:1px solid #dedede; background:#fff;">
    <h3><?php echo __('How To Use WPVKP Shortcode Plugin','wpvkp-shortcodes'); ?></h3>
     <p><?php echo __('Its preety easy. Lets say you want to add a button to your post or page. Then you will have to click on the WPVKP Shortcode
        option in your post editor and have to select button and it will automatically add the correct shortcode in your post. It will look something like this.
        <br><br>
        [wpvkp_button size="medium" color="violet modern" style="normal" link="http://wpvkp.com" target="_blank" rel="nofollow"]Preview[/wpvkp_button]
        <br><br>
        Now you can modify the button color by entering grey, violet, blue, black, red, green or orange inside double quotes of color="". Example color="orange".</p>
        You can also switch to modern button style by just entering modern beside the color. Example color="voilet modern".'); ?></p>
        <a class="button-primary" target="_blank" href="http://wpvkp.com/"><?php echo __('Read Detailed Instruction','wpvkp-shortcodes'); ?></a>
     </div>
    </div>
</div>
<?php } ?>
