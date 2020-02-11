<?php
ini_set('display_errors', 1);
require_once ('config.php');

class Database
{
    // Note: specify your own database credentials
    private $host = "localhost";
    private $db_name = "ontario_form";
    private $username = "root";
    private $password = "root";

    private static $instance = null;
    public $conn;

    private function __construct(){

        $db_dsn = array(
            'host'    => $this->host,
            'dbname'  => $this->db_name,
            'charset' => 'utf8',
        );

        if (getenv('IDP_ENVIRONMENT') === 'docker') {
            $db_dsn['host'] = 'mysql';
            $this->username = 'docker_u';
            $this->password = 'docker_p';
        }

        try {
            $dsn        = 'mysql:' . http_build_query($db_dsn, '', ';');
            $this->conn = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo json_encode(
                array(
                    'error'   => 'Database connection failed',
                    'message' => $exception->getMessage(),
                )
            );
            exit;
        }
    }

}

