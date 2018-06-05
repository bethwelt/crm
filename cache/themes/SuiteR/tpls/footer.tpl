
</div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- Start Footer Section -->
{if $AUTHENTICATED}
<!-- Start generic footer -->
    <footer>
        <div class="serverstats">
            <span class="glyphicon glyphicon-globe"></span> {$STATISTICS}
        </div>
        <div id="links">
            {$BOTTOMLINKS}
        </div>
        <div id="copyright_data">
            <div id="dialog2" title="{$MOD.LBL_SUITE_SUPERCHARGED}">
                <p>{$MOD.LBL_SUITE_DESC1}</p>
                <br>
                <p>{$MOD.LBL_SUITE_DESC2}</p>
                <br>
                <p>{$MOD.LBL_SUITE_DESC3}</p>
                <br>
            </div>
            <div id="dialog" title="&copy; {$MOD.LBL_SUITE_POWERED_BY}">
                <p></p>
            </div>
            <div id="copyrightbuttons">
            <a id="admin_options">Copyright Servitech. All Rights Reserved.</a>
            <a id="powered_by" > </a>
            </div>
            
        </div>
    </footer>
    
    
<!-- END Generic Footer -->
{/if}
<!-- END Footer Section -->
{literal}
<script>

//qe_init function sets listeners to click event on elements of 'quickEdit' class
 if(typeof(DCMenu) !='undefined'){
    DCMenu.qe_refresh = false;
    DCMenu.qe_handle;
 }
function qe_init(){

    //do not process if YUI is undefined
    if(typeof(YUI)=='undefined' || typeof(DCMenu) == 'undefined'){
        return;
    }


    //remove all existing listeners.  This will prevent adding multiple listeners per element and firing multiple events per click
    if(typeof(DCMenu.qe_handle) !='undefined'){
        DCMenu.qe_handle.detach();
    }

    //set listeners on click event, and define function to call
    YUI().use('node', function(Y) {
        var qe = Y.all('.quickEdit');
        var refreshDashletID;
        var refreshListID;

        //store event listener handle for future use, and define function to call on click event
        DCMenu.qe_handle = qe.on('click', function(e) {
            //function will flash message, and retrieve data from element to pass on to DC.miniEditView function
            ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_LOADING'),800);
            e.preventDefault();
            if(typeof(e.currentTarget.getAttribute('data-dashlet-id'))!='undefined'){
                refreshDashletID = e.currentTarget.getAttribute('data-dashlet-id');
            }
            if(typeof(e.currentTarget.getAttribute('data-list'))!='undefined'){
                refreshListID = e.currentTarget.getAttribute('data-list');
            }
            DCMenu.miniEditView(e.currentTarget.getAttribute('data-module'), e.currentTarget.getAttribute('data-record'),refreshListID,refreshDashletID);
        });

    });
}

    qe_init();

	SUGAR_callsInProgress++;
	SUGAR._ajax_hist_loaded = true;
    if(SUGAR.ajaxUI)
    	YAHOO.util.Event.onContentReady('ajaxUI-history-field', SUGAR.ajaxUI.firstLoad);
</script>
{/literal}
</div>
<div class="modal fade modal-generic" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="title-generic">{$MOD.LBL_GENERATE_PASSWORD_BUTTON_TITLE}</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">{$MOD.LBL_CANCEL}</button>
                <button id="btn-generic" class="btn btn-danger" type="button">{$MOD.LBL_OK}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</body>
</html>
