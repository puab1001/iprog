{include file="header.tpl" title="MVC Demo"}
<div id="content2">
<p>{$smarty.now|date_format:"%d.%m.%Y  %H:%M:%S"} &mdash; 
   <em>{$products|@count} Einträge gefunden</em></p>

{* Jetzt kommen die Daten: *}
{if $products|@count > 0}

<table>
  <tr><th>name</th><th>description</th><th>categoryid</th></tr>
  {foreach item=c from=$products}
   <tr><td>{$c->name}</td>
       <td>{$c->description|truncate:25}</td>
       <td>{$c->categoryid|lower}</td>
       <td><img src='/images/{$c->imageurl}' alt='foto'/></td>
   </tr>
  {/foreach}
</table>

{else}
<p><em>Keine Einträge vorhanden</em></p>
{/if}

</div>
{include file="footer.tpl"}
