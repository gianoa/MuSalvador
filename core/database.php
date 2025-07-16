<?php 	

namespace core;
use PDO;
use PDOException;

class Database{

	private static $instance = null;
	private $host;
	private $port;
    private $db;
    private $user;
    private $pass;
	private $pdo;

	private function __construct(){
		$this->host = DB_HOST;
		$this->port = DB_PORT;
		$this->db   = DB_NAME;
		$this->user = DB_USER;
		$this->pass = DB_PASS;


		$dsn = "sqlsrv:Server={$this->host},{$this->port};Database={$this->db};Encrypt=yes;TrustServerCertificate=1;ConnectionPooling=0";


		try {
			$this->pdo = new PDO($dsn,$this->user,$this->pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
															  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
		} catch (PDOException $e) {
			die("Error de conexion: " . $e->getMessage());
		}
	}

	public static function getInstance(){
		if (self::$instance == null) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	public function getConnection(){
		return $this->pdo;
	}

}