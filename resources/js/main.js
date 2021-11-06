$(document).ready(function() {

    $('#btn_reg').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: "{{ route('guests.store') }}",
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (data) {
                $('#guest-form').trigger('reset');
                $('#guest-modal-form').modal('hide');
                console.log(data);
            }
        });
    });

    $('.delete').on('click', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).val('id');

        $.ajax({
            url: "{{ route('guests.destroy', "+id+") }}",
            type: 'POST',
            
        });
    });
});
