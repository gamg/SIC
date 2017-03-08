<script>
    $(document).ready(function(){
        $('table').on('click', 'a.delete', function(event){
            event.preventDefault();
            var favorite_id = $(this).data('id');
            swal({
                title: "Are you sure to delete this product?",
                text: $(this).data('name'),
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function(isConfirm){
                if(isConfirm){
                    $("#form-delete input#form-id").val(favorite_id);
                    var data = $("#form-delete").serialize();
                    var route = $("#form-delete").attr("action");
                    $.ajax({
                        type: 'POST',
                        url: route,
                        data: data,
                        success: function(data)
                        {
                            if(data.result){
                                $("table tr").each(function(){
                                    if($(this).data("id") == data.id){
                                        $(this).fadeOut();
                                    }
                                });
                                swal("Deleted!", data.message, data.type);
                            } else {
                                swal("Error!", data.message, data.type);
                            }
                        },
                        error: function(data){
                            swal("Error!", 'Error, try later', 'error');
                        }
                    });
                }
            });
        });
    });
</script>