<?php
/*********************************************************
*                                                        *
*   (c) 2017 Loogaru, Durkin Andrey                      *
*                                                        *
* This software is under MIT license, so it's FREE.      *
* FREE as you can feel FREE to DONATE at http://looga.ru *
* or https://www.paypal.me/loogaru/15usd				 *
* or http://yasobe.ru/na/loogaru			 			 *
* Thank you!											 *
*														 *
*********************************************************/
use Tygh\Registry;
use Tygh\Shippings\Shippings;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_loogaru_order_id_get_orders($params, &$fields, &$sortings, &$condition, $join, $group) {
	$fields[] = '?:orders.extra_id as extra_id';
	$sortings['extra_id'] = 'extra_id';
	if (!empty($params['extra_id'])) {
        $condition .= db_quote(" AND (?:orders.extra_id LIKE ?l OR ?:orders.order_id LIKE ?l)", '%' . $params['extra_id'] . '%', '%' . $params['extra_id'] . '%');
    }
}

function fn_loogaru_order_id_update_cart_by_data_post(&$cart, $new_cart_data, $auth)
{
    if (!empty($new_cart_data['extra_id'])) {
        $cart['extra_id'] = $new_cart_data['extra_id'];
    }
}