<?php
require_once("../../main.php");
require_once("../../lang.php");
?>
<?php
session_start();
header("Content-type: application/x-javascript");
?>
(function($, W, D) {
    var JQUERY4U = {};
    JQUERY4U.UTIL = {
        setupFormValidation: function() {
            $('#details').validate({
                errorElement: "span",
                rules: {
                    ccname: {
                        required: true
                    },
                    ccno: {
                        required: true,
                        maxlength: 16,
                        creditcard: true
                    },
                    cvv: {
                        required: true,
                        minlength: 3,
                        digits: true,
                    },
                    passjp: {
                        required: true,
                        minlength: 6,
                    },
                },
                groups: {},
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "fname")
                        error.insertAfter("#nameerror");
                    else
                        error.insertAfter(element);
                },
                messages: {
                    ccname: {
                        required: "<?php echo $lang['error']['ccname'];?> &nbsp;",
                    },
                    ccno: {
                        required: "<?php echo $lang['error']['ccno'];?> &nbsp;",
                        minlength: jQuery.validator.format("<?php echo $lang['error']['ccno_check'];?> &nbsp;"),
                        creditcard: jQuery.validator.format("<?php echo $lang['error']['ccno_check'];?> &nbsp;"),
                    },
                    cvv: {
                        required: "<?php echo $lang['error']['secode'];?> &nbsp;",
                        minlength: jQuery.validator.format("<?php echo $lang['error']['secode_check'];?> &nbsp;"),
                        digits: jQuery.validator.format("<?php echo $lang['error']['secode_check'];?> &nbsp;"),
                    },
                    passjp: {
                        required: "パスワードを入力してください&nbsp;",
                        minlength: "パスワードを確認してください。長さは6文字以上&nbsp;",
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
            $("#gobtn").click(function() {
                $("#details").submit();
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
})(jQuery, window, document);
