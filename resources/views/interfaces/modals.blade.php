<script type="text/javascript">
function show_popup(url){
    // LOADING THE AJAX MODAL
    //alert("found");
    $('#modal_ajax').modal('show', {backdrop: 'true'});
    //load spinner
    $('#modal_ajax .modal-body').html('<div style="text-align:center"><i class="icon-spin icon-refresh" style="font-size: 4em;"></i></div>');
    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
            url: url,
            method: 'get',
            success: function(response)
            {
               $('#modal_ajax .modal-body').html(response);
            }
    });
 }

</script>
<div class="modal fade" id="modal_ajax" role="dialog" width="800px">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5>{{ config('app.name', 'Laravel') }}</h5>
            </div>
            
            <div class="modal-body">
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>
