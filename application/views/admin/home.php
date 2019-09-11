<?php
	
?>
<style type="text/css">
	button{
		color:#fff !important;
	}
</style>
<section id="main">
	<table class="table table-striped table-bordered" cellspacing="0" width="100%">
	  <thead>
	    <tr>
	      <!-- <th>ID</th> -->
	      <th>Email</th>
	      <th>Code</th>
	      <th>Date Created</th>
	      <th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
<?php foreach($users as $u): ?>
		<tr>	  
			<!-- <td><?=$u['id']?></td> -->
			<td><?=$u['email']?></td>
			<td><?=$u['raw']?></td>
			<td><?=date('F d, Y',strtotime($u['date_added']))?></td>
			<td>
				<button type="button" class="btn blue-gradient btn-sm" id="changePass_<?=$u['id']?>">Change Code</button>
				<button type="button" class="btn btn-danger btn-sm" id="deac_<?=$u['id']?>">Deactivate</button>
			</td>
		</tr>
<?php endforeach; ?>
	  </tbody>
	</table>
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	  <button type="button" class="btn-floating blue-gradient red" data-toggle="modal" data-target="#addUserModal">
	    <i class="fas fa-user"></i> Add user
	  </button>
	</div>
</section>


<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="createForm" class="text-center border border-light p-5">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <!-- Name -->
		    <input type="email" id="emailInput" maxlength="50" class="form-control mb-4" placeholder="Input Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

		    <!-- Email -->
		    <input type="text" id="codeInput" maxlength="10" class="form-control mb-4" placeholder="Input code" required="required">

		    <!-- Sign in button -->
		    <button class="btn btn-info btn-block" id="generator" type="button">Generate random code</button>

      </div>
      <div class="modal-footer">
        <button type="submit" id="triggerCreate" class="btn btn-primary" data-dismiss="modal">Create</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  	</form>
    </div>
  </div>
</div>


<div class="modal fade" id="updateCodeModal" tabindex="-1" role="dialog" aria-labelledby="updateCodeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="updateForm" class="text-center border border-light p-5">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      		<input type="hidden" id="idnum"/>
		    <!-- Email -->
		    <input type="text" maxlength="10" id="codeInputUpdate" class="form-control mb-4" placeholder="Input new code">

		    <!-- Sign in button -->
		    <button class="btn btn-info btn-block" id="generator" type="button">Generate random code</button>

      </div>
      <div class="modal-footer">
        <button type="submit" id="triggerUpdate" class="btn btn-primary" data-dismiss="modal">Update</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  	</form>
    </div>
  </div>
</div>

<script type="text/javascript">
	$("[id^=generator]").click(function(){
		let gn = makeid(8);
		$("input[id^=codeInput]").val(gn);
	})

	$(".modal").on("hidden.bs.modal",function(){
		$("input").val("");
	});

	$("#triggerCreate").click(function(){
		$(this).attr('disabled','disabled');
		let email = $("#emailInput").val();
		let code = $("#codeInput").val();
		if(!/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email) || code.length < 1){
			$(this).removeAttr('disabled');			
			toastr["error"]("Invalid email or code.");
			return ;
		}

		let frm = {
			'email':email,
			'raw':code
		};
		$.post('<?=base_url()?>admin/create_user',frm,function(data){
			setTimeout(function(){
				location.reload();
			},1000);
		});
	});

	$("[id^=changePass_]").click(function(){
		let id = $(this).attr('id').split("_")[1];
		$("#idnum").val(id);
		$("#updateCodeModal").modal('show');
	})

	$("#triggerUpdate").click(function(){
		$(this).attr('disabled','disabled');
		let code = $("#codeInputUpdate").val();
		let id = $("#idnum").val();
		let frm = {
			'id':id,
			'code':code
		};
	
		$.post('<?=base_url()?>admin/update_code',frm,function(data){
			setTimeout(function(){
				location.reload();
			},1000);
		});
	});

	$("[id^=deac]").click(function(data){
		$(this).attr('disabled','disabled');
		let id = $(this).attr('id').split("_")[1];

		$.post('<?=base_url()?>admin/deactivate',{id:id},function(data){
			setTimeout(function(){
				location.reload();
			},1000);
		});
	})

	function makeid(length) {
	   var result           = '';
	   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	   var charactersLength = characters.length;
	   for ( var i = 0; i < length; i++ ) {
	      result += characters.charAt(Math.floor(Math.random() * charactersLength));
	   }
	   return result;
	}

	
</script>