[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="list"}]
[{assign var="where" value=$oView->getListFilter()}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
    [{else}]
    [{assign var="readonly" value=""}]
    [{/if}]

<script type="text/javascript">
    <!--
    window.onload = function ()
    {
        top.reloadEditFrame();
        [{ if $updatelist == 1}]
        top.oxid.admin.updateList('[{ $oxid }]');
        [{ /if}]
    }
    //-->
</script>

<div id="liste">

    <form name="search" id="search" action="[{ $oViewConf->getSelfLink() }]" method="post">
        [{include file="_formparams.tpl" cl="mibexample4_list" lstrt=$lstrt actedit=$actedit oxid=$oxid fnc="" language=$actlang editlanguage=$actlang}]
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <colgroup>
                [{block name="admin_mibexample4_list_colgroup"}]
            <col width="3%">
            <col width="47%">
            <col width="48%">
            <col width="2%">
                [{/block}]
            </colgroup>
            <tr class="listitem">
                [{block name="admin_mibexample4_list_filter"}]
                <td valign="top" class="listfilter first" align="right">
                    <div class="r1"><div class="b1">&nbsp;</div></div>
                </td>
                <td valign="top" class="listfilter" height="20">
                    <div class="r1"><div class="b1">
                            <input class="listedit" type="text" size="30" maxlength="128" name="where[mib_test][mibtitle]" value="[{ $where.mib_test.mibtitle }]">
                        </div></div>
                </td>
                <td valign="top" class="listfilter" height="20" colspan="2">
                    <div class="r1"><div class="b1">
                            <div class="find">
                                <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
                            </div>
                        </div></div>
                </td>
                [{/block}]
            </tr>
            <tr>
                [{block name="admin_mibexample4_list_sorting"}]
                <td class="listheader first" height="15" width="30" align="center">&nbsp;</td>
                <td class="listheader" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'mib_test', 'mibtitle', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="MIB_LIST_TITLE" }]</a></td>
                <td class="listheader" colspan="2">&nbsp;</td>
                [{/block}]
            </tr>

            [{assign var="blWhite" value=""}]
            [{assign var="_cnt" value=0}]
            [{foreach from=$mylist item=listitem}]
            [{assign var="_cnt" value=$_cnt+1}]
            <tr id="row.[{$_cnt}]">

                [{block name="admin_mibexample4_list_item"}]
                [{ if $listitem->blacklist == 1}]
                [{assign var="listclass" value=listitem3 }]
                [{ else}]
                [{assign var="listclass" value=listitem$blWhite }]
                [{ /if}]
                [{ if $listitem->getId() == $oxid }]
                [{assign var="listclass" value=listitem4 }]
                [{ /if}]
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating">&nbsp</a></div></td>
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('[{ $listitem->mib_test__oxid->value}]');" class="[{ $listclass}]">[{ if $listitem->mib_test__mibtitle->value }][{ $listitem->mib_test__mibtitle->value }][{else}]---[{/if}]</a></div></td>
                <td colspan="2" class="[{ $listclass}]">
                    [{if !$readonly}]
                    <a href="Javascript:top.oxid.admin.deleteThis('[{ $listitem->mib_test__oxid->value }]');" class="delete" id="del.[{$_cnt}]" alt="" [{include file="help.tpl" helpid=item_delete}]></a>
                    [{/if}]
                </td>
                [{/block}]
            </tr>
            [{if $blWhite == "2"}]
            [{assign var="blWhite" value=""}]
            [{else}]
            [{assign var="blWhite" value="2"}]
            [{/if}]
            [{/foreach}]
            [{include file="pagenavisnippet.tpl" colspan="4"}]
        </table>
    </form>
</div>

[{include file="pagetabsnippet.tpl"}]


<script type="text/javascript">
    if (parent.parent)
    {   parent.parent.sShopTitle   = "[{$actshopobj->oxshops__oxname->getRawValue()|oxaddslashes}]";
        parent.parent.sMenuItem    = "[{ oxmultilang ident="CONTENT_LIST_MENUITEM" }]";
        parent.parent.sMenuSubItem = "[{ oxmultilang ident="CONTENT_LIST_MENUSUBITEM" }]";
        parent.parent.sWorkArea    = "[{$_act}]";
        parent.parent.setTitle();
    }
</script>
</body>
</html>