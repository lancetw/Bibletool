<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第二段傳道前之預備工作</h2>
<h3 class=gospel>第一章開路先鋒</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=LUK:3:1-2>神的話臨到施洗約翰</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:3:1-2>3:1-2</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:1-6&ranges=MAK:1:1-6&ranges=LUK:3:3-6&ranges=JHN:1:6-8>施洗約翰的工作</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:1-6>3:1-6</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:1:1-6>1:1-6</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:3:1-6>3:3-6</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:3:1-6>1:6-8</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:7-10&ranges=LUK:3:7-14>施洗約翰的講論</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:7-10>3:7-10</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:3:7-14>3:7-14</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:11-12&ranges=MAK:1:7-8&ranges=LUK:3:15-18&ranges=JHN:1:15-34>施洗約翰的見證</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:11-12>3:11-12</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:3:11-12>1:7-8</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:3:15-18>1:7-8</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:1:15-34>1:15-34</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
        <td class=gospel><a href=../retrieve/?ranges=MAT:3:3-3&ranges=MAK:1:2-3&ranges=LUK:3:7-14&ranges=ISA:40:3-5>應驗先知的預言</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:3:3-3>3:3</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:1:2-3>1:2-3</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:3:7-14>3:7-14</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ISA:40:3-5>賽40:3-5</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
