<?php
function isRightTWId(string $twid){
    $ret = 0;   // 格式錯誤
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)>0){

        $n12s = substr($twid, 0, 1);
        //echo $n12s;
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $n12 = strpos($letters, $n12s) + 10;
        $n1 = (int)($n12 / 10);
        $n2 = $n12 % 10;
        $n3 = substr($twid, 1, 1);
        $n4 = substr($twid, 2, 1);
        $n5 = substr($twid, 3, 1);
        $n6 = substr($twid, 4, 1);
        $n7 = substr($twid, 5, 1);
        $n8 = substr($twid, 6, 1);
        $n9 = substr($twid, 7, 1);
        $n10 = substr($twid, 8, 1);
        $n11 = substr($twid, 9, 1);

        $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 +
            $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
        if ($sum %10 == 0){
            $ret = 1;   // OK
        }else{
            $ret =-1;   // 檢查碼沒過
        }
    }

    return $ret;

}
function createLottery(){
    $lottery = range(1,49);
    shuffle($lottery);
    for ($i=0; $i<6; $i++){
        $ret[] = $lottery[$i];
    }
    sort($ret);
    return $ret;
}