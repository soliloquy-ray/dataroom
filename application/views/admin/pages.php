<?php
	$pageTitles = array("Home","What We Do", "Who We Are", "For Investors", "Improofment Case Studies");

?>
<style type="text/css">

	table{
		max-width: 70vw;
	}
	button{
		color:#fff !important;
	}

	td.emphasis{
		font-weight: bolder;

	}
</style>
<section id="main">
	<table class="table table-striped table-bordered" cellspacing="0" width="100%">
	  <thead>
	    <tr>
	      <!-- <th>ID</th> -->
	      <th>Page</th>
	      <th>Title</th>
	      <th>Subtitle</th>
	      <th>Type</th>
	      <th>Content</th>
	      <th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
<?php foreach($contents as $i=>$c): ?>
		<tr>	  
			<!-- <td><?=$u['id']?></td> -->
			<td class="emphasis"><?=$pageTitles[$c['pageId']-1]?></td>
			<td><?=$c['title']?></td>
			<td><?=$c['subtitle']?></td>
			<td><?=$c['type']?></td>
			<td class="ellipsis">
<?php
			echo substr($c['content'],0,100);
			if(strlen($c['content']) > 100) echo "...";
			
?>
				
			</td>
			<td>
				<button type="button" class="btn blue-gradient btn-sm" id="upd_<?=$c['id']?>">Update</button>
				<button type="button" class="btn btn-danger btn-sm" id="deac_<?=$c['id']?>">Deactivate</button>
			</td>
		</tr>
<?php endforeach; ?>
	  </tbody>
	</table>
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	  <button type="button" class="btn-floating blue-gradient red" data-toggle="modal" data-target="#newContentModal">
	    <i class="fas fa-user"></i> Add new
	  </button>
	</div>
</section>


<div class="modal fade" id="updateContentModal" tabindex="-1" role="dialog" aria-labelledby="updateContentModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	<form method="post" action="<?=base_url()?>pages/edit" id="updateForm" class="text-center border border-light p-5" enctype="multipart/form-data">

      		<input type="hidden" name="idnum"/>
      		<input type="hidden" name="pidnum"/>
      		<input type="text" maxlength="10" class="form-control mb-4" name="pagename" readonly="true">
		    <!-- Email -->
		    <input type="text" maxlength="50" name="title" class="form-control mb-4" placeholder="Enter title">
		    <input type="text" maxlength="100" name="subtitle" class="form-control mb-4" placeholder="Enter subtitle">

		    <select name="type" class="form-control mb-4">
		    	<option value="video">Video</option>
		    	<option value="text">Text</option>
		    	<option value="pdf">PDF</option>
		    	<option value="image">Image</option>
		    </select>

		    <input type="file" name="userfile" />

		    <input type="hidden" name="oldcontent"/>
		    <textarea rows="6" name="content_text" class="form-control mb-4"></textarea>
		    <input type="text" name="video_name" class="form-control mb-4" placeholder="Enter video filename"/>


	        <input type="submit" id="triggerUpdate" class="btn btn-primary" value="Update" >
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

    	</form> 
      </div>  	
    </div>
  </div>
</div>

