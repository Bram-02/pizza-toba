<?php
$alpha_brunch_cafe_pro_purchase_url = "https://www.thealphablocks.com/themes/brunch-wordpress-theme/";
$alpha_brunch_cafe_doc_url = "https://www.thealphablocks.com/docs/alpha-brunch-cafe-pro/";
$alpha_brunch_cafe_live_demo_url = "https://www.thealphablocks.com/demos/alpha-brunch-cafe-pro/";
$alpha_brunch_cafe_support_url = "https://wordpress.org/support/theme/alpha-brunch-cafe/";
$alpha_brunch_cafe_review_url = "https://wordpress.org/support/theme/alpha-brunch-cafe/reviews/";

$alpha_brunch_cafe_theme_name = esc_html( $theme->Name );
$alpha_brunch_cafe_free_theme_name = str_replace( ' Pro', '',$alpha_brunch_cafe_theme_name );
?>
<div class="alpha-brunch-cafe--about-page--wrapper">
    <div id="alpha-brunch-cafe-admin-about-page">
        <div class="alpha-brunch-cafe-admin-card-header">
            <div class="alpha-brunch-cafe-header-left">
                <h2><?php echo esc_html( $theme->Name ); ?></h2>
                <p><?php esc_html_e( 'Alpha Brunch Cafe is a multifunctional WordPress full site editing theme that is compatible with all browsers and devices.', 'alpha-brunch-cafe' ); ?></p>
            </div>
            <div class="alpha-brunch-cafe-header-right">
                <div class="alpha-brunch-cafe-card-header-button-group">
                    <a href="<?php echo $alpha_brunch_cafe_pro_purchase_url; ?>" class="alpha-brunch-cafe-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Get Premium Version', 'alpha-brunch-cafe' ); ?>
                    </a>
                    <a href="<?php echo $alpha_brunch_cafe_live_demo_url; ?>" class="alpha-brunch-cafe-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Pro Live Demo', 'alpha-brunch-cafe' ); ?>
                    </a>
                    <a href="<?php echo $alpha_brunch_cafe_doc_url; ?>" class="alpha-brunch-cafe-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Pro Theme Documentation', 'alpha-brunch-cafe' ); ?>
                    </a>
                </div>
                <div class="alpha-brunch-cafe-card-header-button-group bundle-card">
                    <a href="https://www.thealphablocks.com/themes/wordpress-theme-bundle/" class="alpha-brunch-cafe-admin-button premium-button" target="_blank" rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Get All Block Themes @59', 'alpha-brunch-cafe' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="feature-list">
            <div class="alpha-brunch-cafe-about-container">
                <div class="alpha-brunch-cafe-admin-card features">
                    <div class="alpha-brunch-cafe-about-container alpha-brunch-cafe-compare-table">
                        <div class="admin-grid-1">
                            <h3>
                                <?php echo esc_html( $alpha_brunch_cafe_free_theme_name ); ?>
                                <?php esc_html_e( 'Free Vs Pro', 'alpha-brunch-cafe' ); ?>
                            </h3>                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo esc_html( $theme->Name ); ?>
                                            <?php esc_html_e( 'Free', 'alpha-brunch-cafe' ); ?>
                                            <p><?php esc_html_e( '( Limited blocks available )', 'alpha-brunch-cafe' ); ?></p>
                                            
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Features', 'alpha-brunch-cafe' ); ?>
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Alpha Brunch Cafe Pro ', 'alpha-brunch-cafe' ); ?>
                                            <p><?php esc_html_e( '( More Blocks & Settings available )', 'alpha-brunch-cafe' ); ?></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Easy Setup', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Responsive Desgin', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'SEO Friendly', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( '24/7 premium support', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'High-Priority Dedicated Support', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Different niches starter sites', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Secure transaction', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Lifetime Updates', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'No coding required', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WooCommerce', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Mini Cart', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Upsells', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Multi Steps', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Sticky cart', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Bulk Variation', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Quick View', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Elementor', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Drag and Drop functionality', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'One Click Demo Import', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( ' Featured Slider', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Typography and color options', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'Unlimited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Import components/ templates', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'One Click Demo Import', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Gutenberg block editor', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Profile card (Block)', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Blog (block)', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Unlimited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Carousel Post (Block)', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Unlimited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Testimonials(block)', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'News Block', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Templates and block patterns', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Advanced Color Options', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'Unlimited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Theme Options', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Mini Cart On Header', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Testimonial Slider', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Sponsor Slider', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Sticky Header', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WP Travel Plugin', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Booking system', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Google Maps zoom level settings', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Group discount', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Wishlist', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Tour extras', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Multiple prices and multiple dates', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Coupon', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Full Site Editing/Site Editor', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Limited Features', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Block themes', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Style variations', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Block patterns and template parts', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Global style Interface', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Edit each areas of website(header, footer, sidebar)', 'alpha-brunch-cafe' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alpha-brunch-cafe-about-side">
                <div class="alpha-brunch-cafe-admin-card cart-two">
                    <h3 class="alpha-brunch-cafe-admin-card-title is-small">
                        <?php esc_html_e( 'Queries Greetings! We are here to assist.', 'alpha-brunch-cafe' ); ?>
                    </h3>
                    <p><?php esc_html_e( '"Simple Setup - Our Committed Team will quickly set up your website."', 'alpha-brunch-cafe' ); ?></p>
                    <div class="alpha-brunch-cafe-card-header-button-group">
                        <a href="<?php echo $alpha_brunch_cafe_support_url; ?>" class="alpha-brunch-cafe-admin-button premium-button" target="_blank"
                            rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                            <?php esc_html_e( 'Get Support', 'alpha-brunch-cafe' ); ?>
                        </a>
                        <a href="<?php echo $alpha_brunch_cafe_review_url; ?>" class="alpha-brunch-cafe-admin-button premium-button" target="_blank"
                            rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                            <?php esc_html_e( 'Add Reviews', 'alpha-brunch-cafe' ); ?>
                        </a>
                        <a href="<?php echo $alpha_brunch_cafe_pro_purchase_url; ?>" class="alpha-brunch-cafe-admin-button premium-button" target="_blank"
                            rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                            <?php esc_html_e( 'Get Premium Version', 'alpha-brunch-cafe' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>