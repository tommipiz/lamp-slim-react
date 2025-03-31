<?php
    class Db extends MySQLi {
        static protected $instance = null;

        public function __construct($host,$user,$password,$shcema) {

            parent::__construct($host,$user,$password,$shcema);

            }

        static function getInstance() {
            if(self::$instance == null)
                self::$instance = new Db('my_mariadb','root', 'ciccio','scuola');
            }
            return self::$instance;
        }

        public function select($table,$where=1) {
            $query ="SELECT * FROM $table WHERE $where";
            $result = $this->query($query);
            return $result->fetch_all(MYSQL_ASSOC);
        }

?>