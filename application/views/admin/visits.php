<?php
	
?>
<style type="text/css">
	button{
		color:#fff !important;
	}
	table, tr, td, th{
		font-family:'bariol'; 
	}
	table.table thead tr th{
		font-weight: bolder;
	}
	td.capa{
		text-transform: capitalize;
	}
</style>
<section id="main">
	<table class="table table-striped table-bordered" cellspacing="0" width="100%">
	  <thead>
	    <tr>
	      <!-- <th>ID</th> -->
	      <th>Visitor</th>
	      <th>Page</th>
	      <th>Timestamp</th>
	    </tr>
	  </thead>
	  <tbody>
<?php foreach($visits as $v): ?>
		<tr>	  
			<!-- <td><?=$u['id']?></td> -->
			<td class="email"><?=$v['email']?></td>
			<td class="capa"><?=$v['title']?></td>
			<td><?=date('F d, Y h:i a',strtotime($v['timestamp']))?></td>
			<!-- <td>
				<button type="button" class="btn blue-gradient btn-sm" id="changePass_<?=$u['id']?>">Change Code</button>
				<button type="button" class="btn btn-secondary btn-sm" id="userv_<?=$u['id']?>">User Visits</button>
				<button type="button" class="btn btn-danger btn-sm" id="deac_<?=$u['id']?>">Deactivate</button>
			</td> -->
		</tr>
<?php endforeach; ?>
	  </tbody>
	</table>
	
</section>


<script type="text/javascript">

	$(document).ready(function(){
		$("table.table").DataTable();
	});
	
</script>