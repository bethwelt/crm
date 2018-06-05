
<script>
    {literal}
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
                    width: 700
                });

        $('.help-search').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    {/literal}
</script>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
                          
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='opportunity_c_advanced'>{sugar_translate label='LBL_OPPORTUNITY' module='CO_Costs'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
<input type="text" name="{$fields.opportunity_c_advanced.name}"  class="sqsEnabled"   id="{$fields.opportunity_c_advanced.name}" size="" value="{$fields.opportunity_c_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.opportunity_id_c_advanced.name}" value="{$fields.opportunity_id_c_advanced.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.opportunity_c_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.opportunity_c_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"popup_query_form","field_to_name_array":{"id":"opportunity_id_c_advanced","name":"opportunity_c_advanced"}}{/literal}, "single", true);'>{sugar_getimage alt=$app_strings.LBL_ID_FF_SELECT name="id-ff-select" ext=".png" other_attributes=''}</button><button type="button" name="btn_clr_{$fields.opportunity_c_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.opportunity_c_advanced.name}.value = ''; this.form.{$fields.opportunity_id_c_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">{sugar_getimage name="id-ff-clear" alt=$app_strings.LBL_ID_FF_CLEAR ext=".png" other_attributes=''}</button>
</span>

                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='client_c_advanced'>{sugar_translate label='LBL_CLIENT' module='CO_Costs'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
<input type="text" name="{$fields.client_c_advanced.name}"  class="sqsEnabled"   id="{$fields.client_c_advanced.name}" size="" value="{$fields.client_c_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.account_id_c_advanced.name}" value="{$fields.account_id_c_advanced.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.client_c_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.client_c_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"popup_query_form","field_to_name_array":{"id":"account_id_c_advanced","name":"client_c_advanced"}}{/literal}, "single", true);'>{sugar_getimage alt=$app_strings.LBL_ID_FF_SELECT name="id-ff-select" ext=".png" other_attributes=''}</button><button type="button" name="btn_clr_{$fields.client_c_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.client_c_advanced.name}.value = ''; this.form.{$fields.account_id_c_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">{sugar_getimage name="id-ff-clear" alt=$app_strings.LBL_ID_FF_CLEAR ext=".png" other_attributes=''}</button>
</span>

                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='amount_advanced'>{sugar_translate label='LBL_AMOUNT' module='CO_Costs'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{if strlen($fields.amount_advanced.value) <= 0}
{assign var="value" value=$fields.amount_advanced.default_value }
{else}
{assign var="value" value=$fields.amount_advanced.value }
{/if}  
<input type='text' name='{$fields.amount_advanced.name}' 
    id='{$fields.amount_advanced.name}' size='30' 
     
    value='{$value}' title='' tabindex='' > 
                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='probability_advanced'>{sugar_translate label='LBL_PROBABILITY' module='CO_Costs'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{if strlen($fields.probability_advanced.value) <= 0}
{assign var="value" value=$fields.probability_advanced.default_value }
{else}
{assign var="value" value=$fields.probability_advanced.value }
{/if}  
<input type='text' name='{$fields.probability_advanced.name}' 
    id='{$fields.probability_advanced.name}' size='30' 
     
    value='{$value}' title='' tabindex='' > 
                    </td>
            </tr>
    <tr>
        <td colspan='20'>
            &nbsp;
        </td>
    </tr>
    {if $DISPLAY_SAVED_SEARCH}
        <tr>
            <td colspan='2'>
                <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                    {capture assign="alt_show_hide"}{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}{/capture}
                    {sugar_getimage alt=$alt_show_hide name="advanced_search" ext=".gif" other_attributes='border="0" id="up_down_img" '}
                    &nbsp;{$APP.LNK_SAVED_VIEWS}
                </a><br>
                <input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'>
                <p>
            </td>
            <td scope='row' width='10%' nowrap="nowrap">
                {sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:
            </td>
            <td width='30%' nowrap>
                <input type='text' name='saved_search_name'>
                <input type='hidden' name='search_module' value=''>
                <input type='hidden' name='saved_search_action' value=''>
                <input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button'
                       type='button' name='saved_search_submit'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
            </td>
            <td scope='row' width='10%' nowrap="nowrap">
                {sugar_translate label='LBL_MODIFY_CURRENT_FILTER' module='SavedSearch'}:
            </td>
            <td width='30%' nowrap>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")'
                       value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete'
                       type='button'>
                <br><span id='curr_search_name'></span>
            </td>
        </tr>
        <tr>
            <td colspan='6'>
                <div style='{$DISPLAYSS}' id='inlineSavedSearch'>
                    {$SAVED_SEARCH}
                </div>
            </td>
        </tr>
    {/if}
    {if $displayType != 'popupView'}
        <tr>
            <td colspan='5'>
                <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){ldelim}document.getElementById("saved_search_select").options[0].selected=true;{rdelim} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
                {if $DOCUMENTS_MODULE}
                    &nbsp;
                    <input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" type="button" class="button"
                           value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                {/if}
                <a id="basic_search_link" href="javascript:void(0)"
                   accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_BASIC_FILTER}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_FILTER_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>
        </span>
            </td>
            <td class="help">
                {if $DISPLAY_SEARCH_HELP}
                    <img border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
                {/if}
            </td>
        </tr>
    {/if}
</table>

<script>
    {literal}
    if (typeof(loadSSL_Scripts) == 'function') {
        loadSSL_Scripts();
    }
    {/literal}
</script>
<script>
    {literal}
    $(document).ready(function () {
        $('#basic_search_link').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|basic_search', '{/literal}{$module}{literal}|advanced_search');
        });
    });
    {/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['popup_query_form_modified_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_created_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_assigned_user_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_currency_name_advanced']={"form":"popup_query_form","method":"query","modules":["Currencies"],"group":"or","field_list":["name","id"],"populate_list":["currency_name_advanced","currency_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_opportunity_c_advanced']={"form":"popup_query_form","method":"query","modules":["Opportunities"],"group":"or","field_list":["name","id"],"populate_list":["opportunity_c_advanced","opportunity_id_c_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_client_c_advanced']={"form":"popup_query_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["popup_query_form_client_c_advanced","account_id_c_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id_c"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_partnername_c_advanced']={"form":"popup_query_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["popup_query_form_partnername_c_advanced","account_id1_c_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id1_c"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_deliversupplier_c_advanced']={"form":"popup_query_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["popup_query_form_deliversupplier_c_advanced","account_id2_c_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id2_c"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_freightsupplier_c_advanced']={"form":"popup_query_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["popup_query_form_freightsupplier_c_advanced","account_id3_c_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id3_c"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_forwardingagent_c_advanced']={"form":"popup_query_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["popup_query_form_forwardingagent_c_advanced","account_id4_c_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id4_c"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_financialsupplier_c_advanced']={"form":"popup_query_form","method":"query","modules":["Bt_Bank"],"group":"or","field_list":["name","id"],"populate_list":["financialsupplier_c_advanced","bt_bank_id_c_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_customcost_c_advanced']={"form":"popup_query_form","method":"query","modules":["CU_Customs"],"group":"or","field_list":["name","id"],"populate_list":["customcost_c_advanced","cu_customs_id_c_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>{/literal}