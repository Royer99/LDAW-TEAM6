$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#next').click(function() {
    /*
    var fd = new FormData();
    fd.append('photo', $('#photo')[0].files[0]);
    fd.append('proofOfAddress', $('#proofOfAddress')[0].files[0]);
    fd.append('CURP', $('#CURP')[0].files[0]);
    fd.append('RFC', $('#RFC')[0].files[0]);
    fd.append('INE', $('#INE')[0].files[0]);
    fd.append('contract', $('#contract')[0].files[0]);
    fd.append('promissory', $('#promissory')[0].files[0]);

    
    $.ajax({
        url: '/title/uploadFiles',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        async: false,
        success: function(response) {
            if (response != 0) {
                photo = response.photo;
                proofOfAddress = response.proofOfAddress;
                CURP = response.CURP;
                RFC = response.RFC;
                INE = response.INE;
                contract = response.contract;
                promissory = response.promissory;
            } else {
                M.toast({ html: '!Archivos cargados con exito', classes: 'red' });
            }
        },
    });

    */

    title = $('#title').val();
    description= $('#description').val();
    edition= $('#edition').val();
    version= $('#vesion').val();
    //image

    $.post("/title", {
            _title: title,
            _description: description,
            _edition: edition,
            _version: version,
        })
        .done(function(data) {
            //M.toast({ html: '!Titulo registrado con exito', classes: 'light-green accent-3' });
            //delay
            //redirect
        });
});