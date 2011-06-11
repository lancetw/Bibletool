<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第九章 被捉受審</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=JHN:18:13-14>被解見亞那</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:18:13-14>18:13-14</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:57-68&?ranges=MAK:14:53-65&ranges=LUK:22:54-65&ranges=JHN:18:19-24&ranges=LEV:24:16-16>被該亞法審問</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:57-68>26:57-68</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:14:53-65>14:53-65</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:54-65>22:54-65</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:18:19-24>18:19-24</a>
	<td class=gospel><a href=../retrieve/?ranges=LEV:24:16-16>利24:16</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:1-1&ranges=LUK:22:66-71&ranges=PSM:110:1-1>被公會定罪</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:1-1>15:1</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:66-71>22:66-71</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=PSM:110:1-1>詩110:1</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:58-75&?ranges=MAK:14:54-72&ranges=LUK:22:55-62&ranges=JHN:16:25-74>彼得三次否認主</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:26:58-75>26:58-75</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:14:54-72>14:54-72</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:22:55-62>22:55-62</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:16:25-74>16:25-27</a>
	<td class=gospel><a href=../retrieve/?ranges=LEV:24:16-16></a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
