<?php
class Database
{
	public static $db;
	public static $con;
	private $user;
    private $pass;
    private $host;
    private $ddbb;

	function __construct()
	{
		$this->user = "root";
		$this->pass="123456";
		$this->host = "localhost";
		$this->ddbb = "seguimiento_egresados2";
	}

	function connect()
	{
		try{
		$con = new mysqli($this->host, $this->user, $this->pass, $this->ddbb);
		
	}catch(Exception ){
		echo "No hay conexion a la base de datos" ;
		Core::redir("./?view=Error");
		exit;
	}
	return $con;
		
	}


	public static function getCon()
	{
		if (self::$con == null && self::$db == null) {
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
}