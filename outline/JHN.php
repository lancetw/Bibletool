<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">約翰福音簡介</h1>
<p>約翰福音是全部聖經中第四十三卷書，也是新約中第四卷書，是四福音書的最後一本。本卷書之主要內容在描述耶穌是
神的永恆之道；祂「祂為人，住在我們當中」。要人相信祂是彌賽亞，是　神的兒子，只要相信就能獲得永恆的生命。</p>
<p>
本卷書也特別強調，耶穌就是引到真理和生命的道路，凡相信並接受的人，就能得到永生。約翰生動地記載了耶穌所行的七個神蹟，每一個神蹟都傳達了一個重要信息。也記錄耶穌所講日常生活的比喻如糧食、水、光暗、牧人、門、葡萄樹和種子等來闡明許多真理。</p>
<p>本卷書偏重基督耶穌神性方面的事，可以使我們思想到永生的基督給人一些永恆的啟示。</p>
<p>註 : 在約翰福音中有關一個女人在行淫被抓一事之記載(約8:1-11),在許多古抄本中沒有這一段</p>
<hr>
<h1 ALIGN="center">約翰福音大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 序曲</td>
<td>1:1-1:18</td>
</tr>
<tr>
<td>二、 耶穌基督在世人中的事奉</td>
<td>1:19-12:50</td>
</tr>
<tr>
<td>三、 耶穌服事的榜樣</td>
<td>13:1-17:26</td>
</tr>
<tr>
<td>四、 受難與復活的榮耀</td>
<td>18:1-20:31</td>
</tr>
<tr>
<td>五、 後記</td>
<td>21:1-21:25</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">約翰福音表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center" COLSPAN="4">神蹟</td>
<td ALIGN="center" COLSPAN="2">講道</td>
<td ALIGN="center">成了</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>神兒子的同在</p>
<p>1-4</p>
</td>
<td ALIGN="center">
<p>神兒子的聲明</p>
<p>5-7</p>
</td>
<td ALIGN="center">
<p>神兒子的亮光</p>
<p>8-10</p>
</td>
<td ALIGN="center">
<p>神兒子的被拒</p>
<p>11-12</p>
</td>
<td ALIGN="center">
<p>神兒子的教訓</p>
<p>13-14</p>
</td>
<td ALIGN="center">
<p>神兒子的命令</p>
<p>15-17</p>
</td>
<td ALIGN="center">
<p>神兒子的苦難</p>
<p>18-21</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">主題</td>
<td ALIGN="center">來臨</td>
<td ALIGN="center" COLSPAN="3">敵對</td>
<td ALIGN="center" COLSPAN="2">安慰</td>
<td ALIGN="center">釘十架</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="4">叫你們信耶穌</td>
<td ALIGN="center" COLSPAN="3">信耶穌得生命(約20:31)</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="3">巴勒斯坦</td>
<td ALIGN="center" COLSPAN="4">猶大與加利</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="4">約三年半</td>
<td ALIGN="center" COLSPAN="3">最後一週</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
