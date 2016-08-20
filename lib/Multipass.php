<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/19/16 6:05 PM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/multipass Shopify API Reference for Multipass
 */

namespace PHPShopify;


use PHPShopify\Exception\ApiException;

class Multipass extends ShopifyAPI
{

    /**
     * Multipass constructor.
     *
     * @param array $config
     * @param integer $id
     *
     * @throws ApiException
     *
     * @return void
     */
    public function __construct($config, $id = null)
    {
        throw new ApiException("Multipass API is not available yet!");
    }
}