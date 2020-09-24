<?php
/**
* Database interface
* 
*/
interface interface
{
	public function connect();
	public function query();
	public function fetchArray();
	public function fetchRow();
	public function fetchAssoc();
	public function update();
	public function delete();
	public function insert();
}
