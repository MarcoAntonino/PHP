<?php

/**
 *
 */
class Database
{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	private $link;

	function __construct($dbname = DB_NAME, $host = DB_HOST, $user = DB_USER, $pass = DB_PASS) {
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;
		$this->connection();
	}

  function getLink() {
      return $this->link;
  }

	function connection()	{

		try {
			$this->link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
		} catch (Exception $e) {

			echo $e->getMessage();
		}

	}

	public function insert($query)	{
		$results = $this->link->prepare($query);
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $post = $_POST["post"];
		$category = $_POST["category"];
		echo "GUARDA: ".$_POST["category"];
    $date = time();
    $results->bindParam(":title", $title, PDO::PARAM_STR);
    $results->bindParam(":subtitle", $subtitle, PDO::PARAM_STR);
    $results->bindParam(":post", $post, PDO::PARAM_STR);
    $results->bindParam(":date_posted", $date, PDO::PARAM_STR);
		$results->bindParam(":category_id", $category, PDO::PARAM_STR);
		if ($results->execute()) {
      echo "record: ".$this->link->lastInsertId()." inserted<br>" ;
		}
	}
}

?>
