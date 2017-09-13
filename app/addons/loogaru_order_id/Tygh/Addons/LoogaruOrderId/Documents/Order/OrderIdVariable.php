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

namespace Tygh\Addons\LoogaruOrderId\Documents\Order;

use Tygh\Template\Document\Order\Context;
use Tygh\Template\IVariable;
use Tygh\Registry;

class OrderIdVariable implements IVariable
{
    public $extra_id;


    public function __construct(Context $context)
    {
	$order = $context->getOrder();
	if (!empty($order->data['extra_id'])) {
        $this->extra_id = $order->data['extra_id'];
	   	}
	  
    }
}
