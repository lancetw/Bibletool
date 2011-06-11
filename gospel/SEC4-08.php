<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第八章  對法利賽人之講論</h3>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>分節標題
	<th class=gospel>馬太
	<th class=gospel>馬可
	<th class=gospel>路加
	<th class=gospel>約翰
	<th class=gospel>參考經文
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:22-23&ranges=LUK:11:14-14>趕出叫人瞎啞的鬼</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT12_22_23>12:22-23</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:11:14-14>11:14</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:12:24-24&ranges=MAK:3:20-22&ranges=LUK:11:15-16>法利賽妄論耶穌</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:12:24-24>12:24</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAK:3:20-22>3:20-22</a>
	 <td class=gospel><a href=../retrieve/?ranges=LUK:11:15-16>11:15-16</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:25-37&ranges=MAK:3:23-30&ranges=LUK:11:17-23>耶穌之反駁</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:25-37>12:25-37</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:3:23-30>3:23-30</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:11:17-23>11:17-23</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:38-42&ranges=LUK:11:29-30>論這世代的神蹟</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:38-42>12:38-42</a>
    	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:11:29-30>11:29-30</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:43-45&ranges=LUK:11:31-32>論這世代的光景</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:43-45>12:43-45</a>
    	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:11:31-32>11:31-32</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:11:33-36>論人身上的燈</a>
        <td class=gospel>&nbsp;
    	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:11:33-36>11:33-36</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
