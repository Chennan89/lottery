<?php
    header("content-type:text/html;charset=utf-8;");
 
    define('DONTACCESS', 1);//不需要額外領取，所有物品都直接發放，則設為1，否則設為0

    define("LOTTERYID", 6);//定义抽奖券的ID //VIP抽奖ID=6，另一个ID=3
    define('DEDUCTNUM', 5);//抽奖时每次减少的抽奖券的数量//VIP抽奖=5， 其他=1

    $device=get_device_type();
    define('DEVICE', $device);
    
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    define('LANG', $lang);// zh  en

    if(LANG == 'en'){
        define('MYCARD_NAME', 'MyCard gift card');
        define('CARD_711', '711 gift card');
        define('TICKET', 'raffle tickets');    

        define('Gold8000', '8K Coins');                 
        define('Gold20000', '20K Coins');                 
        define('Gold15000', '15K Coins');                 
        define('Gold10000', '10K Coins');  
        define('AGAIN', '重新抽獎');   

        define('RECEIVE', 'receive'); 
        define('RECEIVED', 'received');
        define('NORECORDS', 'No Records.');
    }else if(LANG == 'zh'){
        define('MYCARD_NAME', 'MyCard卡');
        define('CARD_711', '711卡');
        define('TICKET', '抽獎券');

        define('Gold8000', '8K金幣');                 
        define('Gold20000', '20K金幣');                 
        define('Gold15000', '15K金幣');                 
        define('Gold10000', '10K金幣');  
        define('AGAIN', '重新抽獎');  

        define('RECEIVE', '領取'); 
        define('RECEIVED', '已領取'); 
        define('NORECORDS', '沒有中獎紀錄'); 
    }

    if(LANG == 'en'){
        //placeholder
        define('TITLE', 'The Lucky Roller');
        //define('TITLE', 'Slot Tournament');
        define('TICKETLEFT1', 'You have');
        define('TICKETLEFT2', 'raffle tickets.');
        define('DESCRIPT_TITLE', 'game rules：');
        define('DESCRIPT_S1', '1. players receive 1 lottery ticket every 1$ or NTD30  paid in the game<br />');
        define('DESCRIPT_S2', '2. players can roll one time when collecting 5 lottery tickets.');
        
        define('RULES', 'Rules & Details');
        define('REWARDS', 'my winning record'); 

        define('REWARDSSEARCH', 'Rewards Check');   

        define('TB_DATE', 'Date');
        define('TB_REWARD', 'Reward');
        define('TB_STATE', 'State');

        define('CARD_NO', 'Card Number');
        define('CARD_PWD', 'Password');
        define('CARD_SAVE', 'Please keep your information safe.');

        define('SUC_INFO_S1', 'Your reward golden beans have sended to your account');
        define('SUC_INFO_S2', 'please check it in the game.');

        define('NOTICKETSLEFT', 'Your tickets is insufficient, go to tournaments and win more.');
        define('LOADING', 'Data loading,hold on please.');
        define('CHECK_LOTTERY', 'Please check your item in Reward Check.');
        define('CONGRATULATE', 'Congratulations! You win');
        define('RECEIVED', 'received');
    }else if(LANG == 'zh'){
        //placeholder
        define('TITLE', '幸運大轉盤');
        define('TICKETLEFT1', '您還有');
        define('TICKETLEFT2', '張抽獎卡');
        define('DESCRIPT_TITLE', '活動規則：');
        define('DESCRIPT_S1', '1.充值會獲得抽獎卡，每充值$1會獲得1張抽獎卡。<br />');
        define('DESCRIPT_S2', '2.每5張抽獎卡可抽獎一次。');

        define('RULES', '規則明細');
        define('REWARDS', '我的中獎紀錄');

        define('REWARDSSEARCH', '獎品查詢');

        define('TB_DATE', '日期');
        define('TB_REWARD', '獎品');
        define('TB_STATE', '狀態');

        define('SUC_INFO_S1', '您的獎品已發送至您的賬戶中');
        define('SUC_INFO_S2', '請在遊戲中查詢');

        define('CARD_NO', '卡號:');
        define('CARD_PWD', '密碼:');
        define('CARD_SAVE', '請妥善保管好您的信息.');

        define('NOTICKETSLEFT', '您的抽獎卡不足5張，再去錦標賽中贏取吧.');
        define('LOADING', '加载中，请稍后.');
        define('CHECK_LOTTERY', '請到中獎中心領取您的獎品.');       
        define('CONGRATULATE', '恭喜您獲得');
        define('RECEIVED', '已領取'); 
    }
  //配置SchemeID   
    define('RESULT711', 1885);//711兌換券
    define('RESULTMYCARD', 1886);//mycard兌換券

    define('GETLOTTERY', 1887);//中抽獎券
    define('GET10K', 1888);//10000金幣
    define('GET8K', 1889);//8K金幣
    define('GET20K', 1890);//20K金幣
    define('GET15K', 1891);//12K金幣
    define('GETNO', 0);//沒中獎

    define('SCHEME711', 1147);//用711券兌獎
    define('SCHEMEMYCARD', 1148);//用mycard券兌獎
    define("LOTTERYID", 3);//定义抽奖券的ID
$prizeArrO=array(
        GETNO=>array('prize'=>AGAIN, 'angle'=>array(0), 'rotBegin'=>'255', 'rotEnd'=>'285', 'hasImg'=>'./images/newImgs/again.png', 'spName'=>'AGAIM'),
        RESULT711=>array('prize'=>CARD_711, 'angle'=>array(315), 'rotBegin'=>'300', 'rotEnd'=>'330', 'hasImg'=>'./images/newImgs/7-eleven.png', 'spName'=>'CARD_711'),
        RESULTMYCARD=>array('prize'=>MYCARD_NAME, 'angle'=>array(270), 'rotBegin'=>'-15', 'rotEnd'=>'15', 'hasImg'=>'./images/newImgs/mycard.png', 'spName'=>'MYCARD_NAME'),
        GETLOTTERY=>array('prize'=>TICKET, 'angle'=>array(225), 'rotBegin'=>'30', 'rotEnd'=>'60', 'hasImg'=>'./images/newImgs/lottery.png', 'spName'=>'TICKET'),            
        GET10K=>array('prize'=>Gold10000, 'angle'=>array(180), 'rotBegin'=>'75', 'rotEnd'=>'105', 'hasImg'=>'./images/newImgs/10k.png', 'spName'=>'Gold10000'),
        GET8K=>array('prize'=>Gold8000, 'angle'=>array(135), 'rotBegin'=>'120', 'rotEnd'=>'150', 'hasImg'=>'./images/newImgs/8k.png', 'spName'=>'Gold8000'),                        
        GET20K=>array('prize'=>Gold20000, 'angle'=>array(90), 'rotBegin'=>'166', 'rotEnd'=>'194', 'hasImg'=>'./images/newImgs/20k.png', 'spName'=>'Gold20000'),                     
        GET15K=>array('prize'=>Gold15000, 'angle'=>array(45), 'rotBegin'=>'210', 'rotEnd'=>'238', 'hasImg'=>'./images/newImgs/20k.png', 'spName'=>'Gold20000')
    );
    function get_device_type(){
        $agent=strtolower($_SERVER['HTTP_USER_AGENT']);
        $type = 'Android';
        if(strpos($agent, 'iphone') || strpos($agent, 'ipad') ){
            $type = 'Ios' ;
        } 
        if(strpos($agent, 'android')){
            $type= 'Android' ;
        }
        return $type;
    }

    function getPrize(){
            }
