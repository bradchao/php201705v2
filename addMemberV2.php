<script>
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function precheck() {
        var account =
            document.getElementById('account').value;
        alert(account);
        xmlhttp.onreadystatechange = callBack1;
        xmlhttp.open("GET", "brad52.php?a="+account, true);
        xmlhttp.send();
    }

    function callBack1() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("test1").innerHTML =
                this.responseText;
        }
    }


</script>
<form action="addAccount.php">
    <input id='account' name="account" onblur="precheck()" /><br>
    <input type="password" name="passwd" /><br>
    <input name="rname" /><br>
    <input type="submit" value="add" />
</form>
<hr>
<div id="test1"></div>