<?

spl_autoload_register('autoLoader');
    
    function autoLoader($className) {
        //Folder Path
        $file_path = "class/";
        //After the class name
        $file_extension = ".class.php";
        //Before the className underline
        $file_underline = "_";
        //Full Path To The File
        $fullpath = $file_path . $file_underline . $className . $file_extension;
        //Error Handeling
        if (!file_exists($fullpath)) {
            return false;
        }

        include_once $fullpath;
    }

?>