<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第伍段 第三年之傳道工作</h2>
<h3 class=gospel>第十一章 耶穌所行之神蹟</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:15:32-39&ranges=MAK:8:1-10>使四千人喫飽</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:15:32-39>15:32-39</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:1-10>8:1-10</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:17:1-13&ranges=MAK:9:2-13&ranges=LUK:9:28-36>登山變像</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:17:1-13>17:1-13</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:9:2-13>9:2-13</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:28-36>9:28-36</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:17:24-27&ranges=EXO:30:11-15>自魚口中得稅銀</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:17:24-27>17:24-27</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=EXO:30:11-15>出30:11-15</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:11:1-44>使拉撒路由死復生</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:17:24-27>17:24-27</a>
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
