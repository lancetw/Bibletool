<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">哥林多前書簡介</h1>
<p>
哥林多前書是聖經中的第四十六卷經書，是新約中的第七卷。是保羅寫給哥林多教會的一卷書信，討論到有關基督徒生活和信仰問題的書信；這些問題發生在他所建立的哥林多教會。</p>
<p>
當時哥林多是希臘的一個大城市，為羅馬帝國亞該亞省的首府。這城有著高度的文化、商業繁盛；但風氣敗壞，道德低落，人民信奉多種宗教。</p>
<p>
保羅關心教會的分裂和內部不道德問題，論到淫亂和婚姻、良心和教會組織，聖靈的恩賜，和復活的問題。保羅在聖靈的帶領下對這些問題都提出了明確的指示。</p>
<p>
第十三章「愛之頌」是千古傳誦的詩章，描述愛是神賜給祂子民的最大恩賜，是本卷書最重的一章。第十五章述明的基督教的基要真理(林前15:1-6)，可用此來辨明各種異端教義。</p>
<hr>
<h1 ALIGN="center">哥 林 多 前 書 大 綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 簡介</td>
<td>1:1-1:9</td>
</tr>
<tr>
<td>二、 教會的結黨</td>
<td>1:10-4:21</td>
</tr>
<tr>
<td>三、 教會的紛亂</td>
<td>5:1-4:21</td>
</tr>
<tr>
<td>四、 教會的難處</td>
<td>7:1-15:58</td>
</tr>
<tr>
<td>婚姻問題</td>
<td>7:1-7l40</td>
</tr>
<tr>
<td>祭偶像問題</td>
<td>8:1-11:1</td>
</tr>
<tr>
<td>女人蒙頭問題</td>
<td>11:2-11:16</td>
</tr>
<tr>
<td>聖餐的規則</td>
<td>11:17-11:34</td>
</tr>
<tr>
<td>論屬靈的恩賜</td>
<td>12:1-14:40</td>
</tr>
<tr>
<td>復活的義意</td>
<td>15:1-15:58</td>
</tr>
<tr>
<td>五、 結語</td>
<td>16:1-16:24</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">哥林多前書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center">譴責</td>
<td ALIGN="center" COLSPAN="3">回答</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>教會中的分裂</p>
<p>1-6</p>
</td>
<td ALIGN="center">
<p>教會中的爭論</p>
<p>7-10</p>
</td>
<td ALIGN="center">
<p>教會中的混亂</p>
<p>11-14</p>
</td>
<td ALIGN="center">
<p>教會中的教義之爭</p>
<p>15-16</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">
<p>主</p>
<p>題</p>
</td>
<td ALIGN="center">困擾弟兄</td>
<td ALIGN="center">濫用自由</td>
<td ALIGN="center">混亂崇拜</td>
<td ALIGN="center">拒綱復活</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="3">犯錯的聖徒</td>
<td ALIGN="center">不信的聖徒</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="4">寫於以弗所</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="4">主後 56 年</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
