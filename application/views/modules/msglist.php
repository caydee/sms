<div class="col-md-12">
	<div class="well" style="padding:10px 15px !important;">
		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#msglist" style="margin:0 !important;"><i class="fa fa-plus-circle"></i> Message list</button>
	</div>
</div>





<div class="modal fade" id="msglist">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pull-left">Add Message List</h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" method="post" class="form form-horizontal" role="form">
         	<div class="form-group">
         		<label for="name" class="control-label col-md-2 col-md-offset-2">Name</label>
         		<div class="col-md-6">
         			<input type="text" name="cname" id="name" class="form-control">
         		</div>
         	</div>
         	<div class="form-group">
         		<label for="phone" class="control-label col-md-2 col-md-offset-2">Phone No</label>
         		<div class="col-md-6">
         			<input type="text" name="telno" id="phone" class="form-control">
         		</div>
         	</div>
         	<div class="form-group">
         		<label for="occupation" class="control-label col-md-2 col-md-offset-2">Occupation</label>
         		<div class="col-md-6">
         			<input type="text" name="occupation" id="occupation" class="form-control">
         		</div>
         	</div>
         	<div class="form-group">
         		<label for="town" class="control-label col-md-2 col-md-offset-2">Town</label>
         		<div class="col-md-6">
         			<input type="text" name="town" id="town" class="form-control">
         		</div>
         	</div>
         	<div class="form-group">
         		<label for="county" class="control-label col-md-2 col-md-offset-2">County</label>
         		<div class="col-md-6">
         			<select name="county" id="county" class="form-control" required>
         				<?php
         				foreach($county as $value)
	         				{
	         					echo '<option value="'.$value->county_id.'">'.$value->county_name.'</option>';
	         				}
	         			?>
         			</select>
         		</div>
         	</div>
         	<div class="form-group">
         		<label for="constituency" class="control-label col-md-2 col-md-offset-2" >Constituency</label>
         		<div class="col-md-6">
         			<select name="constituency" id="constiteuncy" class="form-control">
         				
         			</select>
         		</div>
         	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>