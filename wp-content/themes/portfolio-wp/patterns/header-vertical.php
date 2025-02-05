<?php
/**
 * Title: Header Vertical
 * Slug: portfolio-wp/header-vertical
 * Categories: portfolio-wp-headers
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"tagName":"header","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"header-wrapper header-side","layout":{"type":"constrained"}} -->
<header class="wp-block-group header-wrapper header-side" style="min-height:100%;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"right":"32px","left":"32px"}},"border":{"right":{"color":"var:preset|color|bg-light","width":"1px"},"top":{},"bottom":{},"left":{}}},"className":"position-sticky","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group position-sticky" style="border-right-color:var(--wp--preset--color--bg-light);border-right-width:1px;min-height:100vh;padding-right:32px;padding-left:32px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"className":"site-logo-wrapper","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide site-logo-wrapper"><!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"32px"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"logo-title-container"} -->
<div class="wp-block-columns is-not-stacked-on-mobile logo-title-container"><!-- wp:column {"width":"100%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:site-logo {"shouldSyncIcon":false} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"},":hover":{"color":{"text":"var:preset|color|accent-secondary"}}}}},"textColor":"dark-gray"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","className":"mobile-menu-container"} -->
<div class="wp-block-column mobile-menu-container" style="flex-basis:20%"><!-- wp:navigation {"ref":56,"overlayMenu":"always","icon":"menu","overlayBackgroundColor":"accent-primary","className":"mobile-menu","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:navigation {"ref":56,"textColor":"dark-gray","overlayBackgroundColor":"accent-primary","overlayTextColor":"dark-gray","className":"desktop-menu","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap","orientation":"vertical"},"style":{"typography":{"letterSpacing":"0px"},"spacing":{"blockGap":"0"}},"fontSize":"medium","fontFamily":"helvetica-now-disp-regular"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"24px"}},"layout":{"selfStretch":"fit","flexSize":null}},"className":"social-menu-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide social-menu-container" style="min-height:100%;padding-top:24px"><!-- wp:navigation {"ref":92,"textColor":"dark-gray","overlayMenu":"never","overlayTextColor":"dark-gray","className":"social-menu desktop-menu","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap","orientation":"horizontal"},"style":{"typography":{"letterSpacing":"0px"},"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium","fontFamily":"helvetica-now-disp-bold"} /-->

<!-- wp:spacer {"height":"40px","style":{"layout":[]}} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->