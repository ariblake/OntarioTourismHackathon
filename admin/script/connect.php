<?php

$db_dsn = array(
	'host'=>'localhost',
	'dbname'=>'db_ontsummer',
	'charset'=>'utf8'
);

$dsn = 'mysql:' . http_build_query($db_dsn,'',';');
$db_user = 'root';
$db_pass = 'root';


try{
	$pdo = new PDO($dsn, $db_user, $db_pass);
}catch(PDOException $exception){
	echo "Connection Error: ". $exception->getMessage();
	exit();
}




// class Database
// {
//     private $host = "localhost";

//     private $db_name = "db_ontsummer";

//     private $username = "root";

//     private $password = "root";

//     private static $instance = null;
//     public $conn;

//     private function __construct(){

//         $db_dsn = array(
//             'host'    => $this->host,
//             'dbname'  => $this->db_name,
//             'charset' => 'utf8',
//         );

//         if (getenv('IDP_ENVIRONMENT') === 'docker') {
//             $db_dsn['host'] = 'mysql';
//             $this->username = 'docker_u';
//             $this->password = 'docker_p';
//         }

//         try {
//             $dsn        = 'mysql:' . http_build_query($db_dsn, '', ';');
//             $this->conn = new PDO($dsn, $this->username, $this->password);
//         } catch (PDOException $exception) {
//             echo json_encode(
//                 array(
//                     'error'   => 'Database connection failed',
//                     'message' => $exception->getMessage(),
//                 )
//             );
//             exit;
//         }

//     }

//     // get the database connection
//     public function getConnection()
//     {
//         return $this->conn;
//     }

//     public static function getInstance() {
//         if(!self::$instance){
//             self::$instance = new Database();
//         }

//         return self::$instance;
//     }
// }