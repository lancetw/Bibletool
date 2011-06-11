<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">俄巴底亞書簡介</h1>
<p>
俄巴底亞書是全部聖經中第三十一卷書，是舊約中最短一卷書，只有一章，作著生平不詳，寫作時間可能在主前587年間,巴比倫攻陷耶路撒冷城之後。</p>
<p>
主要信息為警告以東，在敵人進犯耶路撒冷，以色列人面臨大難時，本有手足之情的以東竟不出兵馳援，反幸災樂禍，趁火打劫，因此必被毀滅，全城無餘剩。預言被擄的以色列人將回到神所應許之地，並在以東地上居住。</p>
<p>
先知見異象，知道以東古國必遭毀滅的命運，果在公元一世紀為羅馬人所併吞，其歷史也告悲慘結束。在主後十九世紀，考古學家發現以東人引以自豪的西拉山城，紅巖峭壁在夕陽下閃爍發光，但卻是荒涼一片。</p>
<p>聖經教訓人類應該互愛，耶穌以「愛人如己」為全部聖經的總綱與敬愛神並列(太22:37-40)。離棄
神固然是罪，不愛神的子民，不肯幫助他們，也是罪。我們應該從以東人的悲劇學教訓。</p>
<hr>
<h1 ALIGN="center">俄巴底亞書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 以東因驕傲招禍</td>
<td>1-9節</td>
</tr>
<tr>
<td>二、 宣佈以東人陷害以色列人之罪</td>
<td>10-14節</td>
</tr>
<tr>
<td>三、 預言神的審判</td>
<td>15-16節</td>
</tr>
<tr>
<td>四、 預言雅各家的復興：基督國度建立</td>
<td>17-21節</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">俄巴底亞書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1-9 節</td>
<td ALIGN="center">第 10-14 節</td>
<td ALIGN="center">第 15-21 節</td>
</tr>
<tr>
<td ALIGN="center">以東的命運已定</td>
<td ALIGN="center">以東命運的肇因</td>
<td ALIGN="center">以東命運的結局</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="3">你怎樣行,他也必照樣向你行(15節)</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
