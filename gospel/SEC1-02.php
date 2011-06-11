<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第一段  降生受浸前之事蹟</h2>
<h2 class=gospel>第二章  天使報信</h2>
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
        <td class=gospel><a href=../retrieve/?ranges=LUK:1:5-25>天使向撒迦利亞顯現</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:5-25>1:5-25</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:1:18-18&ranges=LUK:1:26-38>天使向馬利亞顯現</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:1:18-18>1:18</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:1:26-38>1:26-38</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>		
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=LUK:1:39-56>馬利亞訪以利沙伯</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	 <td class=gospel><a href=../retrieve/?ranges=LUK:1:39-56>1:39-56</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:1:19-25>天使向約瑟顯現</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:1:19-25>1:19-25</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
</table>

'));

$smarty->display('gospel.tpl');
