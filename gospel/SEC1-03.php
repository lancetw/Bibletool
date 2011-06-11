<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第一段  降生受浸前之事蹟</h2>
<h3 class=gospel>第三章  施洗約翰誕生</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:57-66>施洗約翰的誕生</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:57-66>1:57-66</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:67-79>撒迦利亞說預言</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:67-79>1:67-79</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:80-80>施洗約翰漸長</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:80-80>1:80</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
