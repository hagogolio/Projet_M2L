
<?php

class DBConnection extends PDO
{
    public function __construct()
    {
        parent::__construct("mysql:host=localhost;dbname=formationppe;charset=utf8", 'root','');
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // always disable emulated prepared statement when using the MySQL driver
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}

?>