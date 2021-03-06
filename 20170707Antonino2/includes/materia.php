<?php

/**
 *
 */
class Materia
{
  private $idMateria;
  private $materia;

  function __construct($newMateria)
  {
    $this->materia = $newMateria;
  }

  function setMateria($newMateria)
  {
    $this->materia=$newMateria;
  }

  function getIdMateria() {
      return $this->idMateria;
  }

  function getMateria() {
      return $this->materia;
  }

  function insertMateria()
  {
    try {
      $DB = new Database();
      $DB->connection();
      if($DB){
        echo "sei connesso";
        echo "<br>";
      }

      $query = "INSERT INTO materie (materia) VALUES (:materia)";
      $results = $DB->getLink()->prepare($query);
      $materia = $this->materia;
      $results->bindParam(":materia", $materia, PDO::PARAM_STR);
      if ($results->execute()) {
        echo "record: ".$DB->getLink()->lastInsertId()." inserted<br>" ;
  		}
      $DB = null;

    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }


  function deleteMateria($idToDelete)
  {
    try {
      $DB = new Database();
      $DB->connection();
      if($DB){
        echo "sei connesso";
        echo "<br>";
      }

      $query = "DELETE FROM materie where id_materia = :id";
      $results = $DB->getLink()->prepare($query);
      $idMateria = $idToDelete;
      $results->bindParam(":id", $idMateria, PDO::PARAM_INT);
      $results->execute();
      $DB = null;

    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  function __toString()
  {
    if (isset($this->idMateria)) {

      $string = $this->idMateria+$this->idMateria;
      return $string;
    }else {
      return $this->materia;
    }

  }


}


 ?>
