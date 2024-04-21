<?php
// connecting with database 
$con = new PDO('mysql:host='.hostName.';dbname='.dbName,userName,passWord);

function post($param=""){
 	if (isset($_POST[$param])) {
 		return strip_tags($_POST[$param]);
 	}
 }
function get($param=""){
 	if (isset($_GET[$param])) {
 		return strip_tags($_GET[$param]);
 	}
 }
function insert($tabel,$key,$value,$arr=[]){
    global $con;
    $sql = "INSERT INTO $tabel( $key ) VALUES ($value)";
    $stmt = $con->prepare($sql);
    $stmt->execute($arr);
}
/*
$name = "Hassan";
insert(
"adel",
"name",
":name",
['name'=>$name]
);
*/
function update($tabel,$key,$where,$value=[]){
    global $con;
    $sql = "UPDATE $tabel SET $key WHERE $where";
    $stmt = $con->prepare($sql);
    if($stmt->execute($value)){
      return true;
    }
}
/*
$name="Mazen";
$id='3';
update("table","name=:name","id=:id",[':name'=>$name,':id'=>$id]);
*/
function delete($tabel,$key,$value=[]){
    global $con;
    $sql = "DELETE FROM $tabel WHERE $key";
    $stmt = $con->prepare($sql);
    $stmt->execute($value);   
}
/*
$id=5;
delete("adel","id=:id",[':id'=>$id]);
*/
function getData($select,$table,$where,$value=[],$fetch=null) {
	 global $con;
	 $getstmet = $con->prepare("SELECT $select FROM $table WHERE $where");	
	 $getstmet->execute($value);
	 if($fetch){
	     $MyResult = $getstmet->fetchAll();
	 }else{
	     $MyResult = $getstmet->fetch();
	 }
	 return $MyResult;
 }
// SELECT Data => getData("*","users","username=?",["adel mahmoud"]);
function getAllData($select,$table){
     global $con;
     $getstmet = $con->prepare("SELECT $select FROM $table");	
     $getstmet->execute();
     $MyResult = $getstmet->fetchAll();
     return $MyResult;
 }
// SELECT All Data => getData("*","users");
function the_count($count,$tabel) {
	 global $con;
	 $stmet = $con->prepare("SELECT COUNT($count) FROM $tabel ");	
	 $stmet->execute();
	 return $stmet->fetchColumn();
 }
// Count Data => echo the_count("id","users");
function checkfield($field,$tabel,$where,$value=[]) {
	 global $con;
	 $stmet = $con->prepare("SELECT $field FROM $tabel WHERE $where");	
	 $stmet->execute($value);
	 $count = $stmet->rowCount();
	 return $count;
}
// CheckFeild => echo "<h1>". checkfield("name","Data","name=? AND salary=?",[$name,$salary]) ."</h1>";