<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第五章  一般之教訓</h3>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>分節標題
	<th class=gospel>馬太
	<th class=gospel>馬可
	<th class=gospel>路加
	<th class=gospel>約翰
	<th class=gospel>參考經文
<tr class=gospel>
</tr>
        <td class=gospel><a href=../retrieve/?ranges=LUK:6:20-26>論福與禍</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:20-26>6:20-26</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:27-36>論對待仇敵</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:27-36>6:27-36</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
        <td class=gospel><a href=../retrieve/?ranges=LUK:6:37-38>論饒恕人</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:37-38>6:37-38</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:39-45>論樹與果子</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:39-45>6:39-45</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:46-49>論二等根基</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:46-49>6:46-49</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:6:22-71>論生命的糧</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:6:22-71>6:22-71</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:15:1-20&ranges=MAK:7:1-23&&ranges=EXO:7:17-17>論潔淨之禮</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAT:15:1-20>15:1-20</a>
	 <td class=gospel><a href=../retrieve/?ranges=MAK:7:1-23>7:1-23</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	 <td class=gospel><a href=../retrieve/?ranges=EXO:21:17-17>出7:17</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
