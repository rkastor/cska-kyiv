<?php
if (PSP_Classes_Tools::$options['psp_api'] == '') {
    PSP_Classes_ObjController::getClass('PSP_Classes_DisplayController')->loadMedia('login');
    PSP_Classes_ObjController::getClass('PSP_Classes_DisplayController')->loadMedia('switchery.min');
    PSP_Classes_ObjController::getClass('PSP_Controllers_Login')->show();
} else {
    wp_enqueue_media();
    ?>
    <div id="psp_settings" class="wrap">
        <h2>SEO Settings page</h2>
        <hr>

        <h2 class="nav-tab-wrapper">
            <a href="##tab1" id="tab1-tab" class="nav-tab"><?php echo __('SEO Settings', _PSP_PLUGIN_NAME_) ?></a>
            <a href="##tab2" id="tab2-tab" class="nav-tab"><?php echo __('Socials Settings', _PSP_PLUGIN_NAME_) ?></a>
            <a href="##tab3" id="tab3-tab" class="nav-tab"><?php echo __('Connections and Trackings', _PSP_PLUGIN_NAME_) ?></a>
            <a href="##tab4" id="tab4-tab" class="nav-tab"><?php echo __('Structured Data', _PSP_PLUGIN_NAME_) ?></a>
            <a href="##tab5" id="tab5-tab" class="nav-tab"><?php echo __('Import SEO', _PSP_PLUGIN_NAME_) ?></a>

        </h2>
        <div id="tab1" class="psptab">
            <div class="sq_left">
                <form name="settings" action="" method="post" enctype="multipart/form-data">
                    <div id="sq_settings_body">

                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php echo __('Enable the SEO Options?', _PSP_PLUGIN_NAME_) ?></span>
                                <span style="color: rgb(238, 238, 238);"><?php echo __('Using Premium SEO Pack, you can easily customize your website and optimize it ON THE GO!', _PSP_PLUGIN_NAME_) ?></span>


                            </legend>
                            <div id="psp_field_options">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('What do you want the SEO Pack to do?', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_title_opt_on" type="radio" class="sq_switch-input" name="psp_title_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_title_opt'), 1); ?> >
                                                <label for="psp_title_opt_on" class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_title_opt_off" type="radio" class="sq_switch-input" name="psp_title_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_title_opt'), 0); ?> >
                                                <label for="psp_title_opt_off" class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Customize Title Meta', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_description_opt_on" type="radio" class="sq_switch-input"
                                                       name="psp_description_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_description_opt'), 1); ?> >
                                                <label for="psp_description_opt_on"
                                                       class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_description_opt_off" type="radio" class="sq_switch-input"
                                                       name="psp_description_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_description_opt'), 0); ?> >
                                                <label for="psp_description_opt_off" class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Customize Description Meta', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_keywords_opt_on" type="radio" class="sq_switch-input"
                                                       name="psp_keywords_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_keywords_opt'), 1); ?> >
                                                <label for="psp_keywords_opt_on"
                                                       class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_keywords_opt_off" type="radio" class="sq_switch-input"
                                                       name="psp_keywords_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_keywords_opt'), 0); ?> >
                                                <label for="psp_keywords_opt_off" class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Customize Keywords Meta', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_canonical_opt_on" type="radio" class="sq_switch-input" name="psp_canonical_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_canonical_opt'), 1); ?> >
                                                <label for="psp_canonical_opt_on" class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_canonical_opt_off" type="radio" class="sq_switch-input" name="psp_canonical_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_canonical_opt'), 0); ?> >
                                                <label for="psp_canonical_opt_off" class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Customize Canonical Link Meta', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_prevnext_opt_on" type="radio" class="sq_switch-input"
                                                       name="psp_prevnext_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_prevnext_opt'), 1); ?> >
                                                <label for="psp_prevnext_opt_on"
                                                       class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_prevnext_opt_off" type="radio" class="sq_switch-input"
                                                       name="psp_prevnext_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_prevnext_opt'), 0); ?> >
                                                <label for="psp_prevnext_opt_off" class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Customize Previous and Next Page Meta', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </fieldset>

                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);">Post Patterns</span>
                                <span>You can use variables to set a pattern for each post type in your website.</span>
                            </legend>
                            <div id="psp_field_options">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Set the custom patterns for each post type', _PSP_PLUGIN_NAME_) ?></span>

                                    <li>
                                        <select id="psp_post_types" name="psp_post_types">
                                            <?php foreach (PSP_Classes_Tools::getOption('patterns') as $pattern => $type) { ?>
                                                <option value="<?php echo $pattern ?>"><?php echo ucfirst(str_replace(array('tax-', '_'), array('', ' '), $pattern)); ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="button" value="+" class="sq_button" title="<?php echo __('Add a post type from your Wordpress website', _PSP_PLUGIN_NAME_) ?>" onclick="jQuery('#psp_add_post_types').toggle();"/>
                                    </li>
                                    <li id="psp_add_post_types" style="display: none">
                                        <span><?php _e('Add Post Type', _PSP_PLUGIN_NAME_) ?></span>
                                        <select id="psp_select_post_types" name="psp_select_post_types">
                                            <option value="" selected="selected"></option>

                                            <?php
                                            $types = get_post_types();
                                            $excludes = array('revision', 'nav_menu_item');
                                            foreach ($types as $pattern => $type) {
                                                if (in_array($type, array_keys(PSP_Classes_Tools::getOption('patterns')))) {
                                                    continue;
                                                } elseif (in_array($type, $excludes)) {
                                                    continue;
                                                }
                                                ?>
                                                <option value="<?php echo $pattern ?>"><?php echo ucfirst(str_replace(array('tax-', '_'), array('', ' '), $pattern)); ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="submit" name="sq_update" style="cursor: pointer" value="<?php _e('Add Post Type', _PSP_PLUGIN_NAME_) ?> &raquo;"/>

                                    </li>
                                    <li>
                                        <?php
                                        foreach (PSP_Classes_Tools::getOption('patterns') as $pattern => $type) {
                                            ?>
                                            <div class="show_hide psp<?php echo $pattern ?>" style="display: none">
                                                <div class="withborder">
                                                    <table style="max-width: 600px;">
                                                        <tr>
                                                            <td><?php echo __('Title', _PSP_PLUGIN_NAME_) ?>:</td>
                                                            <td>
                                                                <input type="text" name="psp_patterns[<?php echo $pattern ?>][title]" value="<?php echo $type['title'] ?>" size="45"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo __('Description', _PSP_PLUGIN_NAME_) ?>:</td>
                                                            <td>
                                                                <input type="text" name="psp_patterns[<?php echo $pattern ?>][description]" value="<?php echo $type['description'] ?>" size="45"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo __('Separator', _PSP_PLUGIN_NAME_) ?>:</td>
                                                            <td>
                                                                <select name="psp_patterns[<?php echo $pattern ?>][sep]">
                                                                    <?php
                                                                    $seps = json_decode(PSP_ALL_SEP, true);

                                                                    foreach ($seps as $sep => $code) {
                                                                        ?>
                                                                        <option value="<?php echo $sep ?>" <?php echo ($type['sep'] == $sep) ? 'selected="selected"' : '' ?>><?php echo $code ?></option><?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php _e('Let Google Index it', _PSP_PLUGIN_NAME_) ?>:</td>
                                                            <td>
                                                                <div class="sq_option_content">
                                                                    <div class="sq_switch">
                                                                        <input id="psp_patterns_noindex_<?php echo $pattern ?>1" type="radio" class="sq_switch-input" name="psp_patterns[<?php echo $pattern ?>][noindex]" value="0" <?php echo(($type['noindex'] == 0) ? "checked" : '') ?> />
                                                                        <label for="psp_patterns_noindex_<?php echo $pattern ?>1" class="sq_switch-label sq_switch-label-off"><?php _e('Yes', _PSP_PLUGIN_NAME_); ?></label>
                                                                        <input id="psp_patterns_noindex_<?php echo $pattern ?>0" type="radio" class="sq_switch-input" name="psp_patterns[<?php echo $pattern ?>][noindex]" value="1" <?php echo(($type['noindex'] == 1) ? "checked" : '') ?> />
                                                                        <label for="psp_patterns_noindex_<?php echo $pattern ?>0" class="sq_switch-label sq_switch-label-on"><?php _e('No', _PSP_PLUGIN_NAME_); ?></label>
                                                                        <span class="sq_switch-selection"></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php _e('Pass Link Juice', _PSP_PLUGIN_NAME_) ?>:</td>
                                                            <td>
                                                                <div class="sq_option_content">
                                                                    <div class="sq_switch">
                                                                        <input id="psp_patterns_nofollow_<?php echo $pattern ?>1" type="radio" class="sq_switch-input" name="psp_patterns[<?php echo $pattern ?>][nofollow]" value="0" <?php echo(($type['nofollow'] == 0) ? "checked" : '') ?> />
                                                                        <label for="psp_patterns_nofollow_<?php echo $pattern ?>1" class="sq_switch-label sq_switch-label-off"><?php _e('Yes', _PSP_PLUGIN_NAME_); ?></label>
                                                                        <input id="psp_patterns_nofollow_<?php echo $pattern ?>0" type="radio" class="sq_switch-input" name="psp_patterns[<?php echo $pattern ?>][nofollow]" value="1" <?php echo(($type['nofollow'] == 1) ? "checked" : '') ?> />
                                                                        <label for="psp_patterns_nofollow_<?php echo $pattern ?>0" class="sq_switch-label sq_switch-label-on"><?php _e('No', _PSP_PLUGIN_NAME_); ?></label>
                                                                        <span class="sq_switch-selection"></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php _e('Do SEO', _PSP_PLUGIN_NAME_) ?>:</td>
                                                            <td>
                                                                <div class="sq_option_content">
                                                                    <?php if (!isset($type['disable'])) {
                                                                        $type['disable'] = 0;
                                                                    } ?>
                                                                    <div class="sq_switch">
                                                                        <input id="psp_patterns_disable_<?php echo $pattern ?>1" type="radio" class="sq_switch-input" name="psp_patterns[<?php echo $pattern ?>][disable]" value="0" <?php echo(($type['disable'] == 0) ? "checked" : '') ?> />
                                                                        <label for="psp_patterns_disable_<?php echo $pattern ?>1" class="sq_switch-label sq_switch-label-off"><?php _e('Yes', _PSP_PLUGIN_NAME_); ?></label>
                                                                        <input id="psp_patterns_disable_<?php echo $pattern ?>0" type="radio" class="sq_switch-input" name="psp_patterns[<?php echo $pattern ?>][disable]" value="1" <?php echo(($type['disable'] == 1) ? "checked" : '') ?> />
                                                                        <label for="psp_patterns_disable_<?php echo $pattern ?>0" class="sq_switch-label sq_switch-label-on"><?php _e('No', _PSP_PLUGIN_NAME_); ?></label>
                                                                        <span class="sq_switch-selection"></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <?php

                                        }
                                        ?>
                                    </li>
                                    <li>
                                        <table style="max-width: 600px;">
                                            <tbody>
                                            <tr>
                                                <td><code>{{date}}</code></td>
                                                <td>Replaced with the date of the post/page</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{title}}</code></td>
                                                <td>Replaced with the title of the post/page</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{page}}</code></td>
                                                <td>Replaced with the current page number (i.e. page 2 of 4)</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{parent_title}}</code></td>
                                                <td>Replaced with the title of the parent page of the current page</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{sitename}}</code></td>
                                                <td>The site’s name</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{sitedesc}}</code></td>
                                                <td>The site’s tagline / description</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{excerpt}}</code></td>
                                                <td>Replaced with the post/page excerpt (or auto-generated if it does not exist)</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{excerpt_only}}</code></td>
                                                <td>Replaced with the post/page excerpt (without auto-generation)</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{tag}}</code></td>
                                                <td>Replaced with the current tag/tags</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{category}}</code></td>
                                                <td>Replaced with the post categories (comma separated)</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{primary_category}}</code></td>
                                                <td>Replaced with the primary category of the post/page</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{category_description}}</code></td>
                                                <td>Replaced with the category description</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{tag_description}}</code></td>
                                                <td>Replaced with the tag description</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{term_description}}</code></td>
                                                <td>Replaced with the term description</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{term_title}}</code></td>
                                                <td>Replaced with the term name</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{searchphrase}}</code></td>
                                                <td>Replaced with the current search phrase</td>
                                            </tr>
                                            <tr>
                                                <td><code>{{sep}}</code></td>
                                                <td>The separator for your title and description elements</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </fieldset>
                        <div id="sq_settings_submit">
                            <input type="hidden" name="action" value="psp_savesettings_seo"/>
                            <input type="hidden" name="psp_nonce" value="<?php echo wp_create_nonce(_PSP_NONCE_ID_); ?>"/>
                            <input type="submit" name="sq_update" style="cursor: pointer" value="<?php _e('Save SEO', _PSP_PLUGIN_NAME_) ?> &raquo;"/>
                        </div>
                    </div>
                </form>
                <div class="sq_settings_backup" style="margin-top:-35px;">
                    <input type="button" class="sq_button" name="sq_backup" value="<?php _e('Backup Settings', _PSP_PLUGIN_NAME_) ?>" id="psp_backup" style="color: rgb(238, 238, 238);">
                    <input type="button" class="sq_button sq_restore" name="sq_restore" value="<?php _e('Restore Settings', _PSP_PLUGIN_NAME_) ?>" id="psp_restore">
                </div>
            </div>
            <div class="sq_right">
                <div class="panel panel-white">
                    <div>
                        <span class="sq_title"><?php echo __('We Need Your Support', _PSP_PLUGIN_NAME_) ?></span>
                        <span style="display: block; margin-top: 10px; font-weight: bold; color: red">This plugin is FREE and we need your positive rating to keep the plugin up to date with all search engine requests.</span>
                        <ul>
                            <li style="font-size: 13px;background-color: #eededa;display: inline-block;height: 69px;margin-top: 83px;text-align: center;">
                                    <span>
                                        <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" target="_blank" style="text-decoration: none;">
                                            <img src="//api.squirrly.co/static/img/5stars.png" style="vertical-align: middle;width: 100%;margin-top: -105px;">
	                                        <span style="font-size: 15px;width: 75%;text-align: center; "><?php echo sprintf(__('Rate us if you like %sPremium SEO Pack', _PSP_PLUGIN_NAME_), '<br />'); ?></span>
                                        </a>
                                    </span>
                            </li>
                            <li class="sq_button">
                                <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" style="background-color: green;text-shadow: none; border: none;" target="_blank"><?php echo __('I Like This Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                            <li class="sq_button">
                                <a href="https://translate.wordpress.org/projects/wp-plugins/premium-seo-pack" target="_blank"><?php echo __('Translate The Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php _e('Recommended Plugins', _PSP_PLUGIN_NAME_); ?></h3>
                    </div>
                    <div class="panel-body f-gray-dark text-left b-b">
                        <h4>Squirrly - SEO Plugin</h4>
                        <span style="display: block; line-height: 20px; font-size: 14px; margin-bottom: 10px;">SEO By Squirrly helps you write content that is SEO friendly and ALSO Human friendly.
                        You’ll get to improve your rankings and significantly more organic traffic.
                        </span>
                        <span style="display: block; line-height: 20px; font-size: 14px; margin-bottom: 10px; margin-left: 5px; font-weight: bold;">
                             - Over 150.000 active users
                        </span>
                        <span style="display: block; line-height: 20px; font-size: 14px; margin-bottom: 10px; margin-left: 5px; font-weight: bold;">
                             - Over 10.000.000 optimized articles
                        </span>
                        <span style="display: block; line-height: 20px; font-size: 14px; margin-bottom: 10px; margin-left: 5px; font-weight: bold;">
                             - Top Rated on Wordpress
                        </span>
                        <span style="display: block; line-height: 20px; font-size: 14px; margin-bottom: 10px; margin-left: 5px; font-weight: bold;">
                             - Best Keyword Research Tool
                        </span>
                        <span style="display: block; line-height: 20px; font-size: 14px; margin-bottom: 10px; margin-left: 5px; font-weight: bold;">
                             - Free Site Audits Every Week
                        </span>
                        <span style="display: block; line-height: 20px; font-size: 14px; margin-bottom: 10px; margin-left: 5px; font-weight: bold;">
                             - Premium Support
                        </span>
                        <a href="https://plugin.squirrly.co" title="Wordpress SEO plugin" target="_blank"><img src="<?php echo _PSP_THEME_URL_ . 'img/squirrly_seo.png' ?>" border="0" alt="" width="320"/></a><img height="0" width="0" src="//sucuri.7eer.net/i/326051/216898/3713" style="position:absolute;visibility:hidden;" border="0"/>
                    </div>
                </div>
                <div class="panel panel-white" style="background-color: darkgreen;color: #fff;height: 290px;">
                    <span class="sq_title">Want to Gain More from Your SEO Experience?</span>
                    <ul style="margin-top: 25px!important;">
                        <li style="font-size: 15px; margin-top: 17px!important;color: #fff;list-style-type: circle;">Get a NEW SEO Audit</li>
                        <li style="font-size: 15px;margin-top: 17px!important; color: #fff;">Find The Best Keywords for Your Articles</li>
                        <li style="font-size: 15px;margin-top: 17px!important;color: #fff;">Optimize your website with a SEO Live Asistant</li>
                    </ul>

                    <div class="sq_button" style="text-align: center;">
                        <a href="https://my.squirrly.co/user/login?token=<?php echo PSP_Classes_Tools::getOption('psp_api') ?>" target="_blank" style="background-color: #fff!important;color: darkgreen;text-shadow: none!important;border: 1px solid darkgreen;margin-top: 28px;">Show Me How</a>
                    </div>
                </div>
            </div>
        </div>
        <!--content tab2-->
        <div id="tab2" class="psptab">
            <div class="sq_left">
                <form name="settings" action="" method="post" enctype="multipart/form-data">
                    <?php
                    $socials = json_decode(json_encode(PSP_Classes_Tools::getOption('socials')));
                    $codes = json_decode(json_encode(PSP_Classes_Tools::getOption('codes')));
                    ?>

                    <div id="sq_settings_body">

                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php _e("Open Graph Option", _PSP_PLUGIN_NAME_) ?></span>
                                <span style="color: rgb(238, 238, 238);"><?php _e("You can enable the Open Graph for your post types", _PSP_PLUGIN_NAME_) ?></span>
                            </legend>
                            <div class="psp_field_options">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Enable the Open Graph?', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_og_opt_on" type="radio" class="sq_switch-input"
                                                       name="psp_og_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_og_opt'), 1); ?> >
                                                <label for="psp_og_opt_on"
                                                       class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_og_opt_off" type="radio" class="sq_switch-input"
                                                       name="psp_og_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_og_opt'), 0); ?> >
                                                <label for="psp_og_opt_off"
                                                       class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Enable Open Graph Metas', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                        <br/>

                                        <table>
                                            <tr>
                                                <td><?php echo __("Facebook App ID", _PSP_PLUGIN_NAME_) ?>:</td>
                                                <td>
                                                    <input type="text" name="psp_socials[fbadminapp]" value="<?php echo $socials->fbadminapp ?>" size="25">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <?php foreach ($socials->fb_admins as $id => $values) { ?>
                                                <tr>
                                                    <td><?php echo __("Facebook Admin", _PSP_PLUGIN_NAME_) ?>:</td>
                                                    <td>
                                                        <input type="text" name="psp_socials[fb_admins][][id]" value="<?php echo(isset($values->id) ? $values->id : $id) ?>" size="25">
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <tr id="psp_facebookadmin" style="display: none">
                                                <td><?php echo __("Facebook Admin", _PSP_PLUGIN_NAME_) ?>:</td>
                                                <td>
                                                    <input type="text" name="psp_socials[fb_admins][][id]" value="" size="25">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <input type="button" value="+" class="sq_button" title="<?php echo __('Add a Facebook Admin ID', _PSP_PLUGIN_NAME_) ?>" onclick="jQuery('#psp_facebookadmin').toggle();"/>
                                                    <?php echo __('Add a Facebook Admin ID', _PSP_PLUGIN_NAME_) ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>

                                </ul>
                            </div>

                        </fieldset>
                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php _e("Twitter Card Option", _PSP_PLUGIN_NAME_) ?></span>
                                <span style="color: rgb(238, 238, 238);"><?php _e("You can enable the Twitter card for your post types", _PSP_PLUGIN_NAME_) ?></span>
                            </legend>
                            <div class="psp_field_options">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Enable the Twitter Card?', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_tw_opt_on" type="radio" class="sq_switch-input"
                                                       name="psp_tw_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_tw_opt'), 1); ?> >
                                                <label for="psp_tw_opt_on"
                                                       class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_tw_opt_off" type="radio" class="sq_switch-input"
                                                       name="psp_tw_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_tw_opt'), 0); ?> >
                                                <label for="psp_tw_opt_off" class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Enable Twitter Card Metas', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span><?php _e('The default card type to use:', _PSP_PLUGIN_NAME_) ?></span>
                                        <select id="twitter_card_type" name="psp_socials[twitter_card_type]">
                                            <option value="summary" <?php echo($socials->twitter_card_type == 'summary' ? 'select="selected"' : '') ?>>Summary</option>
                                            <option value="summary_large_image" <?php echo($socials->twitter_card_type == 'summary_large_image' ? 'selected' : '') ?>>Summary with large image</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>

                        </fieldset>

                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php _e("Google+ Settings", _PSP_PLUGIN_NAME_) ?></span>
                                <span><?php _e("If you have a Google+ page for your business, add that URL here and link it on your Google+ page's about page.", _PSP_PLUGIN_NAME_) ?></span>
                            </legend>
                            <div class="psp_field_options">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Connect your website with Google+', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <table>
                                            <tr>
                                                <td><?php echo __("Google+ publisher URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                                <td>
                                                    <input type="text" name="psp_socials[plus_publisher]" value="<?php echo $socials->plus_publisher ?>" size="45">
                                                </td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </fieldset>


                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php _e("Pinterest Settings", _PSP_PLUGIN_NAME_) ?></span>
                                <span><?php _e("Pinterest uses Open Graph metadata just like Facebook, so be sure to keep the Open Graph checkbox on the Facebook tab checked if you want to optimize your site for Pinterest.", _PSP_PLUGIN_NAME_) ?></span>
                                <span><?php _e("If you have already confirmed your website with Pinterest, you can skip the step below.", _PSP_PLUGIN_NAME_) ?></span>

                            </legend>
                            <div class="psp_field_options">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Confirm Your Website on Pinterest', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <table>
                                            <tr>
                                                <td><?php echo __("Pinterest confirmation code", _PSP_PLUGIN_NAME_) ?>:</td>
                                                <td>
                                                    <input type="text" name="psp_codes[pinterest_verify]" value="<?php echo $codes->pinterest_verify ?>" size="45">
                                                </td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                                <br/><br/>
                                <span><?php echo sprintf(__('Read: %sHow to confirm a website on Pineters%s', _PSP_PLUGIN_NAME_), '<a href="https://help.pinterest.com/en/articles/confirm-your-website#meta_tag" target="_blank">', '</a>'); ?></span>
                                <br/><br/>
                                <span><?php echo sprintf(__('Also Read: %sRich Pins Validator%s', _PSP_PLUGIN_NAME_), '<a href="https://developers.pinterest.com/tools/url-debugger/" target="_blank">', '</a>'); ?></span>
                            </div>


                        </fieldset>

                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php _e("Social Media Accounts", _PSP_PLUGIN_NAME_) ?></span>
                                <span style="color: rgb(238, 238, 238);"><?php _e("Add your Social Media accounts to include them into Json-LD Meta, Facebook Publisher Meta, Google Publisher Meta, Twitter Card and more.", _PSP_PLUGIN_NAME_) ?></span>
                            </legend>

                            <div class="psp_field_options">

                                <table>
                                    <tr>
                                        <td><?php echo __("Facebook URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[facebook_site]" value="<?php echo $socials->facebook_site ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Twitter URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[twitter_site]" value="<?php echo $socials->twitter_site ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Instagram URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[instagram_url]" value="<?php echo $socials->instagram_url ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("LinkedIn URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[linkedin_url]" value="<?php echo $socials->linkedin_url ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("MySpace URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[myspace_url]" value="<?php echo $socials->myspace_url ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Pinterest URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[pinterest_url]" value="<?php echo $socials->pinterest_url ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Youtube URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[youtube_url]" value="<?php echo $socials->youtube_url ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Google+ URL", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_socials[google_plus_url]" value="<?php echo $socials->google_plus_url ?>" size="45">
                                        </td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                        </fieldset>
                        <div id="sq_settings_submit">
                            <input type="hidden" name="action" value="psp_savesettings_social"/>
                            <input type="hidden" name="psp_nonce" value="<?php echo wp_create_nonce(_PSP_NONCE_ID_); ?>"/>
                            <input type="submit" name="sq_update" style="cursor: pointer" value="<?php _e('Save Settings', _PSP_PLUGIN_NAME_) ?> &raquo;"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sq_right">
                <div class="panel panel-white">
                    <div>
                        <span class="sq_title"><?php echo __('We Need Your Support', _PSP_PLUGIN_NAME_) ?></span>
                        <span style="display: block; margin-top: 10px; font-weight: bold; color: red">This plugin is FREE and we need your positive rating to keep the plugin up to date with all search engine requests.</span>
                        <ul>
                            <li style="font-size: 13px;background-color: #eededa;display: inline-block;height: 69px;margin-top: 83px;text-align: center;">
                                    <span>
                                        <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" target="_blank" style="text-decoration: none;">
                                            <img src="//api.squirrly.co/static/img/5stars.png" style="vertical-align: middle;width: 100%;margin-top: -105px;">
	                                        <span style="font-size: 15px;width: 75%;text-align: center; "><?php echo sprintf(__('Rate us if you like %sPremium SEO Pack', _PSP_PLUGIN_NAME_), '<br />'); ?></span>
                                        </a>
                                    </span>
                            </li>
                            <li class="sq_button">
                                <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" style="background-color: green;text-shadow: none; border: none;" target="_blank"><?php echo __('I Like This Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                            <li class="sq_button">
                                <a href="https://translate.wordpress.org/projects/wp-plugins/premium-seo-pack" target="_blank"><?php echo __('Translate The Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="panel panel-white" style="background-color: darkgreen;color: #fff;height: 290px;">
                    <span class="sq_title">Want to Gain More from Your SEO Experience?</span>
                    <ul style="margin-top: 25px!important;">
                        <li style="font-size: 15px; margin-top: 17px!important;color: #fff;list-style-type: circle;">Get a NEW SEO Audit</li>
                        <li style="font-size: 15px;margin-top: 17px!important; color: #fff;">Find The Best Keywords for Your Articles</li>
                        <li style="font-size: 15px;margin-top: 17px!important;color: #fff;">Optimize your website with a SEO Live Asistant</li>
                    </ul>

                    <div class="sq_button" style="text-align: center;">
                        <a href="https://my.squirrly.co/user/login?token=<?php echo PSP_Classes_Tools::getOption('psp_api') ?>" target="_blank" style="background-color: #fff!important;color: darkgreen;text-shadow: none!important;border: 1px solid darkgreen;margin-top: 28px;">Show Me How</a>
                    </div>
                </div>
            </div>
        </div>
        <!--content tab3-->
        <div id="tab3" class="psptab">
            <div class="sq_left">
                <form name="settings" action="" method="post" enctype="multipart/form-data">
                    <?php
                    $codes = json_decode(json_encode(PSP_Classes_Tools::getOption('codes')));
                    ?>

                    <div id="sq_settings_body">

                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php _e("Connections", _PSP_PLUGIN_NAME_) ?></span>
                                <span style="color: rgb(238, 238, 238);"><?php _e("Add verification codes for Google Webmaster Tool, Bing Webmaster Tool, Alexa and Pinterest", _PSP_PLUGIN_NAME_) ?></span>
                            </legend>

                            <div class="psp_field_options">

                                <table>
                                    <tr>
                                        <td><?php echo __("Google Webmaster Code", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_codes[google_wt]" value="<?php echo isset($codes->google_wt) ? $codes->google_wt : '' ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Bing Webmaster Code", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_codes[bing_wt]" value="<?php echo isset($codes->bing_wt) ? $codes->bing_wt : '' ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Pinterest Code", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_codes[pinterest_verify]" value="<?php echo isset($codes->pinterest_verify) ? $codes->pinterest_verify : '' ?>" size="45">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Alexa Code", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_codes[alexa_verify]" value="<?php echo isset($codes->alexa_verify) ? $codes->alexa_verify : '' ?>" size="45">
                                        </td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                        </fieldset>

                        <fieldset style="background-color: rgb(35, 40, 45);">
                            <legend id="psp_enable">
                                <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php _e("Tracking Options", _PSP_PLUGIN_NAME_) ?></span>
                                <span style="color: rgb(238, 238, 238);"><?php _e("Add Google Analytics and Facebook Pixel Tracking Code and start tracking your visits and sales", _PSP_PLUGIN_NAME_) ?></span>
                                <span style="color: rgb(238, 238, 238);"><?php _e("Google Analytics and Facebook Pixel work with the last version of Woocommerce and loads on all your pages with the required tracking options", _PSP_PLUGIN_NAME_) ?></span>
                            </legend>

                            <div class="psp_field_options">

                                <table>
                                    <tr>
                                        <td><?php echo __("Google Analytincs Code", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_codes[google_analytics]" value="<?php echo isset($codes->google_analytics) ? $codes->google_analytics : '' ?>" size="45" placeholder="UA-xxxxxxxxx">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo __("Facebook Pixel Code", _PSP_PLUGIN_NAME_) ?>:</td>
                                        <td>
                                            <input type="text" name="psp_codes[facebook_pixel]" value="<?php echo isset($codes->facebook_pixel) ? $codes->facebook_pixel : '' ?>" size="45">
                                        </td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                        </fieldset>
                        <div id="sq_settings_submit">
                            <input type="hidden" name="action" value="psp_savesettings_tracking"/>
                            <input type="hidden" name="psp_nonce" value="<?php echo wp_create_nonce(_PSP_NONCE_ID_); ?>"/>
                            <input type="submit" name="sq_update" style="cursor: pointer" value="<?php _e('Save Settings', _PSP_PLUGIN_NAME_) ?> &raquo;"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sq_right">
                <div class="panel panel-white">
                    <div>
                        <span class="sq_title"><?php echo __('We Need Your Support', _PSP_PLUGIN_NAME_) ?></span>
                        <span style="display: block; margin-top: 10px; font-weight: bold; color: red">This plugin is FREE and we need your positive rating to keep the plugin up to date with all search engine requests.</span>
                        <ul>
                            <li style="font-size: 13px;background-color: #eededa;display: inline-block;height: 69px;margin-top: 83px;text-align: center;">
                                    <span>
                                        <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" target="_blank" style="text-decoration: none;">
                                            <img src="//api.squirrly.co/static/img/5stars.png" style="vertical-align: middle;width: 100%;margin-top: -105px;">
	                                        <span style="font-size: 15px;width: 75%;text-align: center; "><?php echo sprintf(__('Rate us if you like %sPremium SEO Pack', _PSP_PLUGIN_NAME_), '<br />'); ?></span>
                                        </a>
                                    </span>
                            </li>
                            <li class="sq_button">
                                <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" style="background-color: green;text-shadow: none; border: none;" target="_blank"><?php echo __('I Like This Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                            <li class="sq_button">
                                <a href="https://translate.wordpress.org/projects/wp-plugins/premium-seo-pack" target="_blank"><?php echo __('Translate The Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="panel panel-white" style="background-color: darkgreen;color: #fff;height: 290px;">
                    <span class="sq_title">Want to Gain More from Your SEO Experience?</span>
                    <ul style="margin-top: 25px!important;">
                        <li style="font-size: 15px; margin-top: 17px!important;color: #fff;list-style-type: circle;">Get a NEW SEO Audit</li>
                        <li style="font-size: 15px;margin-top: 17px!important; color: #fff;">Find The Best Keywords for Your Articles</li>
                        <li style="font-size: 15px;margin-top: 17px!important;color: #fff;">Optimize your website with a SEO Live Asistant</li>
                    </ul>

                    <div class="sq_button" style="text-align: center;">
                        <a href="https://my.squirrly.co/user/login?token=<?php echo PSP_Classes_Tools::getOption('psp_api') ?>" target="_blank" style="background-color: #fff!important;color: darkgreen;text-shadow: none!important;border: 1px solid darkgreen;margin-top: 28px;">Show Me How</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab4" class="psptab">
            <?php
            $jsonld = PSP_Classes_Tools::getOption('psp_jsonld');
            $jsonld_type = PSP_Classes_Tools::getOption('psp_jsonld_type');
            ?>
            <div class="sq_left">
                <form name="settings" action="" method="post" enctype="multipart/form-data">

                    <div id="sq_settings_body">
                        <fieldset id="sq_jsonld">
                            <legend>
                                <span class="sq_legend_title"><?php _e('JSON-LD for Semantic SEO', _PSP_PLUGIN_NAME_); ?></span>
                                <span><?php echo __('Premium SEO Pack will automatically add the JSON-LD Structured Data in your site.', _PSP_PLUGIN_NAME_) ?></span>
                                <span><?php echo sprintf(__('%sJSON-LD\'s Big Day at Google%s', _PSP_PLUGIN_NAME_), '<a href="http://www.seoskeptic.com/json-ld-big-day-at-google/" target="_blank">', '</a>'); ?></span>
                                <span><?php echo sprintf(__('%sGoogle Testing Tool%s', _PSP_PLUGIN_NAME_), '<a href="https://developers.google.com/structured-data/testing-tool/" target="_blank">', '</a>'); ?></span>
                                <span><?php echo sprintf(__('%sSpecify your social profiles to Google%s', _PSP_PLUGIN_NAME_), '<a href="https://developers.google.com/structured-data/customize/social-profiles" target="_blank">', '</a>'); ?></span>
                            </legend>

                            <div>

                                <ul id="sq_jsonld_option" class="sq_settings_info">
                                    <li class="withborder">
                                        <div class="sq_option_content sq_option_content_small">
                                            <div class="sq_switch sq_seo_switch_condition" style="">
                                                <input id="psp_jsonld_opt_on" type="radio" class="sq_switch-input"
                                                       name="psp_jsonld_opt" value="1" <?php checked(PSP_Classes_Tools::getOption('psp_jsonld_opt'), 1); ?> >
                                                <label for="psp_jsonld_opt_on"
                                                       class="sq_switch-label sq_switch-label-off">Yes</label>
                                                <input id="psp_jsonld_opt_off" type="radio" class="sq_switch-input"
                                                       name="psp_jsonld_opt" value="0" <?php checked(PSP_Classes_Tools::getOption('psp_jsonld_opt'), 0); ?> >
                                                <label for="psp_jsonld_opt_off" class="sq_switch-label sq_switch-label-on">No</label>
                                                <span class="sq_switch-selection"></span>
                                            </div>
                                            <span><?php _e('Enable the Json-LD Option', _PSP_PLUGIN_NAME_) ?></span>
                                        </div>
                                    </li>
                                    <li class="withborder">
                                        <p style="line-height: 30px;"><?php _e('Your site type:', _PSP_PLUGIN_NAME_); ?>
                                            <select name="psp_jsonld_type" class="sq_jsonld_type">
                                                <option value="Organization" <?php echo(($jsonld_type == 'Organization') ? 'selected="selected"' : ''); ?>><?php _e('Organization', _PSP_PLUGIN_NAME_); ?></option>
                                                <option value="Person" <?php echo(($jsonld_type == 'Person') ? 'selected="selected"' : ''); ?>><?php _e('Personal', _PSP_PLUGIN_NAME_); ?></option>
                                            </select>
                                        </p>
                                    </li>
                                    <li class="withborder">
                                        <p>
                                            <span class="sq_jsonld_types sq_jsonld_Organization" style="display: block;float: left; <?php echo(($jsonld_type == 'Person') ? 'display:none' : ''); ?>"><?php _e('Your Organization Name:', _PSP_PLUGIN_NAME_); ?></span>
                                            <span class="sq_jsonld_types sq_jsonld_Person" style="width: 105px;display: block;float: left; <?php echo(($jsonld_type == 'Organization') ? 'display:none' : ''); ?>"><?php _e('Your Name:', _PSP_PLUGIN_NAME_); ?></span>
                                            <strong><input type="text" name="psp_jsonld[name]" value="<?php echo(($jsonld[$jsonld_type]['name'] <> '') ? $jsonld[$jsonld_type]['name'] : '') ?>" size="60" style="width: 300px;"/></strong>
                                        </p>
                                        <p class="sq_jsonld_types sq_jsonld_Person" <?php echo(($jsonld_type == 'Organization') ? 'style="display:none"' : ''); ?>>
                                            <span style="width: 105px;display: block;float: left;"><?php _e('Job Title:', _PSP_PLUGIN_NAME_); ?></span>
                                            <strong><input type="text" name="psp_jsonld[jobTitle]" value="<?php echo(($jsonld['Person']['jobTitle'] <> '') ? $jsonld['Person']['jobTitle'] : '') ?>" size="60" style="width: 300px;"/></strong>
                                        </p>
                                        <p>
                                            <span class="sq_jsonld_types sq_jsonld_Organization" style="width: 105px; display: block;float: left; <?php echo(($jsonld_type == 'Person') ? 'display:none' : ''); ?>"><?php _e('Logo Url:', _PSP_PLUGIN_NAME_); ?></span>
                                            <span class="sq_jsonld_types sq_jsonld_Person" style="width: 105px;display: block;float: left; <?php echo(($jsonld_type == 'Organization') ? 'display:none' : ''); ?>"><?php _e('Image Url:', _PSP_PLUGIN_NAME_); ?></span>
                                            <strong><input type="text" id="sq_jsonld_logo" name="psp_jsonld[logo]" value="<?php echo(($jsonld[$jsonld_type]['logo'] <> '') ? $jsonld[$jsonld_type]['logo'] : '') ?>" size="60" style="width: 247px;"/><input id="sq_json_imageselect" type="button" class="sq_button" value="<?php echo __('Select Image', _PSP_PLUGIN_NAME_) ?>"/></strong>
                                        </p>
                                        <p>
                                            <span style="width: 105px;display: block;float: left;"><?php _e('Contact Phone:', _PSP_PLUGIN_NAME_); ?></span>
                                            <strong>
                                                <input type="text" name="psp_jsonld[telephone]" value="<?php echo(($jsonld[$jsonld_type]['telephone'] <> '') ? $jsonld[$jsonld_type]['telephone'] : '') ?>" size="60" style="width: 350px;"/>
                                                <br/><span class="small" style="margin-left: 105px; margin-left: 120px; font-size: 14px; font-style: italic; font-weight: normal;"><?php echo __('eg. +10123456789', _PSP_PLUGIN_NAME_) ?></span>
                                            </strong>

                                        </p>

                                        <p>
                                            <span style="width: 105px;display: block;float: left;"><?php _e('Short Description:', _PSP_PLUGIN_NAME_); ?></span>
                                            <textarea name="psp_jsonld[description]" size="60" style="width: 350px; height: 70px;"/><?php echo(($jsonld[$jsonld_type]['description'] <> '') ? $jsonld[$jsonld_type]['description'] : '') ?></textarea>
                                        </p>
                                        <p>
                                            <?php echo __("After you save the Json-LD data, don't forget to enter your Social Media URLs", _PSP_PLUGIN_NAME_) ?>
                                        </p>
                                    </li>
                                    <li style="position: relative; font-size: 14px;color: #f7681a;">
                                        <div class="sq_option_img"></div><?php echo __('How will the search results look once google grab your data.', _PSP_PLUGIN_NAME_) ?>
                                    </li>

                                </ul>
                            </div>
                        </fieldset>
                        <div id="sq_settings_submit">
                            <input type="hidden" name="action" value="psp_savesettings_jsonld"/>
                            <input type="hidden" name="psp_nonce" value="<?php echo wp_create_nonce(_PSP_NONCE_ID_); ?>"/>
                            <input type="submit" name="sq_update" style="cursor: pointer" value="<?php _e('Save Json-LD', _PSP_PLUGIN_NAME_) ?> &raquo;"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sq_right">
                <div class="panel panel-white">
                    <div>
                        <span class="sq_title"><?php echo __('We Need Your Support', _PSP_PLUGIN_NAME_) ?></span>
                        <span style="display: block; margin-top: 10px; font-weight: bold; color: red">This plugin is FREE and we need your positive rating to keep the plugin up to date with all search engine requests.</span>
                        <ul>
                            <li style="font-size: 13px;background-color: #eededa;display: inline-block;height: 69px;margin-top: 83px;text-align: center;">
                                    <span>
                                        <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" target="_blank" style="text-decoration: none;">
                                            <img src="//api.squirrly.co/static/img/5stars.png" style="vertical-align: middle;width: 100%;margin-top: -105px;">
	                                        <span style="font-size: 15px;width: 75%;text-align: center; "><?php echo sprintf(__('Rate us if you like %sPremium SEO Pack', _PSP_PLUGIN_NAME_), '<br />'); ?></span>
                                        </a>
                                    </span>
                            </li>
                            <li class="sq_button">
                                <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" style="background-color: green;text-shadow: none; border: none;" target="_blank"><?php echo __('I Like This Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                            <li class="sq_button">
                                <a href="https://translate.wordpress.org/projects/wp-plugins/premium-seo-pack" target="_blank"><?php echo __('Translate The Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="panel panel-white" style="background-color: darkgreen;color: #fff;height: 290px;">
                    <span class="sq_title">Want to Gain More from Your SEO Experience?</span>
                    <ul style="margin-top: 25px!important;">
                        <li style="font-size: 15px; margin-top: 17px!important;color: #fff;list-style-type: circle;">Get a NEW SEO Audit</li>
                        <li style="font-size: 15px;margin-top: 17px!important; color: #fff;">Find The Best Keywords for Your Articles</li>
                        <li style="font-size: 15px;margin-top: 17px!important;color: #fff;">Optimize your website with a SEO Live Asistant</li>
                    </ul>

                    <div class="sq_button" style="text-align: center;">
                        <a href="https://my.squirrly.co/user/login?token=<?php echo PSP_Classes_Tools::getOption('psp_api') ?>" target="_blank" style="background-color: #fff!important;color: darkgreen;text-shadow: none!important;border: 1px solid darkgreen;margin-top: 28px;">Show Me How</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab5" class="psptab">
            <div class="sq_left">
                <div id="sq_settings_body">
                    <fieldset style="background-color: rgb(35, 40, 45);">
                        <legend id="psp_enable">
                            <span class="sq_legend_title" style="color: rgb(238, 238, 238);"><?php echo __('Import SEO from other plugins', _PSP_PLUGIN_NAME_) ?></span>
                            <span style="color: rgb(238, 238, 238);"><?php echo __('If you had a previous SEO plugin and you want to import all the seo from it please select the plugin from the list and click Import SEO', _PSP_PLUGIN_NAME_) ?></span>
                        </legend>

                        <div class="psp_field_options">
                            <form id="psp_inport_form" name="import" action="" method="post" enctype="multipart/form-data">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Choose a plugin and import all the SEO from it.', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <select id="psp_import_platform" name="psp_import_platform">
                                            <?php
                                            $platforms = apply_filters('psp_importList', false);

                                            foreach ($platforms as $path => $settings) { ?>
                                                <option value="<?php echo $path ?>"><?php echo ucfirst(PSP_Classes_ObjController::getClass('PSP_Models_Admin')->getName($path)); ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="action" value="psp_importseo"/>
                                        <input type="hidden" name="psp_nonce" value="<?php echo wp_create_nonce(_PSP_NONCE_ID_); ?>"/>
                                        <input type="submit" name="sq_update" style="cursor: pointer" value="<?php _e('Import SEO', _PSP_PLUGIN_NAME_) ?> &raquo;"/>
                                    </li>
                                </ul>
                            </form>
                            <form id="psp_inport_form" name="import" action="" method="post" enctype="multipart/form-data">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Choose a plugin and import the Social Settings from it.', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <select id="psp_import_platform" name="psp_import_platform">
                                            <?php
                                            $platforms = apply_filters('psp_importList', false);

                                            foreach ($platforms as $path => $settings) { ?>
                                                <option value="<?php echo $path ?>"><?php echo ucfirst(PSP_Classes_ObjController::getClass('PSP_Models_Admin')->getName($path)); ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="action" value="psp_importsettings"/>
                                        <input type="hidden" name="psp_nonce" value="<?php echo wp_create_nonce(_PSP_NONCE_ID_); ?>"/>
                                        <input type="submit" name="sq_update" style="cursor: pointer" value="<?php _e('Import Settings', _PSP_PLUGIN_NAME_) ?> &raquo;"/>
                                    </li>
                                </ul>
                            </form>

                            <br/>
                            <p class="small"><?php _e('Note! If you import the SEO from other plugins, you may lose the SEO you saved with this plugin.', _PSP_PLUGIN_NAME_) ?></p>
                        </div>
                    </fieldset>

                    <fieldset style="background-color: rgb(35, 40, 45);">
                        <legend id="psp_enable">
                            <span class="sq_legend_title" style="color: rgb(238, 238, 238);">Reset All Settings to default</span>
                        </legend>

                        <div class="psp_field_options">
                            <form id="psp_inport_form" name="import" action="" method="post" enctype="multipart/form-data">
                                <ul id="sq_settings_sq_use" class="sq_settings_info">
                                    <span><?php _e('Click to reset all the saved setting to default.', _PSP_PLUGIN_NAME_) ?></span>
                                    <li>
                                        <input type="hidden" name="action" value="psp_resetsettings"/>
                                        <input type="hidden" name="psp_nonce" value="<?php echo wp_create_nonce(_PSP_NONCE_ID_); ?>"/>
                                        <input type="submit" name="sq_update" onclick="return confirm('<?php _e('Are you sure you want to remove all the saved settings?', _PSP_PLUGIN_NAME_) ?>')" style="cursor: pointer" value="<?php _e('Reset Settings', _PSP_PLUGIN_NAME_) ?> &raquo;"/>
                                    </li>
                                </ul>
                            </form>

                            <br/>
                            <p class="small"><?php _e('Note! Make sure you backup your data first in case you change your mind.', _PSP_PLUGIN_NAME_) ?></p>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="sq_right">
                <div class="panel panel-white">
                    <div>
                        <span class="sq_title"><?php echo __('We Need Your Support', _PSP_PLUGIN_NAME_) ?></span>
                        <span style="display: block; margin-top: 10px; font-weight: bold; color: red">This plugin is FREE and we need your positive rating to keep the plugin up to date with all search engine requests.</span>
                        <ul>
                            <li style="font-size: 13px;background-color: #eededa;display: inline-block;height: 69px;margin-top: 83px;text-align: center;">
                                    <span>
                                        <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" target="_blank" style="text-decoration: none;">
                                            <img src="//api.squirrly.co/static/img/5stars.png" style="vertical-align: middle;width: 100%;margin-top: -105px;">
	                                        <span style="font-size: 15px;width: 75%;text-align: center; "><?php echo sprintf(__('Rate us if you like %sPremium SEO Pack', _PSP_PLUGIN_NAME_), '<br />'); ?></span>
                                        </a>
                                    </span>
                            </li>
                            <li class="sq_button">
                                <a href="https://wordpress.org/support/plugin/premium-seo-pack/reviews/?rate=5#new-post" style="background-color: green;text-shadow: none; border: none;" target="_blank"><?php echo __('I Like This Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                            <li class="sq_button">
                                <a href="https://translate.wordpress.org/projects/wp-plugins/premium-seo-pack" target="_blank"><?php echo __('Translate The Plugin', _PSP_PLUGIN_NAME_) ?></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="panel panel-white" style="background-color: darkgreen;color: #fff;height: 290px;">
                    <span class="sq_title">Want to Gain More from Your SEO Experience?</span>
                    <ul style="margin-top: 25px!important;">
                        <li style="font-size: 15px; margin-top: 17px!important;color: #fff;list-style-type: circle;">Get a NEW SEO Audit</li>
                        <li style="font-size: 15px;margin-top: 17px!important; color: #fff;">Find The Best Keywords for Your Articles</li>
                        <li style="font-size: 15px;margin-top: 17px!important;color: #fff;">Optimize your website with a SEO Live Asistant</li>
                    </ul>

                    <div class="sq_button" style="text-align: center;">
                        <a href="https://my.squirrly.co/user/login?token=<?php echo PSP_Classes_Tools::getOption('psp_api') ?>" target="_blank" style="background-color: #fff!important;color: darkgreen;text-shadow: none!important;border: 1px solid darkgreen;margin-top: 28px;">Show Me How</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}