var mEditor;
let myeditor;

$(document).ready(function () {
    $("#formcoba").on("submit", function(e) {
        function newtext() {
            const editorData = myeditor.getData();
            
            var s = editorData;
            // var s = document.getElementById("editor").value;
            var r = /{{datasiswa}}/g;
            var replacer = "hiyahiya";
            var el = document.getElementById("hasil");
        
            var newstring = s.replace(r, replacer);
            console.log(newstring);
            $("#results").val(newstring);
            bootbox.alert({
                title: "ini pesannya",
                message: "okay"
            });
            el.innerHTML = newstring;
        }

        return newtext();
    });
});

DecoupledEditor
        .create( document.querySelector( '.document-editor__editable' ), {
            fontSize: {
                options: [
                    9,
                    11,
                    'default',
                    13,
                    14,
                    17,
                    19,
                    21
                ]
            },
            fontFamily: {
                options: [
                    'default',
                    'Arial, Calibri, Segoe UI, Helvetica, sans-serif',
					'Calibri, sans-serif',
					'Segoe UI, sans-serif',
					'Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Times New Roman, Playfair Display, serif',
                    'Playfair Display, serif'
                ]
            }
            // toolbar: [ 'fontSize', 'fontFamily', 'fontColor']
        })
        .then( editor => {
            const toolbarContainer = document.querySelector( '.document-editor__toolbar' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            myeditor = editor;
        } )
        .catch( error => {
            console.error( error );
        } );
