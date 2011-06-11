<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第二段傳道前之預備工作</h2>
<h3 class=gospel>第二章受浸與受試探</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:13-17&ranges=MAK:1:9-11&ranges=LUK:3:21-23&ranges=PSM:2:7-7>在約但河受浸</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:13-17>3:13-17</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:1:9-11>1:9-11</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:3:21-23>3:21-23</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=PSM:2:7-7>詩2:7</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:4:1-11&ranges=MAK:1:12-13&ranges=LUK:4:1-13&ranges=PSM:91:11-12>受魔鬼的試探</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:1-11>4:1-11</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:1:12-13>1:12-13</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:4:1-3>4:1-13</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=PSM:91:11-12>詩91:11-12</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
