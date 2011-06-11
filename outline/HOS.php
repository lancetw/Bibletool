<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">何西阿書簡介</h1>
<p>
何西阿書是全部聖經中第二十八卷書，何西阿在主前721年,撒瑪利亞陷落前的那段紛亂時期，繼先知阿摩司在北國以色列傳　神的信息。他特別關心人民拜偶像，不忠於　神行為。他不惜以他自己不幸的婚姻生活來比擬以色列人民的背約，正如他的妻子歌篾對他不貞，神的子民也照樣背棄了　神，因此神的懲罰要臨到以色列。但　神有永遠的慈愛，並不永遠離棄以色列民，只要悔悟就能帶來希望，將來必能重回故土，重新建立與　神的盟約(何:18)。</p>
<p>何西阿是聖經作者中第一位用婚姻來象徵 神和祂子民親密關係的人；新約也把教會比作基督的新婦，以說明天父對祂</p>
<hr>
<h1 ALIGN="center">何西阿書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 標題</td>
<td>1:1</td>
</tr>
<tr>
<td>二、 先知的婚姻所宣佈的信息</td>
<td>1:2-3:5</td>
</tr>
<tr>
<td>三、 神對以色列的譴責</td>
<td>4:1-6:3</td>
</tr>
<tr>
<td>四、 先知宣佈刑罰促民悔改</td>
<td>6:4-10:15</td>
</tr>
<tr>
<td>五、 神不變的恩慈和應許</td>
<td>11:1-14:9</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">何西阿書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center">何西阿與歌蔑</td>
<td ALIGN="center" COLSPAN="4">以色列與神</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>預言的結合</p>
<p>1-3</p>
</td>
<td ALIGN="center">
<p>不義的結合</p>
<p>4-6</p>
</td>
<td ALIGN="center">
<p>悖逆的結合</p>
<p>7-8</p>
</td>
<td ALIGN="center">
<p>管教的結合</p>
<p>9-11</p>
</td>
<td ALIGN="center">
<p>潔淨的重聚</p>
<p>12-14</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">主題</td>
<td ALIGN="center">何西阿的婚姻</td>
<td ALIGN="center" COLSPAN="4">何西阿的信息</td>
</tr>
<tr>
<td ALIGN="center">
<p>不貞的妻子</p>
<p>饒恕的丈夫</p>
</td>
<td ALIGN="center" COLSPAN="4">
<p>不忠的國家</p>
<p>饒恕的神</p>
</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="5">北國以色列</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="5">約 45 年(主前 755-710 年)</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
