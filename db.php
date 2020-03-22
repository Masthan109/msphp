<?php

require('connect.php');



function dd($value)//to be deleted
{
  echo "<pre>", print_r($value, true), "</pre>";	
  die();
}

function executeQuery($sql, $data)
{
	global $conn;
	$stmt = $conn->prepare($sql);
	$values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
	return $stmt;
	
}

function selectAll($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table";
	if(empty($conditions)){
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}else{
	//return records that match conditions....
	//$sql = "SELECT * FROM $table WHERE username 'Msn' AND admin=1";
	
	$i = 0;
	foreach ($conditions as $key => $value){
		  if($i === 0){
		$sql = $sql . " WHERE $key=?";
	}else{
		$sql = $sql . " AND $key=?";
	}
	$i++;
	}

  $stmt = executeQuery($sql, $conditions);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;  
}

}

function selectOne($table, $conditions)
{
	global $conn;
	$sql = "SELECT * FROM $table";
	
	$i = 0;
	foreach ($conditions as $key => $value){
		  if($i === 0){
		$sql = $sql . " WHERE $key=?";
	}else{
		$sql = $sql . " AND $key=?";
	}
	$i++;
	}

  $sql = $sql . " LIMIT 1";
  $stmt = executeQuery($sql, $conditions);
  $records = $stmt->get_result()->fetch_assoc();
  return $records;  
}

function create($table, $data)
{
  global $conn;
  //$sql = "INSERT INTO users SET username=?, admin=?, password=?"  
  $sql = "INSERT INTO users SET ";
  
  $i = 0;
  foreach($conditions as $key => $value){
	    if($i === 0){
			$sql = $sql . " $key=?";
		}else{
			$sql = $sql . ", $key=?";
		}
		$i++;
  }
  dd($sql);
  
}

$data = [
    'admin' => 0,
	'username' => 'MS'
]; 
  
$users = create('users', $data);
dd($users);  