<?php
?>
  <div class="panel panel-default">
  <!-- Standard-Panel-Inhalt -->
  <div class="panel-heading">Last Heard List of today's <?php echo LHLINES; ?> callsigns.</div>
  <!-- Tabelle -->
  <div class="table-responsive">  
  <table id="lastHeard" class="table table-condensed">
   <thead>
    <tr>
      <th>Time (UTC)</th>
      <th>Mode</th>
      <th>Callsign</th>
      <th>DSTAR-ID</th>
      <th>Target</th>
      <th>Source</th>
      <th>Dur (s)</th>
      <th>Loss</th>
      <th>BER</th>
    </tr>
   </thead>
   <tbody>
<?php
for ($i = 0; ($i < LHLINES) AND ($i < count($lastHeard)); $i++) {
		$listElem = $lastHeard[$i];
		echo"<tr>";
		echo"<td nowrap>$listElem[0]</td>";
		echo"<td nowrap>$listElem[1]</td>";
		echo"<td nowrap>$listElem[2]</td>";
		echo"<td nowrap>$listElem[3]</td>";
		echo"<td nowrap>$listElem[4]</td>";
		if ($listElem[5] == "RF"){
			echo "<td nowrap><span class=\"label label-success\">RF</span></td>";
		}else{
			echo"<td nowrap>$listElem[5]</td>";
		}
		if ($listElem[6] == null) {
				echo'<td  nowrap colspan="3">transmitting</td>';
			} else if ($listElem[6] == "SMS") {
				echo'<td  nowrap colspan="3">sending or receiving SMS</td>';
			} else {
			echo"<td nowrap>$listElem[6]</td>";
			echo"<td nowrap>$listElem[7]</td>";
			echo"<td nowrap>$listElem[8]</td>";
		}
		echo"</tr>\n";
	}

?>
  </tbody>
  </table>
  </div>  
</div>
<script>
$(document).ready(function(){
  
  $('#lastHeard').dataTable( {
    "aaSorting": [[0,'desc']]
  } );
	
});
</script>
