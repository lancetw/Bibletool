<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">民數記簡介</h1>
<p>
民數記是聖經中的第四卷經書，意思是「在曠野中」。本卷書是記以色列百姓在曠野流蕩的經歷。在流蕩的過程中，摩西曾二次數點以色列百姓的人數，一次在西乃曠野(一章)另一次在摩押平原(廿章)；故以民數記為本卷書之名稱。</p>
<p>
本卷書有一重要的信息，就是：神的子民失敗的惟一原因是「不信」。從十一章起；就是以色列民在曠野失敗的慘痛史，而失敗的根源無一不是和「不信」有關。可算是對已蒙恩得救的人所發的一種警告啟示；那就是要「防備不信」。</p>
<p>本卷書按地理時空來分；簡單可分三大段：在西乃山，由西乃山至加低斯，在摩押。</p>
<p>
創世記講到「墮落」和「應許」，出埃及記講到「救贖」和「得勝」，利未記講到「事奉」和「聖潔」，民數記是講到「編組」與「訓練」；由此得知聖經頭四卷經書的信息是如何有緊密的關係。</p>
<hr>
<h1 ALIGN="center">民數記大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 以色列民在西乃曠野（第一次計點民數）</td>
<td>1:1-22:1</td>
</tr>
<tr>
<td>二、 在曠野中的爭戰</td>
<td>22:2-25:18</td>
</tr>
<tr>
<td>三、 預備進入迦南地（第二次計點民數）</td>
<td>26:1-36:13</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">民數記表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center" COLSPAN="3">第一代</td>
<td ALIGN="center" COLSPAN="2">死亡</td>
<td ALIGN="center" COLSPAN="3">新的一代</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>數點百姓</p>
<p>1-4</p>
</td>
<td ALIGN="center">
<p>潔淨百姓</p>
<p>5-8</p>
</td>
<td ALIGN="center">
<p>發怒百姓</p>
<p>9-12</p>
</td>
<td ALIGN="center">
<p>窺探迦南</p>
<p>13-16</p>
</td>
<td ALIGN="center">
<p>死在礦野</p>
<p>17-20</p>
</td>
<td ALIGN="center">
<p>火蛇與銅蛇</p>
<p>21-25</p>
</td>
<td ALIGN="center">
<p>二度數點</p>
<p>26-30</p>
</td>
<td ALIGN="center">
<p>進迦南的教導</p>
<p>31-36</p>
</td>
</tr>
<tr>
<td ALIGN="center">主題</td>
<td ALIGN="center" COLSPAN="3">預備行走</td>
<td ALIGN="center" COLSPAN="2">悖逆流浪</td>
<td ALIGN="center" COLSPAN="3">應許等候</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="3">西乃至加低斯</td>
<td ALIGN="center" COLSPAN="2">曠野</td>
<td ALIGN="center" COLSPAN="3">加低斯至摩押</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="3">兩個月</td>
<td ALIGN="center" COLSPAN="2">三十八年</td>
<td ALIGN="center" COLSPAN="3">幾個月</td>
</tr>
</table>
<hr>
<p>註 : 民 3:28 ...八千六百名, 應為八千三百名, 係由抄本聖經抄手之誤。</p>

'));
                                                                     
$smarty->display('outline.tpl');

?>
