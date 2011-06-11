<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合--主耶穌基督微行錄</h1>
<h2 class=gospel>第捌段 附錄</h2>
<h3 class=gospel>附錄 A.主耶穌所行的神蹟之四</h3>
<h4>死人復活之神蹟</h4>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>四、死人復活
	<th class=gospel>時間
	<th class=gospel>馬太
	<th class=gospel>馬可      
	<th class=gospel>路加      
	<th class=gospel>約翰     
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:7:11-15>使寡婦的兒子復活</a>
	<th class=gospel>AD.28年夏
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:7:11-15>7:11-15</a>
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:18-19&ranges=MAT:9:23-25&ranges=MAK:5:22-24&ranges=MAK:5:35-43&ranges=LUK:8:41-42&ranges=LUK:8:49-56>使睚魯的女兒復活</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:18-19>9:23-25</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:5:22-24>5:35-43</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:41-42>8:49-56</a>
	<td class=gospel>&nbsp;
</tr>	
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:11:1-44>使拉撒路復活</a>
	<th class=gospel>AD.30年2月
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:11:1-44>11:1-44</a>
</tr>	
</table>

'));

$smarty->display('gospel.tpl');
