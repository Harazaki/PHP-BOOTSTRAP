/* ========================================================================
   Its Only a Example, next build your script https://github.com/Harazaki/PHP-BOOTSTRAP
 * ======================================================================== */
 
 // Default Modal template
 
function modal_tmp(modal_title,modal_body,modal_footer){
var tmpl_modal = '<div class="modal fade" id="mymodal" tabindex="-1" role="dialog"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="mymodallabel">'+( modal_title ? modal_title : 'My Modal' )+'</h4> </div> <div class="modal-body"> '+( modal_body ? modal_body : 'Modal Body  Here :)' )+' </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> '+( modal_footer ? modal_footer : '' )+'</div></div></div></div>';
return tmpl_modal;
}

 //select.autosubmit
 
$(document).ready(function () {

	$(document).on('change', 'form select.autosubmit', function () {
		this.form.submit();
	});
	
});