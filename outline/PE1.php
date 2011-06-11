<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">彼得前書簡介</h1>
<p>
彼得前書是聖經中的第六十卷經書，是新約中的第二十一卷。是彼得寫給小亞細亞北部五個行省基督徒的書信，彼得稱他們為「神的選民」。其主要目的在鼓勵那些為了信仰遭受苦難和迫害的信徒，當時羅馬皇帝尼祿開紿逼害教會，甚至彼得也為此而殉道。</p>
<p>
彼得要人明白，　神改變人類命運的救贖計劃，已因基督耶穌的來到世間而實現。基督為義受死來救人，是基督徒學習行善受苦的好榜樣；而受苦是信徒臻於至善一定會有的經歷。基督徒生活在世，應以祝福還辱罵，以善報惡；雖面對行惡的人也不可改變這立場。又勉信徒應同心、體恤、相愛如弟兄，並有慈憐心；尤其應積極培養謙卑的美德。</p>
<p>
又提出一連串信徒生活守則，教導如何在社會中與掌權的和與主人保持敬神愛人的關係(彼前2:13-25),以及夫婦相處之道(彼前3:1-7)。
並勸人勿慕奢華，應以溫柔、安靜為裝飾，一切都應學效基督。</p>
<hr>
<h1 ALIGN="center">彼得前書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 問候與感恩</td>
<td>1:1-1:12</td>
</tr>
<tr>
<td>二、 基督徒的新人生活</td>
<td>1:13-2:10</td>
</tr>
<tr>
<td>三、 信徒處世守則</td>
<td>2:13-2:10</td>
</tr>
<tr>
<td>如何在不信者中生活</td>
<td>2:11-2:12</td>
</tr>
<tr>
<td>與掌權者間的關係</td>
<td>2:13-2:17</td>
</tr>
<tr>
<td>與主人間的關係</td>
<td>2:18-2:25</td>
</tr>
<tr>
<td>夫婦相處之道</td>
<td>3:1-3:7</td>
</tr>
<tr>
<td>一般處世的原則</td>
<td>3:8-3:12</td>
</tr>
<tr>
<td>四、 學習基督為義受苦</td>
<td>3:13-4:19</td>
</tr>
<tr>
<td>五、 勸勉作長老的人</td>
<td>5:1-5:11</td>
</tr>
<tr>
<td>六、 結語與祝福</td>
<td>5:12-5:14</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">彼得前書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center">第 3 章</td>
</tr>
<tr>
<td ALIGN="center">新的生命</td>
<td ALIGN="center">新的建造</td>
<td ALIGN="center">必備的堡壘</td>
</tr>
<tr>
<td ALIGN="center">救恩</td>
<td ALIGN="center">順服</td>
<td ALIGN="center">患難</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="3">主後 63-64 年在羅馬</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
