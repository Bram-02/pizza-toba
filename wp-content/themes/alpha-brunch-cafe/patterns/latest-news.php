<?php
 /**
  * Title: Latest News
  * Slug: alpha-brunch-cafe/latest-news
  * Categories: alpha-brunch-cafe
  */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"0px"}},"layout":{"inherit":true,"type":"constrained","contentSize":"90%"}} -->
<main class="wp-block-group" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"align":"wide","className":"latest-box","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide latest-box" style="padding-bottom:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":" animated animated-fadeInUp","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group animated animated-fadeInUp"><!-- wp:group {"layout":{"wideSize":"34px"}} -->
<div class="wp-block-group"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"1px"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-color has-text-color has-medium-font-size" style="letter-spacing:1px"><?php esc_html_e('From Our Blog','alpha-brunch-cafe'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","className":" animated animated-fadeInUp","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"slider-title"} -->
<h2 class="wp-block-heading has-text-align-left animated animated-fadeInUp has-slider-title-font-size" style="line-height:1.3"><?php esc_html_e('Recent News','alpha-brunch-cafe'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":" animated animated-fadeInUp","style":{"spacing":{"blockGap":"10px","margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons animated animated-fadeInUp" style="margin-top:20px;margin-bottom:20px"><!-- wp:button {"textColor":"foreground","className":"is-style-fill","style":{"spacing":{"padding":{"right":"35px","left":"35px"}},"border":{"radius":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-foreground-color has-text-color has-link-color wp-element-button" href="#" style="border-radius:5px;padding-right:35px;padding-left:35px"><?php esc_html_e('Explore More','alpha-brunch-cafe'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","className":"grid-layout","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"has-shadow-dark  animated animated-fadeInUp","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-shadow-dark animated animated-fadeInUp" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} /-->

<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Know More\u003ca role=\u0022textbox\u0022 aria-multiline=\u0022true\u0022 aria-label=\u0022\u0026quot;Read more\u0026quot; link text\u0022 class=\u0022block-editor-rich-text__editable wp-block-post-excerpt__more-link rich-text\u0022 style=\u0022font-size: revert; font-family: var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dpoppins); min-width: 1px; display: inline !important;\u0022\u003e\u003c/a\u003e","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->