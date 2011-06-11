<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">示錄簡介</h1>
<p>
啟示錄是聖經中的第六十六卷經書，是新約中的第二十七卷，也是聖經中最後一卷。啟示錄為耶穌的門徒約翰所寫，那時正值基督徒因信仰遭受逼迫最利害之時，約翰曾被羅馬皇帝米豆仙，放逐到拔摩孤島，在被囚的十八個月中受聖靈的感動，看到奇瑰宏偉、如潮湧而至的異象和有關末世的啟示，因而寫下了啟示錄，送給小亞細亞的七間教會，勸勉他們在遭受苦難和迫害時仍要堅守信仰。</p>
<p>
本書信息多半包含一些默示和異象，用象徵性的語言表達作者的信息，它的內容對當時的讀者並不難領會，但對現代的讀者卻是難於明白，但其中心議題，仍是以耶穌為重心，意義也很明顯：就是藉著耶穌基督，　神最後將徹地擊敗一切仇敵，包括撒但在內，而且要在勝利之日獎賞祂忠心的子民，賜給他們新天新地。</p>
<hr>
<h1 ALIGN="center">示錄大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、引言：基督再來</td>
<td>1:1-1:8</td>
</tr>
<tr>
<td>二、基督對教會的稱讚與責備</td>
<td>1:9-3:22</td>
</tr>
<tr>
<td>給教會的七封信</td>
</tr>
<tr>
<td>三、基督：世界前途的掌握者</td>
<td>4:1-16:21</td>
</tr>
<tr>
<td>天上的景象</td>
<td>4:1-5:14</td>
</tr>
<tr>
<td>七印</td>
<td>6:1-8:5</td>
</tr>
<tr>
<td>七號</td>
<td>8:6-11:19</td>
</tr>
<tr>
<td>與惡爭戰</td>
<td>12:1-14:20</td>
</tr>
<tr>
<td>七碗</td>
<td>15:1-16:21</td>
</tr>
<tr>
<td>四、基i：得勝者</td>
<td>17:1-20:15</td>
</tr>
<tr>
<td>巴比倫的傾倒和基督的得勝</td>
</tr>
<tr>
<td>五、盼望的頂</td>
<td>21:1-22:5</td>
</tr>
<tr>
<td>新天新地, 永遠的國</td>
</tr>
<tr>
<td>六、結語：偉大的邀請　　　　　　　</td>
<td>22:6-22:21</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">啟示錄表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center">命令</td>
<td ALIGN="center" COLSPAN="5">懲罰</td>
<td ALIGN="center">再來</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>七個教會的指示</p>
<p>1-3</p>
</td>
<td ALIGN="center">
<p>七印</p>
<p>4-6</p>
</td>
<td ALIGN="center">
<p>受印記的聖徒</p>
<p>7-9</p>
</td>
<td ALIGN="center">
<p>見證人與戰爭</p>
<p>10-13</p>
</td>
<td ALIGN="center">
<p>七碗</p>
<p>14-16</p>
</td>
<td ALIGN="center">
<p>兩個巴比倫</p>
<p>17-19</p>
</td>
<td ALIGN="center">
<p>尊基督為聖</p>
<p>20-22</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">主題</td>
<td ALIGN="center">天上的異象</td>
<td ALIGN="center" COLSPAN="5">地上的動亂</td>
<td ALIGN="center">新天新地</td>
</tr>
<tr>
<td ALIGN="center">審叛</td>
<td ALIGN="center" COLSPAN="5">三個週期的審判</td>
<td ALIGN="center">歡欣</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="7">愛情海中的拔摩島</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="7">約主後 95-96 年間</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
