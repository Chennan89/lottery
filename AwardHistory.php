<?php       
    header("content-type:text/html;charset=utf-8;");
    include_once('config.php');

    /*---------------------防止盗用链接直接进入结束---------------------------*/
    if($_POST['type']=='getPrize'){
        $rand1=rand(1885,1891);
        //$arr=array(0,$rand1);↑
        //$index=$arr[rand(0,1)];
        //$awardInfo=$prizeArrO[$index];
        $awardInfo=$prizeArrO[$rand1];

        $data['message']=$awardInfo['prize'];
        $data['prizeID']=$awardInfo['prizeID'];
        $data['angle']=$awardInfo['angle'][0];
        $data['hasImg']=$awardInfo['hasImg'];
        $data_json=json_encode($data);
        echo $data_json;
    }else{
        echo '不合法！！！';
        die;
    }
?>
