<?php
require_once 'connection.php'; 
require_once 'library.php';
$db = $m->helfis;
$collection = $db->Points;
$session= getemail(session_id());
$fname = getname(session_id());
$array = array("Total Classes"=> -1);
$cursor = $collection->find();
$cursor	=	$cursor->sort($array)->limit(3);
?>
<style type="text/css">
	.myrank:before {
  content: '\2807';
  font-size: 30px;
  }
</style>
<table class="table" style="padding: 10px;">
		<thead>
			<th>Rank</th>
			<th>Name</th>
			<th>Points</th>
		
		</thead>
		<tbody>
<?php	
$i=0;
foreach ($cursor as $key => $value) {
	?>
		<tr>
			<td>
				<?= ++$i; ?>
			</td>
			<td>
				<?= $value['FirstName'] ;?>
			</td>

			<td>
				<?= $value['Total Classes']*5;?>
			</td>
		</tr>
<?php }
$i=0;
$cursor = $collection->find();
foreach ($cursor as  $value) {
	++$i;
	if($i>3 && $value['Firstname']==$fname)
	{?>
			<tr><td></td><td class="myrank"></td><td></td><td></td></tr>
			<tr>
				<td>
					<?= $i; ?>
				</td>
				<td>
					<?= $value['FirstName'] ;?>
				</td>

				<td>
					<?= $value['Total Classes']*5;?>
				</td>
			</tr>
<?php }} ?>
	</tbody>
</table>
