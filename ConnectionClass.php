<?php
class Connection 
{
        private $host;
        private $user;
        private $paswod;
        private $db_name;
        public  $userstable = "users";
        private $link;

        private function LocalDB()
        {
            $this->host = "localhost";
            $this->user = 'root';
            $this->paswod = '';
            $this->db_name = 'general';
        }

        public function Connect ()
        {
                $this->LocalDB();
                $this->link = mysql_connect ($this->host,$this->user,$this->paswod);
                if (!$this->link)
                {
                        die ("لا يمكن الاتصال بقاعدة البيانات");
                }
                $dbselect = mysql_select_db ($this->db_name,$this->link);
                mysql_query("SET NAMES 'utf8'");
                mysql_query("CHARACTER SET utf8");
                if (!$dbselect)
                {
                        die ("لا يمكن تحديد قاعدة البيانات");
                }
                return $this->link;
        }
}

?>
