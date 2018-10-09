<?php
//ini_set('display_errors', 1);
class DataCenter
{
	private $link;
	
	function __construct()
	{
		$this->connect();
		
		//On a development server just turn displaying errors on:
		
		
		//While on a production server turn displaying errors off while logging errors on:
		//ini_set('display_errors', 0);
		//ini_set('log_errors', 1);
		
		
	}
	
	function __destruct() {
		
		if (!$this->link)
		{
			mysqli_close($this->link);
			echo "close database";
		}
	}
	
	function connect()
	{
		$file = 'settings.ini';
		
		if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');
		
		//echo $settings['database']['driver'] . "<br />";
		//echo $settings['database']['host'] . "<br />";
		//echo $settings['database']['port'] . "<br />";
		//echo $settings['database']['username'] . "<br />";
		//echo $settings['database']['password'] . "<br />";
	
		$dns = $settings['database']['driver'] .
        ':host=' . $settings['database']['host'] .
        ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        ';dbname=' . $settings['database']['schema'];
		
		
		$this->link = new PDO($dns, $settings['database']['username'], $settings['database']['password']);
		
		
        /*	
		$opt = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];
		*/
		$this->link->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$this->link->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
		$this->link->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
		

		
		if (!$this->link) {
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		
		//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
		//echo "Host information: " . mysqli_get_host_info($this->link) . PHP_EOL;
		
	}
	function Login($userName, $password)
	{
		$qry = "SELECT Id, Name FROM users WHERE UserName = :UserName AND Password = Password(:Password)";
		
		$stmt = $this->link->prepare($qry);
		
		
		//echo "userName: ".$userName."<br />";
		//echo "password: ".$password."<br />";
		
		$stmt->bindParam(':UserName', $userName, PDO::PARAM_INT);
		$stmt->bindParam(':Password', $password, PDO::PARAM_STR, 50);
		
		//$stmt->execute(array(':UserName' => $userName, ':Password' => $password));
		$stmt->execute();
		
		if ((int)$stmt->rowCount() > 0 )
		{
			foreach ($stmt as $row)
			//$row = $stmt[0];
			
			return array($row['Name'], $userName, $password);
		}
		
		return "";
		
		//echo "rows: ".$stmt->rowCount()."<br />";
		
		/*
		$qry = "SELECT Id, Name FROM users WHERE UserName = '".$userName."' AND Password = Password('".$password."')";
		
		$stmt = $this->link->prepare($qry);
		
		
		echo "userName: ".$userName."<br />";
		echo "password: ".$password."<br />";
		
		$stmt->execute();
		
		echo "rows: ".$stmt->rowCount()."<br />";
		*/
		foreach ($stmt as $row)
		{
			echo $row['Name'] . "\n";
		}
	}
	function ExecuteNonQuery($query)
	{
		return $this->link->query($query) or die($query . "<br />" .$this->link->error);
	}
	function ExecuteQuery($query)
	{
		mysqli_set_charset( $this->link, 'utf8');
		return $this->link->query($query);
	}	
}
?>