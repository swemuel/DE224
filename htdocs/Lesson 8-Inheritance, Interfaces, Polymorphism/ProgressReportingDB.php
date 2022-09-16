<?php
declare(strict_types = 1);
include_once 'DBInterface.php';
include_once 'AbstractDB.php';
include_once 'AbstractQueryResult.php';
include_once 'QueryResultInterface.php';


class ProgressReportingDB extends AbstractDB implements DBInterface
{
	var  $host;
	var  $dbUser;
	var  $dbPass;
	var  $dbName;
	var  $dbConn;
	var  $dbconnectError;

	function __construct( string $host, string $dbUser, string $dbPass, string $dbName )
	{
	 $this->host   = $host;
	 $this->dbUser = $dbUser;
	 $this->dbPass = $dbPass;
	 $this->dbName = $dbName;
   $this->dbConn;
	 $this->connectToServer();
   
	}
  /*
  function __destruct()
  {
    echo "<br>closing connection to $this_dbName<br>";
    $this->dbConn->close();
  }
  */
	function connectToServer():void
	{
	   $this->dbConn = mysqli_connect($this->host, $this->dbUser, $this->dbPass );
	   if ( ! $this->dbConn )
	   {
        trigger_error ('could not connect to server' );
        $this->dbconnectError = true;
	   }
	   else
	   {
        echo "connected to server <br>";
	   }
	}

	function selectDatabase(): void
	{
		if (! mysqli_select_db( $this->dbConn, $this->dbName ) )
	   {
        trigger_error('could not select database' );  
        $this->dbconnectError = true;                     
	   }
	   else
	   {
        echo "$this->dbName database selected <br>";
	   }
	}
 

	function createDatabase(): void
	{
		$sql = "create database if not exists $this->dbName";
		echo "$sql  <br />";
		if ( $this->query($sql) )
		{
			echo "the $this->dbName database was created<br>";
		}
		else
		{
			echo "the $this->dbName database was not created<br>";
		}
	}	   


   function isError(): bool
   {
		if  ( $this->dbconnectError )
		{
			return true;
		}
		$error = mysqli_error ( $this->dbConn );
		if ( empty ($error) )
        {
			return false;
        }
        else
        {
			return true;   
        }
   }


   function query( string $sql ): QueryResultInterface
   {
		if ( ! $queryResource = mysqli_query( $this->dbConn, $sql ) )
		{
			trigger_error( 'Query Failed: ' . mysqli_error($this->dbConn ) . ' SQL: ' . $sql );
			return false;
		}
		echo 'query OK';
    echo "<br>$sql<br>";
		return new SQLQueryResult( $this, $queryResource ); 
   }
}


class SQLQueryResult extends AbstractQueryResult implements QueryResultInterface
{
  var $db;
  var $queryResource;

  function __construct( $theDB, $theQueryResource )
  {
		$this->db = $theDB;
		$this->queryResource = $theQueryResource;
  }

  function size():int
  {
		return mysqli_num_rows( $this->queryResource );
  }

  function fetch(): array
  {
    if ( $row = mysqli_fetch_array( $this->queryResource , MYSQLI_ASSOC ))
    {
      return $row;
    }
    else if ( $this->size() > 0 )
    {
      mysqli_data_seek( $this->queryResource , 0 );
      return [];
    }
    else
    {
      return [];
    }         
  }

  function isError(): bool
  {
    $this->db->isError();
  }
}