[{$smarty.block.parent}]
<tr>
    <td class="edittext">
        [{oxmultilang ident="MIB_ARTICLE_MAIN_SECOND_HEADLINE"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" name="editval[oxarticles__mibsecondheadline]" value="[{if !$edit->oxarticles__mibsecondheadline->value}][{$edit->defaultValueSecondHeadline}][{else}][{$edit->oxarticles__mibsecondheadline->value}][{/if}]">
    </td>
</tr>