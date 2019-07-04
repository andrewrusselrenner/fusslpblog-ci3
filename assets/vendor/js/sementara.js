var ucapansalam = "";

function cekTanggal() {	
	const tgl 		= new Date();
	const hariIni 	= tgl.toLocaleDateString("id-ID", {
		day: "numeric", month: "short", year: "numeric"
	}).replace(/ /g, "-");

	return hariIni;
}

function lebaran() {
	var tglLebaran  = "9-Jun-2019";
	if (tglLebaran <= cekTanggal())
	{
		this.ucapansalam 	 = "Semoga Ramadan kali ini menjadi berkah";
	}

	var salam		= "Minal Aidzin Wal Faidzin";
	var salam2		= "Mohon Maaf Lahir Batin ^^";

	this.ucapansalam = '<p class="text-center"><i class="far fa-smile-wink display-3"></i> <br><br> '+salam+" "+salam2+'</p><hr>';
	return;
}

this.dialog = bootbox.dialog({
	title: "Saya dan sekeluarga mengucapkan",
	message: '<p><i class="fas fa-spin fa-spinner"></i> Menunggu iklan marjan lewat...</p>'
});
            
dialog.init(function(){
	lebaran();
    setTimeout(function(){
        dialog.find('.bootbox-body').html(ucapansalam);
    }, 3700);
});
