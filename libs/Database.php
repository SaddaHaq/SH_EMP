<?php

class Database extends PDO{

    function __construct() {
        if($_SERVER['SERVER_NAME'] == 'et.saddahaq.com'){
                parent::__construct('mysql:host=localhost;dbname=SH_EMP', 'root', 'vivenfarms');
        }
        else if ($_SERVER['SERVER_NAME'] == 'i.viveninfomedia.com')
            {
                parent::__construct('mysql:host=localhost;dbname=SH_EMP_LIVE', 'root', 'vivenfarms');
        }
        else{
                parent::__construct('mysql:host=localhost;dbname=emp_mvc', 'root', 'dambo');
        }
        
    }

}
