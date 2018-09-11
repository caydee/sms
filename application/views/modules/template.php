<div class="col-md-12">
	<div class="well" style="padding:10px 15px !important;">
		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#template" style="margin:0 !important;"><i class="fa fa-plus-circle"></i> Message Template</button>
	</div>
</div>







<div class="modal fade" id="template">
  	<div class="modal-dialog  modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
		        <h5 class="modal-title pull-left">Add Message Template</h5>
		        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
            <form action="<?=current_url(); ?>" method="post">
      		</div>
      		<div class="modal-body row">
             <div class="col-xs-12 col-md-9 form form-horizontal" style="border-right: solid 1px #DDD;">
             
                 <div class="form-group">
                   <label for="templatenm" class="control-label col-sm-12 col-md-4">Template Name</label>
                   <div class="col-sm-12 col-md-8">
                     <input type="text" name="" id="templatenm" class="form-control">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="templatemsg" class="control-label col-sm-12 col-md-4">Template Message</label>
                   <div class="col-sm-12 col-md-8">
                     <textarea type="text" name="" id="templatemsg" class="form-control summernote">
                     </textarea>
                   </div>
                 </div>
               
             </div>
             <div class="col-xs-12 col-md-3">
               <h6 class="text-center text-underline">Guidlines</h6>
              
                <small class="text text-secondary sidedescription"> 
                  use <em>{{$variable}} </em>to identify the variable. The variables may include
                  <ul class="list-group">
                    <li>username</li>
                    <li>Tel No</li>
                    <li>Location</li>
                    
                  </ul>
                </small>
               
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