<?php
    if (isset($_GET['twid'])){
        $twid = $_GET['twid'];

        if (preg_match('/^[A-Z][12][0-9]{8}/', $twid)>0){
            //
            $n12s = substr($twid, 0, 1);
            //echo $n12s;
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $n12 = strpos($letters, $n12s) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;


        }else{
            echo 'XX';
        }



    }


?>
<form>
    <input type="text" name="twid" />
    <input type="submit" value="check" />
</form>

