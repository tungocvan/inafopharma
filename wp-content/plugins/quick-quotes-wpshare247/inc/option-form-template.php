<div id="wle-libs-admin" class="wrap wle-options wpshare247-new-option-style">
    <div id="poststuff" class="basic-admin wle-options-area">
        <div class="postbox-container">
            <div class="meta-box-sortables ui-sortable">
                <div class="postbox remove-border">
                    <div id="welcome-panel_bk">
                        <div class="welcome-panel-content">
                            <h2 class="hndle ui-sortable-handle fsz-tt"><?php _e("Create quick quotes for all careers and services", WS247_QUOTE_QQFS_TEXTDOMAIN); ?></h2>
                            <div class="content">
                                <div class="inside">
                                	<?php $lang_code = get_locale(); ?>
                                    <form method="post" action="options.php" class="form-theme-options">
                                        <?php settings_fields( Ws247_quote_qqfs::FIELDS_GROUP ); ?>
                                        <?php do_settings_sections( Ws247_quote_qqfs::FIELDS_GROUP ); ?>
                                        <div class="in-form">
                                        	<?php 
											require_once WS247_QUOTE_QQFS_PLUGIN_INC_DIR . '/tabs/tab_pro_general.php'; 
											?>
                                            <?php submit_button(); ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>