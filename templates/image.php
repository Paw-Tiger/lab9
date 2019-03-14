<?php
$FileUploadObj = new FileUpload();
$FileUploadObj->saveImage('image');
?>


<form method="post" enctype="multipart/form-data">
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile04" name="image[]" multiple>
            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
        </div>
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Button</button>
        </div>
    </div>
</form>