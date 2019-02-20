<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2013
 * @copyright Aimeos (aimeos.org), 2015-2018
 */

$enc = $this->encoder();


/** client/html/basket/standard/url/target
 * Destination of the URL where the controller specified in the URL is known
 *
 * The destination can be a page ID like in a content management system or the
 * module of a software development framework. This "target" must contain or know
 * the controller that should be called by the generated URL.
 *
 * @param string Destination of the URL
 * @since 2014.03
 * @category Developer
 * @see client/html/basket/standard/url/controller
 * @see client/html/basket/standard/url/action
 * @see client/html/basket/standard/url/config
 * @see client/html/basket/standard/url/site
 */
$basketTarget = $this->config( 'client/html/basket/standard/url/target' );

/** client/html/basket/standard/url/controller
 * Name of the controller whose action should be called
 *
 * In Model-View-Controller (MVC) applications, the controller contains the methods
 * that create parts of the output displayed in the generated HTML page. Controller
 * names are usually alpha-numeric.
 *
 * @param string Name of the controller
 * @since 2014.03
 * @category Developer
 * @see client/html/basket/standard/url/target
 * @see client/html/basket/standard/url/action
 * @see client/html/basket/standard/url/config
 * @see client/html/basket/standard/url/site
 */
$basketController = $this->config( 'client/html/basket/standard/url/controller', 'basket' );

/** client/html/basket/standard/url/action
 * Name of the action that should create the output
 *
 * In Model-View-Controller (MVC) applications, actions are the methods of a
 * controller that create parts of the output displayed in the generated HTML page.
 * Action names are usually alpha-numeric.
 *
 * @param string Name of the action
 * @since 2014.03
 * @category Developer
 * @see client/html/basket/standard/url/target
 * @see client/html/basket/standard/url/controller
 * @see client/html/basket/standard/url/config
 * @see client/html/basket/standard/url/site
 */
$basketAction = $this->config( 'client/html/basket/standard/url/action', 'index' );

/** client/html/basket/standard/url/config
 * Associative list of configuration options used for generating the URL
 *
 * You can specify additional options as key/value pairs used when generating
 * the URLs, like
 *
 *  client/html/<clientname>/url/config = array( 'absoluteUri' => true )
 *
 * The available key/value pairs depend on the application that embeds the e-commerce
 * framework. This is because the infrastructure of the application is used for
 * generating the URLs. The full list of available config options is referenced
 * in the "see also" section of this page.
 *
 * @param string Associative list of configuration options
 * @since 2014.03
 * @category Developer
 * @see client/html/basket/standard/url/target
 * @see client/html/basket/standard/url/controller
 * @see client/html/basket/standard/url/action
 * @see client/html/basket/standard/url/site
 * @see client/html/url/config
 */
$basketConfig = $this->config( 'client/html/basket/standard/url/config', [] );

/** client/html/basket/standard/url/site
 * Locale site code where products will be added to the basket
 *
 * In more complex setups with several shop sites, this setting allows to to
 * define the shop site that will manage the basket of the customer. For example
 * in market place setups where all vendors have there own shop sites, the basket
 * site should be the site code of the market place ("default" by default).
 *
 * @param string Code of the locale site
 * @since 2018.04
 * @category Developer
 * @see client/html/basket/standard/url/target
 * @see client/html/basket/standard/url/controller
 * @see client/html/basket/standard/url/config
 */
$basketSite = $this->config( 'client/html/basket/standard/url/site' );

$basketParams = ( $basketSite ? ['site' => $basketSite] : [] );


$jsonTarget = $this->config( 'client/jsonapi/url/target' );
$jsonController = $this->config( 'client/jsonapi/url/controller', 'jsonapi' );
$jsonAction = $this->config( 'client/jsonapi/url/action', 'options' );
$jsonConfig = $this->config( 'client/jsonapi/url/config', [] );


/// Price format with price value (%1$s) and currency (%2$s)
$priceFormat = $this->translate( 'client', '%1$s %2$s' );


?>
<div class="col-lg-3">
<section class="aimeos basket-mini" data-jsonurl="<?= $enc->attr( $this->url( $jsonTarget, $jsonController, $jsonAction, $basketParams, [], $jsonConfig ) ); ?>">

	<?php if( ( $errors = $this->get( 'miniErrorList', [] ) ) !== [] ) : ?>
		<ul class="error-list">
			<?php foreach( $errors as $error ) : ?>
				<li class="error-item"><?= $enc->html( $error ); ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>


	<?php if( isset( $this->miniBasket ) ) : ?>
		<?php
			$quantity = 0;
			$priceItem = $this->miniBasket->getPrice();
			$priceCurrency = $this->translate( 'currency', $priceItem->getCurrencyId() );

			foreach( $this->miniBasket->getProducts() as $product ) {
				$quantity += $product->getQuantity();
			}
		?>

		<h1><?= $enc->html( $this->translate( 'client', 'Basket' ), $enc::TRUST ); ?></h1>

		<!-- Displaced old cart -->

		<div class="basket-mini-product">
			<div class="cart-button-big">
				<a href="/basket">
					<img src="/files/webshop-cart.gif" alt="">
					<div class="basket-mini-main">
					</div>
				</a>
			</div>
		</div>


	<?php endif; ?>

</section>
</div>