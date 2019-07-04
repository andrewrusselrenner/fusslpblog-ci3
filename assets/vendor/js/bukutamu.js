var bukutamu = new function() {
    this.el = document.getElementById('entryPost');

    var datapost;

    this.fetchServer = function() {
        $.ajax({
            url: '/pages/get_btentri',
            type: 'GET',
            cache: false,
            // data: 'nopang='+uid,
            dataType: 'json',
            success: function(data){
                datapost = data;
            },
            async: false,
            error: function(jqXHR, textStatus, errorThrown){
                console.log("Error");
                bootbox.alert({title: "Error cuk pas ngambil data", message: "<p>status code: "+jqXHR.status+"</p><p>errorThrown: " + errorThrown + "</p><p>jqXHR.responseText:</p><div>"+jqXHR.responseText + "</div>}"});
            }
        });
    };

    this.DapatkanSemuaData = function() {
        this.fetchServer();
        var data = "";

        // if (this.datapost > 0) {
            for (i in datapost) {
                data += '<div class="entry mb-2">';
                    data += '<div class="row m-2">';
                        data += '<div class="col-md-5">';
                            data += '<img class="img-fluid d-block rounded-circle mx-auto text-center" src="/assets/img/'+datapost[i].ava+'" id="ava">';
                        data += '</div>';
                        data += '<div class="col-md-7 pt-2">';
                            data += '<h2 class="penulis" id="penulis">' + datapost[i].namapenulis + '</h2>';
                            data += '<p class="text-small tanggal" id="tanggal">' + datapost[i].tanggal + '</p>';
                            data += '<div class="entry-text">';
                                data += '<p id="entext">' + datapost[i].pesan + '</p>';
                            data += '</div>';
                        data += '</div>';
                    data += '</div>';
                data += '</div>';
                data += '<hr>';
            }

        // bootbox.alert(data);
        return this.el.innerHTML = data;
    };

    this.pesanSukses = function() {
        Swal.fire(
            'Terima Kasih!',
            'Pesan Anda Telah Diposting ^^',
            'success'
          )
    };

    this.Tambah = function(ev) {
        // Mendapatkan waktu dan tanggal sekarang dalam UTC
        var date = new Date();
        var Tgl = date.toUTCString();

        var frm = $('#formgb').serializeArray();
        var ini = this;

        $.ajax({
            type: "POST",
            url: "/pages/buatentri",
            data: frm,
            success: function(data, textStatus, jqXHR) {
                ini.pesanSukses();
                // Tampilkan entri yg baru
                $( "#formgb" ).each(function(){
                    this.reset();
                });
                ini.DapatkanSemuaData();
            },
            error: function(jqXHR, status, error) {
                console.log(status + ": " + error);
                alert(status + ": " + error);
                console.log(frm);
            }
        });
    };
}

bukutamu.DapatkanSemuaData();