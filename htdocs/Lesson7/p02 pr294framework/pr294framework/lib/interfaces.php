<?php
/*
   A PHP framework for web sites
   
   custom exceptions and common interfaces
   =======================================
   
*/

class DatabaseException extends Exception {}

interface IDatabase {
    function query($sql);
    function execute($sql);
	function executeBatch($list);
	function getInsertID();
	function close();
	
	// transaction support
	function beginTransaction();
	function commitTransaction();
	function rollbackTransaction();
	
	// prepared statements
	function queryPrepared($paramaterisedSQL,$fields);
    function executePrepared($paramaterisedSQL,$fields);
}

?>