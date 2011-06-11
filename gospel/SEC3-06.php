<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第三段  第一年之傳道工作</h2>
<h3 class=gospel>第六章  在迦百農之工作</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:14-15&ranges=MAK:1:29-31&ranges=LUK:4:38-39&ranges=ISA:53:4-4>醫治彼得的岳母</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:14-15>8:14-15</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:1:29-31>1:29-31</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:4:38-39>4:38-39</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ISA:53:4-4>賽53:4</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:16-17&ranges=MAK:1:32-34&ranges=LUK:4:40-41&ranges=ISA:53:4-4>醫治其他樣的病人</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:16-17>8:16-17</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:1:32-34>1:32-34</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:4:40-41>4:40-41</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ISA:53:4-4>賽53:4</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:1-8&ranges=MAK:2:1-12&ranges=LUK:5:17-26&ranges=ROM:3:23-23>醫治四人抬來的癱子</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:1-8>9:1-8</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:2:1-12>2:1-12</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:5:17-26>5:17-26</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ROM:3:23-23>羅3:23</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
