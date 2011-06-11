<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">約翰三書簡介</h1>
<p>
約翰三書是聖經中的第六十四卷經書，是新約中的第二十五卷。使徒約翰寫信給一位名該猶的教會領袖，他心存真理，歡喜接待旅人。同時也提到一位叫丟特腓的人，他想做領袖，卻不行善；約翰要該猶不可效法他。</p>
<hr>
<h1 ALIGN="center">約翰三書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 問候</td>
<td>1-2</td>
</tr>
<tr>
<td>二、 稱讚該猶</td>
<td>3-8</td>
</tr>
<tr>
<td>三、 責備丟特腓</td>
<td>9-10</td>
</tr>
<tr>
<td>四、 效法善的教導</td>
<td>11-12</td>
</tr>
<tr>
<td>五、 結語：問安</td>
<td>13-15</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">約翰三書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1-8 節</td>
<td ALIGN="center">第 9-11 節</td>
<td ALIGN="center">第 12-15 節</td>
</tr>
<tr>
<td ALIGN="center">備受讚美的人</td>
<td ALIGN="center">挑撥離間的人</td>
<td ALIGN="center">忠誠行善的人</td>
</tr>
<tr>
<td ALIGN="center">該該</td>
<td ALIGN="center">丟特腓</td>
<td ALIGN="center">低米丟</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="3">主後 90 年在以弗所</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
