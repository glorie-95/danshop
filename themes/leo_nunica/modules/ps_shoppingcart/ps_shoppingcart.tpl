{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="cart-block">
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
    <div class="header">
      {if $cart.products_count > 0}
        <a rel="nofollow" href="{$cart_url}">
      {/if}
        <i class="shopping-cart fa fa-shopping-cart"></i>
        <span class="title-cart">{l s='My Cart' d='Shop.Theme.Checkout'}</span>
        <span class="cart-products-count">
          {if $cart.products_count > 0}
            <span class="cart-count">
              {if $cart.products_count > 0}
                {$cart.products_count}
              {/if}
            </span>
            <span class="cart-count-title">
              {if ($cart.products_count > 1)}
                {l s='item(s)' d='Shop.Theme.Global'}
              {else}
                {l s='item' d='Shop.Theme.Global'}
              {/if}
            </span>
            <span class="totals-cart">
              {if ($cart.products_count > 0)}
                - {$cart.totals.total.value}
              {/if}
            </span>
          {else}
            {* <span class="zero">{$cart.products_count} - </span> *}
            <span class="empty"> {l s='empty' d='Shop.Theme.Global'} </span>
          {/if}
        </span>
        <i class="shopping-cart fa fa-shopping-cart after"></i>
      {if $cart.products_count > 0}
        </a>
      {/if}
    </div>
  </div>
</div>
