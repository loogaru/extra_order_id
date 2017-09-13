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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
	'get_orders',
	'update_cart_by_data_post'
);
