<?php

class FileUpload
{

    public function saveImage($inputName, $destenation = BASE_DIR)
    {
//        var_dump($destenation);
        if (isset($_FILES[$inputName])) {
//            var_dump($_FILES[$inputName]);
            $this->convertFiles($inputName);
//            var_dump($this->imageFiles);

            foreach ($this->imageFiles as $imageFile){
                move_uploaded_file($imageFile['tmp_name'],$destenation.'/images/'.$imageFile['name']);
            }
        }
    }

    private $imageFiles=[];

    private function convertFiles($inputName)
    {
        $countImg = count($_FILES[$inputName]['name']);
        $keys = array_keys($_FILES[$inputName]);
        for ($i = 0; $i < $countImg; $i++) {
            foreach ($keys as $key) {
                $this->imageFiles[$i][$key]=$_FILES[$inputName][$key][$i];
            }
        }
    }
}