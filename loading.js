﻿/*******************************************
 * 
 * 创建人：Quber（qubernet@163.com）
 * 创建时间：2014年6月10日
 * 创建说明：Base=>页面加载（loading）效果
 * 
 * 修改人：
 * 修改时间：
 * 修改说明：
 * 
*********************************************/

var _PageHeight = document.documentElement.clientHeight,
	_PageWidth = document.documentElement.clientWidth;
var _PageHeight = window.screen.height,
	_PageWidth = window.screen.width;
//计算loading框距离顶部和左部的距离（loading框的宽度为215px，高度为61px）
var _LoadingTop = _PageHeight > 61 ? (_PageHeight - 61) / 2 : 0,
	_LoadingLeft = _PageWidth > 215 ? (_PageWidth - 215) / 2 : 0;
//在页面未加载完毕之前显示的loading Html自定义内容
var _LoadingHtml = '<div id="loadingDiv" style="position:absolute;left:0;width:100%;height:' + _PageHeight + 'px;top:0;background:#f3f8ff;opacity:1;filter:alpha(opacity=80);z-index:10000;"><div style="position: absolute; cursor1: wait; left: ' + _LoadingLeft + 'px; top:' + _LoadingTop + 'px; width: auto; height: 57px; line-height: 57px; padding-left: 50px; padding-right: 5px; background: #fff url(loading.gif) no-repeat scroll 5px 10px; border: 2px solid #95B8E7; color: #696969; font-family:\'Microsoft YaHei\';">页面加载中，请等待...</div></div>';
//呈现loading效果
document.write(_LoadingHtml);

//window.onload = function () {
//    var loadingMask = document.getElementById('loadingDiv');
//    loadingMask.parentNode.removeChild(loadingMask);
//};

//监听加载状态改变
document.onreadystatechange = completeLoading;
//console.log(document.readyState+"-----------------");
//加载状态为complete时移除loading效果
function completeLoading() {
	//alert(document.readyState+"================");
	if (document.readyState == "complete") {
		var loadingMask = document.getElementById('loadingDiv');
		//loadingMask.parentNode.removeChild(loadingMask);
		//setTimeout(function(){loadingMask.parentNode.removeChild(loadingMask);}, 2000);
		//$("#header, #info, #intro, .btns").show();					
	}
}