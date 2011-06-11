<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">猶大書簡介</h1>
<p>
猶大書是聖經中的第六十五卷經書，是新約中的第二十六卷。猶大書是耶穌弟弟猶大所著，是寫給巴勒斯坦外各地基督徒的一封簡短書信。針對當時威脅福音真道的虛妄信仰與傳錯謬道理的假教師，呼籲信徒要竭力抗辯。又用許多舊約的事例，借古喻今，來說明敵對道理的結局只是滅亡。並用沒雨的雲、沒果的樹和流星來斥責這些口是心非、假敬虔之名行欺騙之實的人。</p>
<p>最後用充滿信心和喜樂的語調為讀者祝福；說明　神必能保守信祂的人不失腳，能純潔無瑕進到祂榮耀的國度裡。</p>
<hr>
<h1 ALIGN="center">猶大書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、引言</td>
<td>1-4</td>
</tr>
<tr>
<td>二、對背道者的警告</td>
<td>5-16</td>
</tr>
<tr>
<td>三、對忠心者的教導</td>
<td>17-23</td>
</tr>
<tr>
<td>四、祝福</td>
<td>24-25</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">猶大書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1-3 節</td>
<td ALIGN="center">第 4-16 節</td>
<td ALIGN="center">第 17-25 節</td>
</tr>
<tr>
<td ALIGN="center">謹記你的信仰</td>
<td ALIGN="center">謹記你的審判</td>
<td ALIGN="center">建造你的信仰</td>
</tr>
<tr>
<td ALIGN="center">爭辯</td>
<td ALIGN="center">定罪</td>
<td ALIGN="center">注意</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
