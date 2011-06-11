<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第五章 豫言受害</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=JHN:12:20-29>希利尼人來見耶穌</a>
	<td class=gospel>&nbsp;	
	<td class=gospel>&nbsp;	
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:12:20-29>12:20-29</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:1-2&ranges=JHN:12:30-50&ranges=ISA:6:10-10>第四次提及受害事</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:1-2>26:1-2</a>
	<td class=gospel>&nbsp;	
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:12:30-50>12:30-50</a>
	<td class=gospel><a href=../retrieve/?ranges=ISA:6:10-10>賽6:10</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:3-5&ranges=MAK:14:1-2&ranges=LUK:22:1-2>官長商議捉拿耶穌</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:3-5>26:3-5</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:14:1-2>14:1-2</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:1-2>22:1-2</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:14-16&ranges=MAK:14:10-11&ranges=LUK:22:3-6&ranges=ZEC:11:12-12>猶大賣主</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:14-16>26:14-16</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:14:10-11>14:10-11</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:3-6>22:3-6</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ZEC:11:12-12>亞11:12</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
