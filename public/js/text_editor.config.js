tinymce.init({
    selector:'.text_editor',
    branding: false,
    menubar: false,
    height: 300,
    plugins: "image lists link code",
    toolbar: 'undo redo | styleselect removeformat | fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignnone | indent outdent | bullist numlist | link unlink | image',
    file_browser_callback: function(field_name, url, type, win) {
        // trigger file upload form
        if (type == 'image') {
            $('#formUpload input').click();
        }
    }
});