<div class="modal fade" id="newContentModal" tabindex="-1" role="dialog" aria-labelledby="newContentModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	<form method="post" action="<?=base_url()?>pages/new" id="createForm" class="text-center border border-light p-5" enctype="multipart/form-data">

      		<input type="hidden" name="idnum"/>
      		
		    <select name="pageId" class="form-control mb-4" required="true">
		    	<option value="1">Home</option>
		    	<option value="2">What we do</option>
		    	<option value="4">For Investors</option>
		    	<option value="5">Improofment Case Studies</option>
		    </select>

		    <!-- Email -->
		    <input type="text" maxlength="50" name="title" class="form-control mb-4" placeholder="Enter title" required="true"/>
		    <input type="text" maxlength="100" name="subtitle" class="form-control mb-4" placeholder="Enter subtitle"/>

		    <select name="type" class="form-control mb-4" required="true">
		    	<option value=""></option>
		    	<option value="video">Video</option>
		    	<option value="text">Text</option>
		    	<option value="pdf">PDF</option>
		    	<option value="image">Image</option>
		    </select>

		    <input type="file" name="userfile" />

		    <textarea rows="6" name="content_text" class="form-control mb-4"></textarea>
		    <input type="text" name="video_name" class="form-control mb-4" placeholder="Enter video filename"/>


	        <input type="submit" id="triggerUpdate" class="btn btn-primary" value="Create">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

    	</form> 
      </div>  	
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".alert").alert('close');

		if(location.hash.substring(1) == "success"){
			toastr["success"]("Page updates have been saved.");			
    		history.pushState("", document.title, window.location.pathname
                                                       + window.location.search);
		}	
		if(location.hash.substring(1) == "error"){
			toastr["error"]("Something went wrong. Please try again later.");			
    		history.pushState("", document.title, window.location.pathname
                                                       + window.location.search);
		}	
		$("[name^=video_name]").keyup(function(){
			let v = $(this).val();
			let lx = v.split("/");
			if(lx.length > 1){
				toastr["error"]("No slashes in the filename.")
				$(this).val(lx[lx.length-1]);
			}
		});
	
		$("table.table").DataTable();
	
	});

	function removeHash () { 
	    let scrollV, scrollH, loc = window.location;
	    if ("pushState" in history)
	        history.pushState("", document.title, loc.pathname + loc.search);
	    else {
	        // Prevent scrolling by storing the page's current scroll offset
	        scrollV = document.body.scrollTop;
	        scrollH = document.body.scrollLeft;

	        loc.hash = "";

	        // Restore the scroll offset, should be flicker free
	        document.body.scrollTop = scrollV;
	        document.body.scrollLeft = scrollH;
	    }
    }

	let pageTitles = ['Home', 'What we do', 'Who we are', 'For Investors', 'Improofment Case Studies'];
	$("button[id^=upd_]").click(function(){
		let id = $(this).attr("id").split("_")[1];

		$.post('<?=base_url()?>pages/get_content',{id:id},function(data){
			let dt = JSON.parse(data);
			$("[name=idnum]").val(dt.id);
			$("[name=pidnum]").val(dt.pageId);
			$("[name=pagename]").val(pageTitles[dt.pageId - 1]);
			$("[name=title]").val(dt.title);
			$("[name=subtitle]").val(dt.subtitle);
			$("select[name=type]").val(dt.type);
			if(dt.type == "text"){
				$("[name=userfile]").hide();
				$("[name^=video_name]").hide();
				$("[name^=content_text]").show();
				$("[name^=content_text]").val(dt.content);
			}
			else if(dt.type == "video"){
				let fnm = dt.content.split("/");
				$("[name^=userfile]").hide();
				$("[name^=content_text]").hide();
				$("[name^=video_name]").show();
				$("[name^=video_name]").attr("required",true);
				$("[name^=video_name]").val(fnm[fnm.length - 1]);			
			}else{
				/* set mimes */
				switch(dt.type){
					case "pdf":
						$("[name=userfile]").attr("accept",".pdf");
						break;
					// case "video":
					// 	$("[name=userfile]").attr("accept",".mp4,.m4v,.avi,.mov");
					// 	break;
					case "image":
						$("[name=userfile]").attr("accept",".jpg,.png,.gif");
						break;
				}

				$("[name^=oldcontent]").val(dt.content);
				$("[name^=userfile]").show();
				$("[name^=video_name]").hide();
				$("[name^=content_text]").hide();
			}
			$("#updateContentModal").modal('show');
		});
	});

	$("#newContentModal").on("show.bs.modal",function(){
		$("#newContentModal select[name=type]").val("");
		$("[name^=userfile]").hide();
		$("[name^=content_text]").hide();
		$("[name^=video_name]").hide();
	})

	$(".modal").on("hidden.bs.modal",function(){
		$("input:not([type=submit])").val("");
		$("select").val("");
		$("textarea").val("");
	});

	$("select[name^=type]").change(function(){
		if($(this).val()=="text"){
			$("[name^=userfile]").hide();
			$("[name^=video_name]").hide();
			$("[name^=content_text]").show();
			$("[name^=content_text]").attr("required",true);
			$("[name^=content_text]").val(dt.content);
		}else if($(this).val() == "video"){
			$("[name^=userfile]").hide();
			$("[name^=content_text]").hide();
			$("[name^=video_name]").show();
			$("[name^=video_name]").attr("required",true);
			$("[name^=video_name]").val(dt.content);			
		}else{
			/* set mimes */
			switch($(this).val()){
				case "pdf":
					$("[name^=userfile]").attr("accept",".pdf");
					break;
				// case "video":
				// 	$("[name^=userfile]").attr("accept",".mp4,.m4v,.avi,.mov");
				// 	break;
				case "image":
					$("[name^=userfile]").attr("accept",".jpg,.png,.gif");
					break;
			}
			$("[name^=userfile]").show();
			$("[name^=content_text]").hide();
			$("[name^=video_name]").hide();
		}
	})

	/*$("#createForm").on("submit",function(e){
		$("#createForm input[type=submit]").attr("disabled",true);
		e.preventDefault();
		$.ajax({
        	url: "<?=base_url()?>pages/new",
		   type: "POST",
		   data:  new FormData(this),
		   contentType: false,
		         cache: false,
		   processData:false,
		   beforeSend : function()
		   {
		    //$("#preview").fadeOut();
		   },
		   success: function(data)
		      {
		    	if(data == 1){
		    		location.reload();
		    	}else{
					$("#createForm input[type=submit]").removeAttr("disabled");
		    		toastr["error"]("The file you are trying to upload is not allowed.");
		    	}
		      },
		     error: function(e) 
		      {
				$("#createForm input[type=submit]").removeAttr("disabled");
		    	toastr["error"]("The file you are trying to upload is not allowed.");
		      }          
		    });
	});*/

	$("#updateForm").on("submit",function(e){
		/*$("#updateForm input[type=submit]").attr("disabled",true);
		e.preventDefault();
		 $.ajax({
        	url: "<?=base_url()?>pages/edit",
		   type: "POST",
		   data:  new FormData(this),
		   contentType: false,
		         cache: false,
		   processData:false,
		   beforeSend : function()
		   {
		    //$("#preview").fadeOut();
		   },
		   success: function(data)
		      {
		    	if(data == 1){
		    		location.reload();
		    	}else{
					$("#updateForm input[type=submit]").removeAttr("disabled");
		    		toastr["error"]("The file you are trying to upload is not allowed.");
		    	}
		      },
		     error: function(e) 
		      {
				$("#updateForm input[type=submit]").removeAttr("disabled");
		    	toastr["error"]("The file you are trying to upload is not allowed.");
		      }          
		    });*/
	});

	$("[id^=deac]").click(function(data){
		$(this).attr('disabled','disabled');
		let id = $(this).attr('id').split("_")[1];

		$.post('<?=base_url()?>pages/deactivate',{id:id},function(data){
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