{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}

<section id="main" class="product-detail  product-image-gallery" itemscope itemtype="https://schema.org/Product">
  <meta itemprop="url" content="{$product.url}"><div class="row"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12">
{block name='page_content_container'}
  <section class="page-content" id="content" data-templatezoomtype="in" data-zoomposition="right" data-zoomwindowwidth="400" data-zoomwindowheight="400">
    {block name='page_content'}
      <div class="images-container">
        {block name='product_cover_thumbnails'}

          {block name='product_cover'}
            <div class="product-cover">
              {block name='product_flags'}
                <ul class="product-flags">
                  {foreach from=$product.flags item=flag}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                  {/foreach}
                </ul>
              {/block}
              {if $product.cover}
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="{$product.cover.bySize.large_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                  <i class="material-icons zoom-in">&#xE8FF;</i>
                </div>
              {else}
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="{$urls.no_picture_image.bySize.large_default.url}" alt="{$product.name}" title="{$product.name}" itemprop="image">
              {/if}
            </div>
          {/block}

          {block name='product_images'}
            <div id="thumb-gallery" class="product-thumb-images">
              {if $product.cover}
                {foreach from=$product.images item=image}
                  <div class="thumb-container {if $image.id_image == $product.cover.id_image} active {/if}">
                    <a href="javascript:void(0)" data-image="{$image.bySize.large_default.url}" data-zoom-image="{$image.bySize.large_default.url}"> 
                      <img
                        class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                        data-image-medium-src="{$image.bySize.medium_default.url}"
                        data-image-large-src="{$image.bySize.large_default.url}"
                        src="{$image.bySize.home_default.url}"
                        alt="{$image.legend}"
                        title="{$image.legend}"
                        itemprop="image"
                      >
                    </a>
                  </div>
                {/foreach}
              {else}
                <div class="thumb-container">
                  <a href="javascript:void(0)" data-image="{$urls.no_picture_image.bySize.large_default.url}" data-zoom-image="{$urls.no_picture_image.bySize.large_default.url}"> 
                    <img 
                      class="thumb js-thumb img-fluid" 
                      data-image-medium-src="{$urls.no_picture_image.bySize.medium_default.url}"
                      data-image-large-src="{$urls.no_picture_image.bySize.large_default.url}"
                      src="{$urls.no_picture_image.bySize.home_default.url}"
                      alt="{$product.name}"
                      title="{$product.name}"
                      itemprop="image"
                    >
                  </a>
                </div>
              {/if}
            </div>
            
            {if $product.images|@count > 1}
              <div class="arrows-product-fake slick-arrows">
                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" >{l s='Previous' d='Shop.Theme.Catalog'}</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button">{l s='Next' d='Shop.Theme.Catalog'}</button>
              </div>
            {/if}
          {/block}

        {/block}
        {hook h='displayAfterProductThumbs'}
      </div>
    {/block}
  </section>
{/block}

{block name='product_images_modal'}
  {include file='catalog/_partials/product-images-modal.tpl'}
{/block}
                            </div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12">
{block name='page_header_container'}
	{block name='page_header'}
		<h1 class="h1 product-detail-name" itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>
	{/block}
{/block}
{block name='product_additional_info'}
	{include file='catalog/_partials/product-additional-info.tpl'}
{/block}
{hook h='displayLeoProductReviewExtra' product=$product}
{block name='product_prices'}
	{include file='catalog/_partials/product-prices.tpl'}
{/block}

