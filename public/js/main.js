$(document).ready(function() {
    $('.edit').on('click', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).attr('id');
        $.ajax({
            url: window.location.origin+'/guests/'+id,
            type: 'GET',          
            dataType: 'json',
            success: function(data) {
                $('input[name=guest_id]').val(data.id);
                $('input[name=name]').val(data.name);
                $('input[name=place]').val(data.place);
                $('input[name=per_num]').val(data.per_num);
                $('input[name=event_id]').val(data.event_id);
            }, 
            error: function(request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
            }
        });
    });
    $('#guest-form-ed').on('submit', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $('#guest_id').val();
        var formData = {
            id: id,
            name: $('#name').val(),
            place: $('#place').val(),
            per_num: $('#per_num').val(),
            event_id: $('#event_id').val()
        }
        $.ajax({
            url: window.location.origin+'/guests/'+id,
            type: 'PUT',
            data: formData,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#guest-modal-ed-form').modal('hide');
            }, 
            error: function(request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
            }
        });
    });
});
