<?php

class UploadController{
    static $maxSize = 1024 * 1024 * 5;
    static $typefiles = [
        "image/png" => "png",
        "image/jpeg" => "jpg",
    ];
    static $path = __DIR__ . "/../uploads/";

     public static function normalizePictures($pictures){
        $files = [];
        if(is_array($pictures['name'])){
            foreach($pictures['name'] as $index => $name){
                $files[] = [
                    "name" => $pictures['name'][$index],
                    "type" => $pictures['type'][$index],
                    "tmp_name" => $pictures['tmp_name'][$index],
                    "error" => $pictures['error'][$index],
                    "size" => $pictures['size'][$index],
                ];
            }
        }
        else{
            $files[] = $pictures;
        }
        return $files;
     }

     public static function randomName($extension){
        $name = bin2hex(random_bytes(16));
        return $name . "." . $extension;
     }

    public static function uploads($pictures){
        $files = [];
        $errors = [];
        $saves= [];

        if($pictures){
            $files = self::normalizePictures($pictures);
        }

        foreach($files as $index => $photo){
            $err = $photo["error"] ?? UPLOAD_ERR_NO_FILE;
            if($err === UPLOAD_ERR_NO_FILE) 
            if($err !== UPLOAD_ERR_OK){
                $errors[] = "erro no upload (photo: [$index])";
                continue;
            }
            if($photo['size']??0 > self:: $maxSize){
                $errors[] = "Excedeu o limite  de" . self:: $maxSize . "MB -(photo: {$index})";
                continue;
            }

            $info = new \finfo(FILEINFO_MIME_TYPE);
            $mine = $info->file($photo['tmp_name']) ?: ($photo('type')?? "application/octet-stream");
            if(!isset(self::$typefiles[$mine])){
                 $errors[] = "tipo de arquvo não permitido"; 
                continue;
            }

            $photoName = self::randomName(self::$typefiles[$mine]);
            $destpath = self::$path . $photoName;
            if(!move_uploaded_file($photo['tmp_name'], $destpath)){
                $errors[] = "falha ao mover o arquivo";
                continue;
            }
            $saves[] = $photoName;
        }
        return ["files"=> $files, "error"=> $errors, "saves"=> $saves];
    }

}
?>