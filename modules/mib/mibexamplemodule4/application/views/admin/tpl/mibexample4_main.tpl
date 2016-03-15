[{include file="headitem.tpl" title="CONTENT_MAIN_TITLE"|oxmultilangassign}]

<script type="text/javascript">
    <!--
    function ShowMenueFields( iVal)
    {
        if( iVal == 2)
        {
            document.getElementById('cattree').style.visibility = 'visible';
        }
        else
        {
            document.getElementById('cattree').style.visibility = 'hidden';
        }

        if( iVal == 3)
        {
            document.getElementById('manuell').style.visibility = 'visible';
        }
        else
        {
            document.getElementById('manuell').style.visibility = 'hidden';
        }
    }
    //-->
</script>

[{ if $readonly }]
[{assign var="readonly" value="readonly disabled"}]
[{else}]
[{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{ $oViewConf->getSelfLink() }]" method="post">
    [{ $oViewConf->getHiddenSid() }]
    <input type="hidden" name="oxid" value="[{ $oxid }]">
    <input type="hidden" name="cl" value="mibexample4_main">
    <input type="hidden" name="editlanguage" value="[{ $editlanguage }]">
</form>

<table cellspacing="0" cellpadding="0" border="0" width="98%">
    <colgroup><col width="30%"><col width="5%"><col width="65%"></colgroup>
    <form name="myedit" id="myedit" action="[{ $oViewConf->getSelfLink() }]" method="post">
        [{ $oViewConf->getHiddenSid() }]
        <input type="hidden" name="cl" value="mibexample4_main">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="oxid" value="[{ $oxid }]">
        <input type="hidden" name="editval[mib_test__oxid]" value="[{ $oxid }]">
        <input type="hidden" name="folderclass" value="oxcontent">
        <tr>
            <td valign="top" class="edittext" width="200">
                <table cellspacing="0" cellpadding="0" border="0">
                    [{block name="admin_mibexample4_main_form"}]
                    <tr>
                        <td class="edittext">
                            [{ oxmultilang ident="MIB_MAIN_IDENT" }]
                        </td>
                        <td class="edittext">
                            <input type="text" class="editinput" size="28" name="editval[mib_test__mibident]" value="[{$edit->mib_test__mibident->value}]">
                        </td>
                    </tr>
                    <tr>
                        <td class="edittext">
                            [{ oxmultilang ident="MIB_MAIN_TITLE" }]
                        </td>
                        <td class="edittext">
                            <input type="text" class="editinput" size="28" name="editval[mib_test__mibtitle]" value="[{$edit->mib_test__mibtitle->value}]">
                        </td>
                    </tr>
                    [{/block}]
                    <tr>
                        <td class="edittext">
                        </td>
                        <td class="edittext">
                            <input type="submit" class="edittext" name="saveExample" value="[{ oxmultilang ident="GENERAL_SAVE" }]" onClick="Javascript:document.myedit.fnc.value='save'"><br>
                        </td>
                    </tr>
                </table>
            </td>
            <td>&nbsp;</td>
            <!-- Anfang rechte Seite -->
            <td valign="top" class="edittext" align="left">
                [{block name="admin_mibexample4_main_editor"}]
                    <textarea cols="50" rows="10" name="editval[mib_test__mibdescription]">[{$edit->mib_test__mibdescription->value}]</textarea>
                [{/block}]
            </td>
            <!-- Ende rechte Seite -->
        </tr>
</table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
