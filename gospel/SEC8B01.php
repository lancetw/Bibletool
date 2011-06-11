<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合--主耶穌基督微行錄</h1>
<h2 class=gospel>第捌段 附錄</h2>
<h3 class=gospel>附錄B.主耶穌所講的比喻之一</h3>
<h4>自然生物之比喻</h4>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>一、自然生物
	<th class=gospel>時間
	<th class=gospel>馬太
	<th class=gospel>馬可
	<th class=gospel>路加
	<th class=gospel>約翰
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:3-9&ranges=MAT:13:18-23&ranges=MAK:4:3-9&ranges=MAK:4:12-20&ranges=LUK:8:5-8&ranges=LUK:8:11-15>撒種</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:3-9>13:18-23</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:3-9>4:12-20</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:5-8>8:11-15</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:26-29>種子生長</a>
	<th class=gospel>AD.28年秋
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:26-29>4:26-29</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:24-30>麥子與稗子</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:24-30>13:24-30</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:31-32&ranges=MAK:4:30-32&ranges=LUK:13:18-19>芥菜種</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:31-32>13:31-32</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:30-32>4:30-32</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:13:18-19>13:18-19</a>
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:13:6-9>不結實的樹</a>
	<th class=gospel>AD.30年2月
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:13:6-9>13:6-9</a>
	<td class=gospel>&nbsp;
</tr>	                                      
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:24:32-34&ranges=MAK:13:28-30&ranges=LUK:21:29-32>無花果樹</a>
	<th class=gospel>AD.30年4月4日
	<td class=gospel><a href=../retrieve/?ranges=MAT:24:32-34>24:32-34</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:13:28-30>13:28-30</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:21:29-32>21:29-32</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:18:12-14&ranges=LUK:15:3-7>迷羊</a>
	<th class=gospel>AD.30年2月
	<td class=gospel><a href=../retrieve/?ranges=MAT:18:12-14>18:12-14</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:15:3-7>15:3-7</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:31-46>綿羊與山羊</a>
	<th class=gospel>AD.30年4月4日
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:31-46>25:31-46</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
