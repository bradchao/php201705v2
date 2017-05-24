<form action="brad18.php" method="get">
    Name: <input type="text" name="account" /><br>
    Password: <input type="password" name="passwd" /><br>
    Birthday: <input type="date" name="birthday" /><br>
    <select name="area">
        <option value="401">北屯區</option>
        <option value="402" selected>南屯區</option>
        <option value="403">溪屯區</option>
        <option value="404">屯區</option>
    </select><br>
    <input type="radio" name="gender" value="f" checked>Female
    <input type="radio" name="gender" value="m">Male
    <br>
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打籃球
    <input type="checkbox" name="like[]" value="3">打電動<br>
    <input type="checkbox" name="like[]" value="4">打麻將
    <input type="checkbox" name="like[]" value="5">打毛線
    <input type="checkbox" name="like[]" value="6">打小孩<br>
    <textarea name="memo"></textarea>
    <input type="file" name="upload" />
    <input type="submit" name='btn1' value="送出1">
</form>