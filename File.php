<?php
    public function files(){

        $Path = "./" . date('Ym') . "/";

        if (!is_dir($Path))//创建路径
        {
            mkdir($Path);
        }
        if ($_FILES["qqfile"]["size"] != 0) {
            $File = $Path . date('Ymdhm') . "_" . $_FILES["qqfile"]["name"];
            if (move_uploaded_file($_FILES["qqfile"]["tmp_name"], $File)) {
                echo true;
            } else {
            }
        }
    }
 
}
