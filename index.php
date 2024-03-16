<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <div>
        <textarea name="editor1" id="editor1">&lt;p&gt;Initial editor content.&lt;/p&gt;</textarea>
    </div>
    <script>
        CKEDITOR.replace('editor1',{
            extraPlugins: "btgrid",
            // filebrowserBrowseUrl : '/browser/browse.php',
            filebrowserUploadUrl: "http://localhost/project/upload.php",
            filebrowserUploadMethod: "form"
        });
    </script>
    
</body>
</html>