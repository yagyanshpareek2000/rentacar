<?php $aylar = array(
		1=>"Ocak",
		2=>"Şubat",
		3=>"Mart",
		4=>"Nisan",
		5=>"Mayıs",
		6=>"Haziran",
		7=>"Temmuz",
		8=>"Ağustos",
		9=>"Eylül",
		10=>"Ekim",
		11=>"Kasım",
		12=>"Aralık"
); ?>
<table>
  <thead>
    <tr>
    <?php for($i=1; $i<=$aylar; $i++){ ?>
      <td><?=$aylar?></td>
    <?php } ?>
      </tr>
  </thead>
<tbody>
  <?php $period = ""; foreach($period as $val){ ?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
  <?php } ?>
</tbody>
</table>