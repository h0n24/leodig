{if !empty($HOOK_LEFT_COLUMN)&& empty($HOOK_RIGHT_COLUMN)}
{assign var='LAYOUT_COLUMN_SPANS' value=array(3,9,0) scope='global'}
{elseif empty($HOOK_LEFT_COLUMN)&& !empty($HOOK_RIGHT_COLUMN)}
{assign var='LAYOUT_COLUMN_SPANS' value=array(0,9,3) scope='global'}
{elseif empty($HOOK_LEFT_COLUMN)&&empty($HOOK_RIGHT_COLUMN)}
{assign var='LAYOUT_COLUMN_SPANS' value=array(0,12,0) scope='global'}
{else}
{assign var='LAYOUT_COLUMN_SPANS' value=array(3,6,3) scope='global'}
{/if}

{if ($page_name != 'index' AND $page_name != 'product' AND $page_name != 'order' AND $page_name != 'authentication' AND $page_name != 'order-confirmation' AND $page_name != 'validation' AND $page_name != 'payment')}

{if $LAYOUT_COLUMN_SPANS[0]}
<!-- Left -->
<section id="left_column" class="column sidebar col-md-{$LAYOUT_COLUMN_SPANS[0]}">

		{$HOOK_LEFT_COLUMN}
</section>
{/if}
{else}
{assign var='LAYOUT_COLUMN_SPANS' value=array(0,12,0) scope='global'}
{/if}

<!-- Center -->
<section id="center_column" class="col-md-{$LAYOUT_COLUMN_SPANS[1]}">
	<div class="{if $classfix == 0}maincontainer {/if}clearfix">