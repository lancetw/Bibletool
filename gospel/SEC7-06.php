<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第柒段 耶穌基督復活升天
<h3 class=gospel>第六章 福音總結</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:28:18-20&ranges=MAK:16:15-18&ranges=LUK:24:47-48>大使命</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:28:18-20>28:18-20</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:16:15-18>16:15-18</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:24:47-48>24:47-48</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:20:30-31&ranges=JHN:21:25-25>約翰的結語</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:20:30-31>21:25</a>
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