{block name='product_description_short'}
  <div id="product-description-short-{$product.id}" class="description-short" itemprop="description">{$product.description_short nofilter}</div>
{/block}
{if $product.is_customizable && count($product.customizations.fields)}
	{block name='product_customization'}
	 	{include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
	{/block}
{/if}
<div class="product-actions">
  {block name='product_buy'}
    <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="{$static_token}">
      <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

      {block name='product_variants'}
        {include file='catalog/_partials/product-variants.tpl'}
      {/block}

      {block name='product_pack'}
        {if $packItems}
          <section class="product-pack">
            <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
            {foreach from=$packItems item="product_pack"}
              {block name='product_miniature'}
                {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
              {/block}
            {/foreach}
        </section>
        {/if}
      {/block}

      {block name='product_discounts'}
        {include file='catalog/_partials/product-discounts.tpl'}
      {/block}

      {block name='product_add_to_cart'}
        {include file='catalog/_partials/product-add-to-cart.tpl'}
      {/block}

      {block name='product_refresh'}
        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
      {/block}
    </form>
  {/block}
</div>
{block name='hook_display_reassurance'}
  {hook h='displayReassurance'}
{/block}
                            </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
{include file="sub/product_info/tab.tpl"}

{block name='product_accessories'}
  {if $accessories}
    <section class="product-accessories-carousel block button-middle button-hover clearfix">
      <h2 class="products-section-title">{l s='You might also like' d='Shop.Theme.Catalog'}</h2>
      {assign var="itemscolumn" value=1}
      {assign var="itempercolumn" value=4}
      {assign var="itemsDesktop" value=4}
      {assign var="itemsDesktopSmall" value=3}
      {assign var="itemsTablet" value=2}
      {assign var="itemsMobile" value=1}
      <div class="block_content">
        <div class="products">
          <div class="owl-row">
            <div class="timeline-wrapper prepare"
              data-item="{$itempercolumn}" 
              data-xl="{$itemsDesktop}" 
              data-lg="{$itemsDesktop}" 
              data-md="{$itemsDesktopSmall}" 
              data-sm="{$itemsTablet}" 
              data-m="{$itemsMobile}"
            >
              {for $foo=1 to $itempercolumn}     
                <div class="timeline-parent">
                  {for $foo_child=1 to $itemscolumn}
                    <div class="timeline-item ">
                      <div class="animated-background">         
                        <div class="background-masker content-top"></div>             
                        <div class="background-masker content-second-line"></div>             
                        <div class="background-masker content-third-line"></div>              
                        <div class="background-masker content-fourth-line"></div>
                      </div>
                    </div>
                  {/for}
                </div>
              {/for}
            </div>
            <div id="product-accessories" class="owl-carousel owl-theme owl-loading">
              {foreach from=$accessories item="product" name=mypLoop}
                <div class="item{if $smarty.foreach.mypLoop.index == 0} first{/if}">
                  {block name='product_miniature'}
                    {if isset($productProfileDefault) && $productProfileDefault}
                      
                      {hook h='displayLeoProfileProduct' product=$product profile=$productProfileDefault}
                    {else}
                      {include file='catalog/_partials/miniatures/product.tpl' product=$product}
                    {/if}
                  {/block}
                </div>
              {/foreach}
            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
      ap_list_functions_loaded.push(
        function(){
          if($('#product-accessories').parents('.tab-pane').length)
          {   
              if(!$('#product-accessories').parents('.tab-pane').hasClass('active'))
              {
                  var width_owl_active_tab = $('#product-accessories').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();    
                  $('#product-accessories').width(width_owl_active_tab);
              }
          }
          $('#product-accessories').imagesLoaded( function() {
            $('#product-accessories').owlCarousel({
              {if isset($IS_RTL) && $IS_RTL}
                direction:'rtl',
              {else}
                direction:'ltr',
              {/if}
              items : {$itempercolumn},
              itemsCustom : false,
              itemsDesktop : [1200,{$itemsDesktop}],
              itemsDesktopSmall : [992, {$itemsDesktopSmall}],
              itemsTablet : [768, {$itemsTablet}],
              itemsMobile : [480, {$itemsMobile}],
              singleItem : false,         // true : show only 1 item
              itemsScaleUp : false,
              slideSpeed : 200,  //  change speed when drag and drop a item
              paginationSpeed :800, // change speed when go next page

              autoPlay : false,   // time to show each item
              stopOnHover : false,
              navigation : true,
              navigationText : ["&lsaquo;", "&rsaquo;"],

              scrollPerPage :true,
              responsive :true,
              
              pagination : false,
              paginationNumbers : false,
              
              addClassActive : true,
              
              mouseDrag : true,
              touchDrag : true,

              addClassActive :    true,
              afterInit: OwlLoaded,
              afterAction : SetOwlCarouselFirstLast,

            });
          });
        }
      ); 
      function OwlLoaded(el){
        el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
        if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
            el.width('100%');
      };
    </script>
  {/if}
{/block} 
{block name='product_footer'}
	{hook h='displayFooterProduct' product=$product category=$category}
{/block}
                            </div></div>
{block name='page_footer_container'}
	  <footer class="page-footer">
	    {block name='page_footer'}
	    	<!-- Footer content -->
	    {/block}
	  </footer>
	{/block}
</section>

