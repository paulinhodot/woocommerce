<?php
/**
 * Simple Product Form
 *
 * Title: Simple
 * Slug: simple
 * Description: A single physical or virtual product, e.g. a t-shirt or an eBook
 * Product Types: simple, variable
 *
 * @package WooCommerce\Templates
 * @version 9.1.0-beta.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<!-- wp:woocommerce/product-tab {"title":"General","id":"general"} -->
	<!-- wp:woocommerce/product-has-variations-notice {"content":"This product has options, such as size or color. You can manage each variation's images, downloads, and other details individually.","buttonText":"Go to Variations","type":"info"} /-->
	<!-- wp:woocommerce/product-section {"title":"Basic details","description":"This info will be displayed on the product page, category pages, social media, and search results."} -->
		<!-- wp:woocommerce/product-details-section-description /-->
		<!-- wp:woocommerce/product-name-field {"name":"Product name","autoFocus":true,"metadata":{"bindings":{"value":{"source":"woocommerce/entity-product","args":{"prop":"name"}}}}} /-->
		<!-- wp:columns --><div class="wp-block-columns"></div>
			<!-- wp:column {"templateLock":"all"} --><div class="wp-block-column"></div>
				<!-- wp:woocommerce/product-regular-price-field {"name":"regular_price","label":"Regular price","help":"Per your \u003ca href=\u0022https://test.local/wp-admin/admin.php?page=wc-settings\u0026tab=general\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003estore settings\u003c/a\u003e, taxes are not enabled."} /-->
			<!-- /wp:column -->
			<!-- wp:column {"templateLock":"all"} --><div class="wp-block-column"></div>
				<!-- wp:woocommerce/product-sale-price-field {"label":"Sale price"} /-->
			<!-- /wp:column -->
		<!-- /wp:columns -->
		<!-- wp:woocommerce/product-schedule-sale-fields /-->
		<!-- wp:woocommerce/product-text-area-field {"label":"Summary","help":"Summarize this product in 1-2 short sentences. We'll show it at the top of the page.","property":"short_description"} /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Description","description":"What makes this product unique? What are its most important features? Enrich the product page by adding rich content using blocks."} -->
		<!-- wp:woocommerce/product-description-field -->
			<!-- wp:woocommerce/product-summary-field {"helpText":null,"label":null,"property":"description"} /-->
		<!-- /wp:woocommerce/product-description-field -->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Buy button","description":"Add a link and choose a label for the button linked to a product sold elsewhere."} -->
		<!-- wp:woocommerce/product-text-field {"property":"external_url","label":"Link to the external product","placeholder":"Enter the external URL to the product","suffix":true,"type":{"value":"url","message":"Link to the external product is an invalid URL."}} /-->
		<!-- wp:columns --><div class="wp-block-columns"></div>
			<!-- wp:column --><div class="wp-block-column"></div>
				<!-- wp:woocommerce/product-text-field {"property":"button_text","label":"Buy button text"} /-->
			<!-- /wp:column -->
		<!-- /wp:columns -->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Products in this group","description":"Make a collection of related products, enabling customers to purchase multiple items together."} -->
		<!-- wp:woocommerce/product-list-field {"property":"grouped_products"} /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Images","description":"Drag images, upload new ones or select files from your library. For best results, use JPEG files that are 1000 by 1000 pixels or larger. \u003ca href=\u0022https://woocommerce.com/posts/how-to-take-professional-product-photos-top-tips\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eHow to prepare images?\u003c/a\u003e"} -->
		<!-- wp:woocommerce/product-images-field {"images":[],"property":"images"} /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"blockGap":"unit-40"} -->
		<!-- wp:woocommerce/product-toggle-field {"property":"downloadable","label":"Include downloads","checkedHelp":"Add any files you'd like to make available for the customer to download after purchasing, such as instructions or warranty info.","uncheckedHelp":"Add any files you'd like to make available for the customer to download after purchasing, such as instructions or warranty info."} /-->
		<!-- wp:woocommerce/product-subsection {"title":"Downloads","description":"Add any files you'd like to make available for the customer to download after purchasing, such as instructions or warranty info. Store-wide updates can be managed in your \u003ca href=\u0022https://test.local/wp-admin/admin.php?page=wc-settings\u0026tab=products\u0026section=downloadable\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eproduct settings\u003c/a\u003e."} -->
			<!-- wp:woocommerce/product-downloads-field /-->
		<!-- /wp:woocommerce/product-subsection -->
	<!-- /wp:woocommerce/product-section -->
<!-- /wp:woocommerce/product-tab -->
<!-- wp:woocommerce/product-tab {"title":"Variations","id":"variations"} -->
	<!-- wp:woocommerce/product-section {"title":"Variation options","description":"Add and manage attributes used for product options, such as size and color."} -->
		<!-- wp:woocommerce/product-variations-options-field /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Variations","description":"Manage individual product combinations created from options."} -->
		<!-- wp:woocommerce/product-variation-items-field /-->
	<!-- /wp:woocommerce/product-section -->
<!-- /wp:woocommerce/product-tab -->
<!-- wp:woocommerce/product-tab {"title":"Organization","id":"organization"} -->
	<!-- wp:woocommerce/product-section {"title":"Product catalog","description":"Help customers find this product by assigning it to categories, adding extra details, and managing its visibility in your store and other channels."} -->
		<!-- wp:woocommerce/product-taxonomy-field {"slug":"product_cat","property":"categories","label":"Categories","createTitle":"Create new category","dialogNameHelpText":"Shown to customers on the product page.","parentTaxonomyText":"Parent category","placeholder":"Search or create categories…"} /-->
		<!-- wp:woocommerce/product-catalog-visibility-field {"label":"Hide in product catalog","visibility":"search"} /-->
		<!-- wp:woocommerce/product-catalog-visibility-field {"label":"Hide from search results","visibility":"catalog"} /-->
		<!-- wp:woocommerce/product-checkbox-field {"label":"Enable product reviews","property":"reviews_allowed"} /-->
		<!-- wp:woocommerce/product-password-field {"label":"Require a password"} /-->
		<!-- wp:woocommerce/product-tag-field {"name":"tags"} /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Attributes","description":"Use global attributes to allow shoppers to filter and search for this product. Use custom attributes to provide detailed product information.","blockGap":"unit-40"} -->
		<!-- wp:woocommerce/product-attributes-field /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section -->
		<!-- wp:woocommerce/product-custom-fields-toggle-field {"label":"Show custom fields"} -->
			<!-- wp:woocommerce/product-section {"blockGap":"unit-30","title":"Custom fields","description":"Custom fields can be used in a variety of ways, such as sharing more detailed product information, showing more input fields, or for internal inventory organization. \u003ca href=\u0022https://woocommerce.com/document/custom-product-fields/\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eRead more about custom fields\u003c/a\u003e"} -->
				<!-- wp:woocommerce/product-custom-fields /-->
			<!-- /wp:woocommerce/product-section -->
		<!-- /wp:woocommerce/product-custom-fields-toggle-field -->
	<!-- /wp:woocommerce/product-section -->
<!-- /wp:woocommerce/product-tab -->
<!-- wp:woocommerce/product-tab {"title":"Inventory","id":"inventory"} -->
	<!-- wp:woocommerce/product-has-variations-notice {"content":"This product has options, such as size or color. You can now manage each variation's inventory and other details individually.","buttonText":"Go to Variations","type":"info"} /-->
	<!-- wp:woocommerce/product-section {"title":"Inventory","description":"Set up and manage inventory for this product, including status and available quantity. \u003ca href=\u0022https://test.local/wp-admin/admin.php?page=wc-settings\u0026tab=products\u0026section=inventory\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eManage store inventory settings\u003c/a\u003e","blockGap":"unit-40"} -->
		<!-- wp:woocommerce/product-subsection -->
			<!-- wp:woocommerce/product-sku-field /-->
			<!-- wp:woocommerce/product-toggle-field {"label":"Track inventory","property":"manage_stock","disabled":false,"disabledCopy":null} /-->
			<!-- wp:woocommerce/product-inventory-quantity-field /-->
		<!-- /wp:woocommerce/product-subsection -->
		<!-- wp:woocommerce/product-radio-field {"title":"Stock status","property":"stock_status","options":[{"label":"In stock","value":"instock"},{"label":"Out of stock","value":"outofstock"},{"label":"On backorder","value":"onbackorder"}]} /-->
		<!-- wp:woocommerce/product-text-area-field {"property":"purchase_note","label":"Post-purchase note","placeholder":"Enter an optional note attached to the order confirmation message sent to the shopper."} /-->
		<!-- wp:woocommerce/product-collapsible {"toggleText":"Advanced","initialCollapsed":true,"persistRender":true} -->
			<!-- wp:woocommerce/product-section {"blockGap":"unit-40"} -->
				<!-- wp:woocommerce/product-radio-field {"title":"When out of stock","property":"backorders","options":[{"label":"Allow purchases","value":"yes"},{"label":"Allow purchases, but notify customers","value":"notify"},{"label":"Don't allow purchases","value":"no"}]} /-->
				<!-- wp:woocommerce/product-inventory-email-field /-->
				<!-- wp:woocommerce/product-checkbox-field {"title":"Restrictions","label":"Limit purchases to 1 item per order","property":"sold_individually","tooltip":"When checked, customers will be able to purchase only 1 item in a single order. This is particularly useful for items that have limited quantity, like art or handmade goods."} /-->
			<!-- /wp:woocommerce/product-section -->
		<!-- /wp:woocommerce/product-collapsible -->
	<!-- /wp:woocommerce/product-section -->
<!-- /wp:woocommerce/product-tab -->
<!-- wp:woocommerce/product-tab {"title":"Shipping","id":"shipping"} -->
	<!-- wp:woocommerce/product-has-variations-notice {"content":"This product has options, such as size or color. You can now manage each variation's shipping settings and other details individually.","buttonText":"Go to Variations","type":"info"} /-->
	<!-- wp:woocommerce/product-section -->
		<!-- wp:woocommerce/product-toggle-field {"property":"virtual","checkedValue":false,"uncheckedValue":true,"label":"This product requires shipping or pickup","uncheckedHelp":"This product will not trigger your customer's shipping calculator in cart or at checkout. This product also won't require your customers to enter their shipping details at checkout. \u003ca href=\u0022https://woocommerce.com/document/managing-products/#adding-a-virtual-product\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eRead more about virtual products\u003c/a\u003e."} /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Fees \u0026 dimensions","description":"Set up shipping costs and enter dimensions used for accurate rate calculations. \u003ca href=\u0022https://woocommerce.com/posts/how-to-calculate-shipping-costs-for-your-woocommerce-store/\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eHow to get started?\u003c/a\u003e"} -->
		<!-- wp:woocommerce/product-shipping-class-field /-->
		<!-- wp:woocommerce/product-shipping-dimensions-fields /-->
	<!-- /wp:woocommerce/product-section -->
<!-- /wp:woocommerce/product-tab -->
<!-- wp:woocommerce/product-tab {"title":"Linked products","id":"linked-products"} -->
	<!-- wp:woocommerce/product-section {"title":"Upsells","description":"Upsells are typically products that are extra profitable or better quality or more expensive. Experiment with combinations to boost sales. \u003cbr /\u003e\u003ca href=\u0022https://woocommerce.com/document/related-products-up-sells-and-cross-sells/\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eLearn more about linked products\u003c/a\u003e"} -->
		<!-- wp:woocommerce/product-linked-list-field {"property":"upsell_ids","emptyState":{"image":"ShoppingBags","tip":"Tip: Upsells are products that are extra profitable or better quality or more expensive. Experiment with combinations to boost sales.","isDismissible":true}} /-->
	<!-- /wp:woocommerce/product-section -->
	<!-- wp:woocommerce/product-section {"title":"Cross-sells","description":"By suggesting complementary products in the cart using cross-sells, you can significantly increase the average order value. \u003cbr /\u003e\u003ca href=\u0022https://woocommerce.com/document/related-products-up-sells-and-cross-sells/\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer\u0022\u003eLearn more about linked products\u003c/a\u003e"} -->
		<!-- wp:woocommerce/product-linked-list-field {"property":"cross_sell_ids","emptyState":{"image":"CashRegister","tip":"Tip: By suggesting complementary products in the cart using cross-sells, you can significantly increase the average order value.","isDismissible":true}} /-->
	<!-- /wp:woocommerce/product-section -->
<!-- /wp:woocommerce/product-tab -->