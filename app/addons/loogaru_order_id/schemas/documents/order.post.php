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

$schema['extra_id'] = array(
    'class' => '\Tygh\Addons\LoogaruOrderId\Documents\Order\OrderIdVariable',
	'arguments' => array('#context'),
);

return $schema;