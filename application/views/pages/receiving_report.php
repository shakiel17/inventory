
<div>
	<table width="500" border="0" cellspacing="0" cellpadding="1" style="font-family:Arial;font-size:9.5px; border-collapse: collapse;">
		<?php
		$grandtotal=0;
		$totalgross=0;
		$net=0;
		$vat=0;
		foreach($body AS $item){
			$desc=$item['description'];
				echo "<tr>";
				echo '<td align="center" width="10%" style="border-bottom:1px solid black; vertical-align:top;">' . $item['quantity'] . '</td>';
				echo '<td align="center" width="10%" style="border-bottom:1px solid black; vertical-align:top;">' . $item['unit'] . '</td>';
				echo '<td width="45%" style="border-bottom:1px solid black;">'.$desc.'</td>';								
				echo '<td align="right" width="11%" style="border-bottom:1px solid black; vertical-align:top;">' . number_format(0, 2) . '</td>';				
				echo '<td align="right" width="12%" style="border-bottom:1px solid black; vertical-align:top;">' . number_format(0, 2) . '</td>';				
				echo '<td align="right" width="12%" style="border-bottom:1px solid black; vertical-align:top;">' . number_format(0, 2) . '</td>';
				echo "</tr>";			
		}
		?>
	</table>
</div>
