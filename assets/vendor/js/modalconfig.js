$(document).ready(function(){
    $('#hapuspost').submit(function(e){
        var currentForm = this;
        e.preventDefault();
        bootbox.confirm({ 
            message: "Yakin mau dihapus?",
            callback: function(result){ 
                /* result is a boolean; true = OK, false = Cancel*/ 
                if(result === true)
                {
                    currentForm.submit();
                }
            }
        })
    });
});

// Modal untuk hapus data
function hapusDataTamu(id)
{
    Swal.fire({
        title: 'Yakin mau dihapus?',
        text: "Aksi ini akan menghapus data dari basis data!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus sud!',
        cancelButtonText: 'Jangan!',
        customClass: {
        confirmButton: 'btn btn-danger'
        },
        }).then((result) => {
        if (result.value) {
            document.location.href = link+'hapus_tamu/'+id;
        }
    })
}