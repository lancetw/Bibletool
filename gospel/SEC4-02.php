<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第二章  講論父與子之關係</h3>
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
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:17-21>照著父所指示的事去行</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:17-21>5:17-21</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:22-30>把審判的事交給子</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:22-30>5:22-30</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:22-30>父為子作見證</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:31-42>5:31-42</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:43-47>子奉父的名而來</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	 <td class=gospel><a href=../retrieve/?ranges=JHN:5:43-47>5:43-47</a>
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
