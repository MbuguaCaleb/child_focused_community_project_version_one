 Dropzone.autoDiscover = false;

   $(document).ready(function () {
        $("#id_dropzone").dropzone({
            maxFiles: 2000,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            url: "/household/details/store",
            success: function (file, response) {

                console.log(file)   
                $('#create_child').append('<input type="hidden" name="file" value="' + file+ '">')
                     
            }
        });
   })