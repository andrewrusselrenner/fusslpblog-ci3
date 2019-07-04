FroalaEditor.DefineIcon('imageInfo', {NAME: 'info', SVG_KEY: 'help'});
  FroalaEditor.RegisterCommand('imageInfo', {
    title: 'Info',
    focus: false,
    undo: false,
    refreshAfterCallback: false,
    callback: function () {
      var $img = this.image.get();
      alert($img.attr('src'));
    }
  });

new FroalaEditor('textarea#froala-editor', {
    // Set the file upload URL.
    imageUploadURL: '/api/imgupload',

    imageUploadParams: {
      id: 'my_editor'
    },

    // Set image buttons, including the name
    // of the buttons defined in customImageButtons.
    imageEditButtons: ['imageDisplay', 'imageAlign', 'imageInfo', 'imageRemove'],

    // Set height
    height: 300,

    // Set the image upload URL.
    imageManagerLoadURL: '/api/loadimg',

    // Set the image delete URL.
    imageManagerDeleteURL: '/api/delimg'
})

Dropzone.autoDiscover = false;
console.log("ini nama filenya "+this.namafile);

var foto_upload = new Dropzone('.dropzone',{
  url: '/api/imgupload',
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  maxFiles: 1,
  method:"post",
  addRemoveLinks:true,
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
  // success: function( file, response ){
  //   a = JSON.parse(response);
  //   this.namafile = a.filename;
  //   // alert(obj.filename); // <---- here is your filename
  //   console.log("Bisa");
  //   bootbox.alert("Bisa sud");
  //   bootbox.alert(this.namafile);
  //   $("#gbrnama").val(this.namafile);
  // }
})

foto_upload.on("success", function( file, response ){
  a = JSON.parse(response);
  if (!this.namafile)
  {this.namafile = a.filename;}
  console.log("Bisa");
  // bootbox.alert("Bisa sud");
  // bootbox.alert(this.namafile);
  $("#gbrnama").val(this.namafile);
})

//Event ketika foto dihapus
foto_upload.on("removedfile",function(file, response){
  var nfile = this.namafile;
	$.ajax({
		type:"post",
		data:{filename:nfile},
		url:"/api/delfile",
		cache:false,
		dataType: 'json',
		success: function(){
      console.log("Foto terhapus");
      bootbox.alert("Dah ilang fotonya");
      $("#gbrnama").val();
		},
		error: function(jqXHR, textStatus, errorThrown){
      console.log("Error");
      bootbox.alert({title: "Error cuk pas ngeremove", message: "<p>status code: "+jqXHR.status+"</p><p>errorThrown: " + errorThrown + "</p><p>jqXHR.responseText:</p><div>"+jqXHR.responseText + "</div>}"});
      console.log(nfile);
		}
	});
});