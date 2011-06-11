<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">腓立門書簡介</h1>
<p>
腓立門書是聖經中的第五十七卷經書，是新約中的第十八卷。腓立門書可算是新約聖經中最奇特的一卷書，是保羅寫給腓立門這人的一封私人短信函，講一個逃奴的事情，卻在聖經中佔了一席地位。</p>
<p>
信裡沒有講高深的神學教義，講的只是一個私拿主人東西的奴僕，逃了出來，保羅帶領他認罪、悔改，信了主耶穌，成了和他名字阿尼西母意義相符的人(意為有益的人)。</p>
<p>
主要信息為：人際關係中的公平原則；基督徒間應有的兄弟情誼；人間關係應在互愛互尊的新基礎上建立。保羅說：「阿尼西母在基督堙A不再是奴僕，乃是高過奴僕，是親愛的兄弟」(門16)。可視為當日解放奴隸和人性尊嚴的大憲章；不是僅僅在人道的層面上講同情，而是在人人平等的基礎上講義務，甚麼地方有基督信仰，甚麼地方的人就能在愛中做真正的人。</p>
<hr>
<h1 ALIGN="center">腓立門書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 問候與感謝</td>
<td>1-7</td>
</tr>
<tr>
<td>二、 為阿尼西母求情</td>
<td>8-20</td>
</tr>
<tr>
<td>三、 盼望、問安與祝福</td>
<td>21-25</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">腓立門書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1-3 節</td>
<td ALIGN="center">第 4-7 節</td>
<td ALIGN="center">第 8-21 節</td>
<td ALIGN="center">第 22-25 節</td>
</tr>
<tr>
<td ALIGN="center">保羅的問安</td>
<td ALIGN="center">保羅的稱許</td>
<td ALIGN="center">保羅的忠告</td>
<td ALIGN="center">保羅的結論</td>
</tr>
<tr>
<td ALIGN="center">致意</td>
<td ALIGN="center">讚揚</td>
<td ALIGN="center">代求</td>
<td ALIGN="center">期望</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
