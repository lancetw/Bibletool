<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">提摩太後書簡介</h1>
<p>
提摩太後書是聖經中的第五十五卷經書，是新約中的第十六卷。後書比前書寫得更親切，是保羅出獄後在旅行佈道中途突然被捕，再度繫獄時寫給提摩太的；他自知在世日子無多(提後4:6),他把最重要的事對提摩太作了交託。提摩太後書主要的論題是堅忍，保羅勸勉提摩太要不畏懼任何的艱難，始終忠心見證耶穌基督，堅守基督福音和純正的道理，負起教師和傳道人的責任。告誡提摩太不可捲入於「愚拙無知的辯論」；因為那種辯論毫無益處，反會腐化聽的人。保羅希望提摩太能以他為榜樣，學習他的信心、忍耐、愛心、堅忍，並且忍受患難和逼迫。</p>
<p>
保羅一生沒有錯過一次傳福音的機會，甚至被捕被囚受審時，也要把福音傳給未聽過的人(提後4:17)。他勉勵基督信徒不要以見證主為恥(提後1:8)按正意分解真道(提後2:15)；努力作　神貴重的器皿。</p>
<hr>
<h1 ALIGN="center">提摩太後書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 問候</td>
<td>1:1-1:2</td>
</tr>
<tr>
<td>二、 忠心事主、熱心傳道</td>
<td>1:3-2:26</td>
</tr>
<tr>
<td>三、 末世的警告</td>
<td>3:1-3:17</td>
</tr>
<tr>
<td>四、 保羅的遺言與交託</td>
<td>4:9-4:22</td>
</tr>
<tr>
<td>五、 分離的信息與祝福</td>
<td>4:9-4:22</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">提摩太後書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center">第 3 章</td>
<td ALIGN="center">第 4 章</td>
</tr>
<tr>
<td ALIGN="center">真理的能力</td>
<td ALIGN="center">真理的實踐</td>
<td ALIGN="center">真理的逼迫</td>
<td ALIGN="center">真理的傳講</td>
</tr>
<tr>
<td ALIGN="center">根基</td>
<td ALIGN="center">忠心</td>
<td ALIGN="center">仇敵</td>
<td ALIGN="center">無畏</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="4">主後 67 年在羅馬監獄</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
