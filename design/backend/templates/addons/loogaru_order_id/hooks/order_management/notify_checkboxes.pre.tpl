{$order_info.extra_id = ""}
{if $cart.order_id != ""}
	{$order_info = fn_get_order_info($cart.order_id)}
{/if}
<label for="extra_id">{__("loogaru_extra_id")}</label>
<input class="span6" size="32" maxlength="32" type="text" name="extra_id" value="{$order_info.extra_id}" />