{capture name="extra_id_search"}
<div class="sidebar-field">
    <label for="extra_id">{__("loogaru_extra_id")}</label>
    <input type="text" name="extra_id" id="extra_id" value="{$search.extra_id}" size="32" />
</div>
{/capture}

{include file="views/orders/components/../components/orders_search_form.tpl" dispatch="orders.manage" extra=$smarty.capture.extra_id_search}