<?

spl_autoload_register('autoLoader');
    
    function autoLoader($className) {

        $file_path = "class/";
        $file_extension = ".class.php";
        $file_underline = "_";
        $fullpath = $file_path . $file_underline . $className . $file_extension;

        if (!file_exists($fullpath)) {
            return false;
        }

        include_once $fullpath;
    }

?>