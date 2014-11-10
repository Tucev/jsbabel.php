<div class="modal fade" id="_jsbLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Logon to JSBabel</h4>
            </div>
            <div class="modal-body">
                <form id="_jsbloginform" autocomplete="on" method="post" > 
                    <fieldset>
                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" for="_jsbloginid">User ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="userid" id="_jsbloginid" placeholder="User ID" class="required form-control autofocus"/>
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" for="_jsbloginpassword">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" id="_jsbloginpassword" placeholder="Password" class="required form-control"/>
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                        </div>
                        <p class="text-center"><small><br><a href="#" id="_jsbloginforget">Forgot password?</a></small></p>
                    </fieldset>
                    <div class="center-text" id = "_jsbWait" style="display: none" >
                        <img src="<?php echo BASE_URL ?>/img/loading.gif" alt="Loading" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="_jsbdologin">Login</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="_jsbMessageDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Error!
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>/js/md5-min.js"></script>
<script type="text/javascript">

    function _jsbDoLogin()
    {
        if (_jsbTestFields(jQuery("#_jsbloginform")))
            _jsbDoLoginInternal();
    }
    function _jsbMessage(msg)
    {
        var jDlg = jQuery("#_jsbMessageDialog");
        jQuery('.modal-body', jDlg).text(msg);
        jDlg.modal();
    }
    function _jsbDoLoginInternal()
    {
        jQuery("#_jsbWait").show();
        setTimeout(function () {
            var pwd = hex_md5(jQuery('#_jsbloginpassword').val());
            var url = "<?php echo BASE_URL ?>/translator/do_login?" + jQuery.param({
                "1": jQuery("#_jsbloginid").val(),
                "2": pwd
            }, true);
            jQuery.getScript(url);
            jQuery("#_jsbWait").hide();
        },
                500);
    }

    function _jsbResetPassword()
    {

    }


    function _jsbGetInvalidFields(scope)
    {
        var invalids = jQuery(".required", scope).filter(function () {
            return this.value == "";
        });
        //controllo approvazione condizioni
        var chk = jQuery('input[type="checkbox"].required', scope);
        if (chk.attr("checked") != "checked") {
            invalids = invalids.add(chk);
        }


        return invalids;
    }

    function _jsbResetError()
    {
        var jGroup = jQuery(this);
        jGroup.off('change', _jsbResetError).removeClass('has-error');
        jQuery('.glyphicon', jGroup).removeClass('glyphicon-warning-sign');
    }
    function _jsbTestFields(scope)
    {
        var invalids = _jsbGetInvalidFields(scope);
        if (invalids.length === 0) {
            return true;
        }
        jQuery(invalids[0]).focus();
        var jGroup = invalids.parents(".form-group");
        jGroup.addClass('has-error').on("change", _jsbResetError);
        jQuery('.glyphicon', jGroup).addClass('glyphicon-warning-sign');
        return false;
    }
    function _jsbOpenLoginModal()
    {
        if (!jQuery.prototype.modal)
        {
            //wait wor bootstrapt script to load
            setTimeout(_jsbOpenLoginModal, 1)
        }
        else
            jQuery("#_jsbLoginModal")
                    .modal('show')
                    .on('shown', function () {
                        jQuery("#_jsbloginid").focus();
                    })
    }
    jQuery(function ()
    {
        jQuery("#_jsbloginforget").click(_jsbResetPassword);
        jQuery("#_jsbdologin").click(_jsbDoLogin);
        jQuery('input').keypress(function (e) {
            if (e.which == 13) {
                _jsbDoLogin();
            }
        });
        _jsbOpenLoginModal();

    });
</script>


