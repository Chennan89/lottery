<?php
	include_once('config.php');
	$prizeArr=json_encode($prizeArrO);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="renderer" content="webkit|ie-comp|ie-stand" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="format-detection" content="telephone=no">
		<!-- <meta name="viewport" content="initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"> -->
		<title></title>
		<meta name="wap-font-scale" content="no">
		<!--<meta name="screen-orientation" content="portrait">UC强制横屏-->
		<link rel="stylesheet" href="./css/common.css" type="text/css">
		<?php
			if($lang=='en'){
		?>
				<link rel="stylesheet" href="./css/hor_en.css" type="text/css" id="hor" class="css">
		<?php
			}else{
		?>
				<link rel="stylesheet" href="./css/hor.css" type="text/css" id="hor" class="css">
		<?php
			}
		?>
		<script type="text/javascript" src="./jquery.min.js"></script>
		<!-- <script type="text/javascript" src="./awardRotate.js"></script> -->
		
	</head>
	<body>
	<!-- width:100%;background:url(../images/BG.png) #490708;background-position:45% 45px;background-size:103%;background-repeat:no-repeat;/*background-color:#390708;*/color:#FFF;font-family:黑体;font-weight:bold;} -->

		<div id="BGCont" style="width:100%;z-index:-1;position:absolute;top:45px;overflow:hidden;">
			<img src="./images/BG.png" id="AllBG" style="width:100%;position:absolute;z-index:-1;"/>
		</div>
		<header id="header">
			<img src="./images/ret.png" height=20 id="ret" style="position:absolute;left:1em;top:10px;height:20px;width:20px;" />
	    	<!-- <img src="./images/titleBG.png" id="titleBG" /> -->
	    	<div id="titleBack">
	    		<span class="b1"></span>
	    		<span class="b2"></span>
	    		<span class="b3"></span>
	    	</div>
	    	<span class="title stroke"><?=TITLE;?></span>
	    </header>
		<!--用来做整个的扑克背景-->
		<div id="wholeBack" style=""></div>
	    <div id="spinBackground" style=""></div>
		<div id="info">
			<img alt="figure" id="figure"/>
			<article>
				<span id="name"><?=$nickName;?></span>
				<span id="ticketLeft"><?=TICKETLEFT1;?><span id="yellow" class="stroke leftLottery">888</span><?=TICKETLEFT2;?></span>
			</article>
		</div>
		<div class="turntable-ele">
			<div class="pointer">
	        	<img src="./images/pointer<?=$suffix;?>.png" alt="pointer" />
	        </div>
	        <div class="arrow">
	        	<img src="./images/arrow.png" alt="arrow" />
	        </div>
	        
		</div>
	    
		<div id="spinArea">
			<div class="bg">
		    	<img src="./images/background.png" id="background"/>
				<img id="leftDeng" src="./images/rotBG.png" style="" />
				<img id="rightDeng" src="./images/rotBG.png" style=""/>
		    </div>

			<div class="turntable-bg">
		        <div class="rotate" id="rotate">
		        		<img id="rotate1" src="./images/lun.png" alt="turntable" style="">
		        		<canvas id="rotate2" width="960" height="960" style=""></canvas>
		        </div>
		    </div>
		</div>
		<div id="intro">
			<span id="title"><?=DESCRIPT_TITLE;?></span>
			<span id="introduction">
				<span><?=DESCRIPT_S1;?></span>
				<p><?=DESCRIPT_S2;?></p>
				
			</span>

			<div class="btns2">
				<button id="showRules" class="stroke"><?=RULES;?></button>
				<button id="AwardHistory" class="stroke"><?=REWARDS;?></button>
			</div>
		</div>
		<div class="btns">
			<button id="showRulesH" class="stroke" style="display:none;"><?=RULES;?></button>
			<span id="AwardHistoryCont"><button id="AwardHistoryH" class="stroke"><?=REWARDS;?></button></span>
		</div>
		
		<div id="popup">
	        <header>
	        	<img src="./images/titleBG.png" />
	        	<span class="title"><?=RULES;?></span>
	        	<span id="close"></span>
	        </header>
	        <article id="outerArticle">
	        	<title>活動規則:</title>
	        	<article>生棟覆屋IEUR肯定能GV的父母官杰剋日歐鞥克勞福德生棟覆屋IEUR肯定能GV的父母官杰剋日歐鞥克勞福德生棟覆屋IEUR肯定能GV的父母官杰剋日歐鞥克勞福德</article>
	        	<title>活動獎項配置:</title>
	        	<article>生棟覆屋IEUR肯定能GV的父母官杰剋日歐鞥克勞福德</article>
	        	<title>獎勵發放:</title>
	        	<article>生棟覆屋IEUR肯定能GV的父母官杰剋日歐鞥克勞福德</article>
	        </article>
	    </div>
		<div id="awardPop">
	        <header>
	        	<img src="./images/titleBG.png" />
	        	<span class="title"><?=REWARDSSEARCH;?></span>
	        	<span class="ret"></span>
	        </header>
			<img src="./images/loading.gif" id="loading" />
	        <article id="awardArticle">
	        	<table id="awards">
			        <thead>
				        <tr>
				            <th><?=TB_DATE;?></th>
				            <th><?=TB_REWARD;?></th>
				            <!-- <th></th> -->
				            <th><?=TB_STATE;?></th>
				        </tr>
				    </thead>
				    <tbody></tbody>
			    </table>
	        </article>
	    </div>
		<img src="./images/BG.jpg" id="roatBG"/>

		<div id="sucPop">
	        <header>
	        	<span class="ret"></span>
	        </header>
	        <article id="sucArticle">
	        	<span><?=SUC_INFO_S1;?></span>
	        	<span><?=SUC_INFO_S2;?></span>
	        </article>

	        <article id="pwdArticle">
	        	<div style="margin-bottom:5px;">
	        		<span style="display:inline-block;width:25%;text-align:right;"><?=CARD_NO;?></span>
	        		<span id="cardNo" style="display:inline-block;width:50%;line-height: 1.5em;"><img src="./images/loading.gif" style="width:10%" /></span>
	        	</div>
	        	<div>
	        		<span style="display:inline-block;width:25%;text-align:right;"><?=CARD_PWD;?></span>
	        		<span id="cardPwd" style="display:inline-block;width:50%;line-height:1.5em;"><img src="./images/loading.gif" style="width:10%"/></span>
	        	</div>

	        	<span class="small"><?=CARD_SAVE;?></span>
	        </article>
	    </div>

	    <div id="informPop">
	        <header>
	        	<span class="ret"></span>
	        </header>
	        <article id="informArticle">
	        	<span><?=NOTICKETSLEFT;?></span>
	        </article>
	    </div>

		<img src="<?php $src=(LANG =='en')?'./images/cong_en.png':'./images/cong.png'; echo $src;?>" id="cong"/>
		<div id="awardInform">
			<span></span>
			<button id="confirm">OK</button>
		</div>
	    <div id="mask" style="display:block;"></div>
	    <script type="text/javascript">
		    
			$(function (){

				$("#figure").prop({"src":"./favicon.ico" });

				var bRotate = false;

				var interva="";
				var interva1="";

				var speed=600;

				function turnturn(angles, txt, hasImg, prizeID){
					rotatedDeg=rotate.style.transform || rotate.style.MozTransform || rotate.style.OTransform || rotate.style.msTransform;
					var origDeg=0;
					if(rotatedDeg!=undefined && rotatedDeg!=null){
						origDeg=rotatedDeg.substring(rotatedDeg.indexOf('(')+1,rotatedDeg.indexOf('deg)'));						
					}
					origDeg=parseInt(origDeg);
					if(origDeg%360==0){
						rotate_angle=origDeg+angles+1800;//应该是到360的倍数再加
					}else{
						//得到第一个倍数 再加
						rotate_angle=origDeg+(360-origDeg%360)+angles+1800;
					}
					
					var needToRotate=angles+1800;
					during_time=needToRotate/speed;
					clearInterval(interva1);
					$('#rotate').css({
						'transform': 'rotate('+rotate_angle+'deg)',
						'-ms-transform': 'rotate('+rotate_angle+'deg)',
						'-webkit-transform': 'rotate('+rotate_angle+'deg)',
						'-moz-transform': 'rotate('+rotate_angle+'deg)',
						'-o-transform': 'rotate('+rotate_angle+'deg)',
						'transition': 'transform ease-out '+during_time+'s',
						'-moz-transition': '-moz-transform ease-out '+during_time+'s',
						'-webkit-transition': '-webkit-transform ease-out '+during_time+'s',
						'-o-transition': '-o-transform ease-out '+during_time+'s'
					});

					setTimeout(function(){
						clearInterval(interva);
						//cancelAnimationFrame(interva);
						$("#leftDeng, #rightDeng").addClass("light").removeClass("notLight");
						$("#mask").show().height($(document).height());
						$("#cong, #awardInform").show();//恭喜的图片
						if(hasImg){
							$("#awardInform span:first").html("<?=CONGRATULATE;?><img src='"+hasImg+"' id='wareImg' /><span class='yellow'>  "+txt+"  </span>");
						}else{
							$("#awardInform span:first").html("<?=CONGRATULATE;?><span id='yellow'>  "+txt+"  </span>");
						}


						if(prizeID==<?=LOTTERYID;?>){
				    		//isTicket=1;直接把页面上显示的抽奖卡数量+1
				    		$(".leftLottery").text(parseInt($(".leftLottery").text())+5);
				    	}

						bRotate = !bRotate;
					},during_time*1000)
					
				}

				$('.pointer').click(function (){
					if(!$(".leftLottery").text()){
						$("#informPop, #mask").show();
						$("#informArticle").text("<?=LOADING;?>");
						setTimeout(function(){$("#informPop, #mask").hide();}, 2000);
						return;
					}
					if(bRotate==true){return;}
					if($(".leftLottery").text()<5){
						$("#informPop, #mask").show();
						$("#informArticle").text("<?=NOTICKETSLEFT;?>");
						setTimeout(function(){$("#informPop, #mask").hide();}, 2000);
						return;
					}

		        	$(".leftLottery").text($(".leftLottery").text()-<?=DEDUCTNUM;?>);
					interva=setInterval(function(){
						$("#leftDeng, #rightDeng").toggleClass("light").toggleClass("notLight");
						//clearInterval(interva);
					}, 90);
					

					bRotate = true;//true;
					{
						rotatedDeg=rotate.style.transform || rotate.style.MozTransform || rotate.style.OTransform || rotate.style.msTransform;
						var origDeg=0;
						if(rotatedDeg){
							origDeg=rotatedDeg.substring(rotatedDeg.indexOf('(')+1,rotatedDeg.indexOf('deg)'));
						}
						origDeg=parseInt(origDeg);
						needToRotate=360*15;
						
						if(origDeg%360==0){
							rotate_angle=parseInt(origDeg)+needToRotate;//应该是到360的倍数再加
						}else{
							//得到第一个倍数 再加
							rotate_angle=(360-origDeg%360)+parseInt(origDeg)+needToRotate;
						}
						//rotate_angle=parseInt(origDeg)+360*8;
						//during_time=needToRotate/speed;
						during_time=needToRotate/speed;
						interva1=setTimeout(function(){
							$('#rotate').css({
								'transform': 'rotate('+rotate_angle+'deg)',
								'-ms-transform': 'rotate('+rotate_angle+'deg)',
								'-webkit-transform': 'rotate('+rotate_angle+'deg)',
								'-moz-transform': 'rotate('+rotate_angle+'deg)',
								'-o-transform': 'rotate('+rotate_angle+'deg)',
								'transition': 'transform ease-out '+during_time+'s',
								'-moz-transition': '-moz-transform ease-out '+during_time+'s',
								'-webkit-transition': '-webkit-transform ease-out '+during_time+'s',
								'-o-transition': '-o-transform ease-out '+during_time+'s'
							});
						}, 1);						
					}
					//1885,1886,1887,1888,1889,1890,1891,0
					$.ajax({
					   url: 'AwardHistory.php',
					   dataType: 'json',
					   type:'post',
					   data: "type=getPrize",
					   success: function(dt) {
					   		if(dt.code==400){
					   			clearInterval(interva);
								$("#leftDeng, #rightDeng").addClass("light").removeClass("notLight");
								$("#informPop").show();
								$("#mask").show().height($(document).height());

					   			return;
					   		}else{
								turnturn(dt.angle, dt.message, dt.hasImg, dt.prizeID);
					   		}
				        	//rotateFn(dt.pos, dt.angle, dt.message, dt.hasImg);
				        	//rotateFn(1,180,'hhh');
					   }
					})
					

				});

				$("#showRules, #showRulesH").click(function(){$("#popup, #mask").show();$("#mask").height($(document).height());});
				$("#close").click(function(){$("#popup, #mask").hide();});
				$("#awardPop .ret").click(function(){$("#awardPop, #mask").hide();});
				$("#sucPop .ret").click(function(){$("#sucPop, #sucArticle, #pwdArticle").hide();$("#cardNo,#cardPwd").html('<img src="./images/loading.gif" style="width:10%"/>');});
				$("#informPop .ret").click(function(){$("#informPop, #mask").hide();});
				$("#confirm").click(function(){$("#awardInform, #cong, #mask").hide();});
				$("#AwardHistory, #AwardHistoryH").click(function(){
			        $("#mask").show();
		        	$("#mask").height($(document).height());
		        	$("#awardPop").show();
		  });
			    $("table").on("click", ".accept", function(e){
			    	var sendServ=false;
			    	if($(this).closest('tr').find('.notgot').length!=0 && $(this).closest('tr').find('.sendServ').val()==1){
			    		//需要发送webService接口
			    		sendServ=true;
			    	}else{
			    		if($(this).closest('tr').find('.notgot').length==0){
			    			return;
			    		}
			    	}
			    	isTicket=0;
			    	if($(this).closest('tr').find('.ticket').length!=0){
			    		//isTicket=1;直接把页面上显示的抽奖卡数量+1
			    		$(".leftLottery").text(parseInt($(".leftLottery").text())+5);
			    	}
			    	$(this).closest('tr').find('.notgot').removeClass('notgot').addClass('got').text('<?=RECEIVED;?>');
			    	$("#mask").show();
			        $("#mask").height($(document).height());
			    	if(sendServ==true){
		        		$("#sucPop, #pwdArticle").show();
		        	}else{
		        		$("#sucPop, #sucArticle").show();
		        	}
			    	var uniqueID=$(this).closest('tr').find(".uniqueID").val();
			    	var schemeID=$(this).closest('tr').find("#schemeID").val();
			    	//alert(uniqueID);return;
			    	dt={'uID':uID, 'uniqueID':uniqueID, 'schemeID':schemeID, 'sendServ':sendServ, 'nickName':nickName, 'crtTime':crtTime, 'type':'updateAward', 'isTicket':isTicket, 'k1':"<?=$k1;?>", 'k2':"<?=$k2;?>"};
			    	$.post('AwardHistory.php', dt, function(data){
			    		if(data.code==400){
			    			alert(data.msg);
			    			$("#sucPop, #pwdArticle, #sucArticle").hide();
			    			return;
			    		}
			        	if(sendServ==true){
			        		$("#cardNo").text(data.cardNo);
			        		$("#cardPwd").text(data.cardPwd);
			        	}
			        }, 'json');
			    });
				
				var screenH=document.documentElement.clientHeight-45;
				var screenW=document.documentElement.clientWidth;
				var docHeight=parseInt($(".bg").offset().top)+$(".bg").height()-25;

				$("#BGCont").css({"width":screenW, "height":Math.max(screenH,docHeight)});
				$("body").css({"height":$("#BGCont").height()+45});
				$(window).resize(function(){
					$("#wholeBack, .mask").css({"width":"100%", "height":"100%"});
					var screenH=document.documentElement.clientHeight-45;
					var docHeight=parseInt($(".bg").offset().top)+$(".bg").height()-25;
					$("#BGCont").css({"width":$(document).width(), "height":Math.max(screenH,docHeight)});
					$("body").css({"height":$("#BGCont").height()+45});					
				});
			});
			function rnd(n, m){
				return Math.floor(Math.random()*(m-n+1)+n)
			}

		</script>
	</body>
	<script>
	//所有奖品名称
	var  prizeNames=<?=$prizeArr; ?>;
	//所有奖品图片
	var  images=[];
	for(var i in prizeNames){
		images.push(prizeNames[i].hasImg);
	}

		//console.log(images)
	var canvas = document.getElementById('rotate2');   
	    //var r2=380,r1=480;
	    var r2=480,r1=480;
	    var ctx = canvas.getContext('2d');
	if (canvas.getContext){
	    var circle = {x: 480,
	                  y: 480,
	                  radius: 390};
	    var smccircle = {x: 480,
			          y: 480,
			          radius: 410}
	    /*var smccircle = {x: 480,
	                  y: 480,
	                  radius: 342}*/
	    //背景色
	    ctx.fillStyle = '#273341';
	    ctx.save();
	    
	    for(var i in prizeNames){
	    	drawCircularText(smccircle,prizeNames[i].prize, rads(prizeNames[i].rotBegin), rads(prizeNames[i].rotEnd),'center');//0
	    }
	}
    //转换弧度
    function rads(x){
        return Math.PI*x/180;
    }
    //圆
    function ites(a,b,r,color){
        ctx.beginPath();
        ctx.moveTo(480,480);
        ctx.arc(480,480,r,rads(a),rads(b),false);
        ctx.closePath();

        ctx.fillStyle = color;
        ctx.fill();
        ctx.strokeStyle = 'black';
        ctx.lineWidth =10;
        ctx.stroke();
    }
    function drawCircularText(s,string, startAngle, endAngle ,lv){
        var len=string.length;
        if(len<4){
        	string=" "+string+" ";
        }
        len=string.length;
		var radius = s.radius,
            angleDecrement = (startAngle - endAngle)/(string.length-1),
            angle = parseFloat(startAngle),
            index = 0,
            character;
        ctx.save();
        
        ctx.fillStyle = 'white';

        ctx.font = '50px 微软雅黑';
        //alert(ctx.font)
        ctx.textAlign = lv;
        ctx.textBaseline = 'middle';
        while (index < string.length) {        	
        	//console.log(index)
            character = string.charAt(index);
            
            ctx.save();
            ctx.beginPath();
            ctx.translate(s.x + Math.cos(angle) * radius,
                          s.y + Math.sin(angle) * radius);
            ctx.rotate(Math.PI/2 + angle);//Math.PI/2====>90度
            
            ctx.fillText(character, 0, 0);
            angle -= angleDecrement;
            index++;
            ctx.restore();            
        }
        ctx.restore();
    }

    //The callback function is stored for later use, then each image URL is passed into the preload() method.
	ImagePreloader.prototype.preload = function(image){
		// create new Image object and add to array
		var oImage = new Image;
		this.aImages.push(oImage);

		// set up event handlers for the Image object
		oImage.onload = ImagePreloader.prototype.onload;
		oImage.onerror = ImagePreloader.prototype.onerror;
		oImage.onabort = ImagePreloader.prototype.onabort;

		// assign pointer back to this.
		oImage.oImagePreloader = this;
		oImage.bLoaded = false;
		//console.log(image)
		oImage.src = image;
	}

	ImagePreloader.prototype.onComplete = function(){
		//console.log(this.aImages)
		this.nProcessed++;
	    if ( this.nProcessed == this.nImages ){
	        this.callback(this.aImages, this.nLoaded);
	    }
	}

	ImagePreloader.prototype.onload = function(){
		this.bLoaded = true;
	    this.oImagePreloader.nLoaded++;
	    this.oImagePreloader.onComplete();
	}

	ImagePreloader.prototype.onerror = function(){
	    this.bError = true;
	    this.oImagePreloader.onComplete();
	}

	ImagePreloader.prototype.onabort = function(){
	    this.bAbort = true;
	    this.oImagePreloader.onComplete();
	}

	function ImagePreloader(images, callback){
	    // store the callback
	    this.callback = callback;
		// initialize internal state.
		this.nLoaded = 0;
		this.nProcessed = 0;
		this.aImages = new Array;
		// record the number of images.
		this.nImages = images.length;
		// for each image, call preload()
		for ( var i = 0; i < images.length; i++ ){
			//console.log(this)
		    this.preload(images[i]);
		}
	}
	function drawImg(oImgs, len){
		var s=circle;
		var radius = s.radius; 
		ctx.save();
		ctx.translate(s.x, s.y);
		ctx.rotate(-Math.PI*90/180);
		for(var i=0;i<len;i++){
			ctx.save();
			       
		    //ctx.save();
		    ctx.beginPath();
		    
	        ctx.rotate(Math.PI*45*i/180);
	        ctx.translate(radius, -Math.tan(55/4*Math.PI/180) * radius);
		    ctx.rotate(Math.PI*90/180);//Math.PI/2====>90度
		    //ctx.drawImage(oImgs[i],0,0,200,200);
		    ctx.drawImage(oImgs[i],-10,-10,220,220);
			ctx.restore();
		}
		ctx.restore();
	}
	var imagePLoader=new ImagePreloader(images, drawImg);

	var $rotate=document.getElementById("rotate");
	
</script>
</html>
