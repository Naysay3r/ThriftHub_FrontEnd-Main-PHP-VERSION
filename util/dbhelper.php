<?php
	///database abstraction
	///procedural method
	$hostname="127.0.0.1";
	$username="root";
	$password="";
	$database="thrifthub";
	
	
	function dbconnect(){
		global $hostname,$username,$password,$database;
		return mysqli_connect($hostname,$username,$password,$database) ;
	}
	//
	function getall($table){
		$sql="SELECT * FROM `$table`";
		$conn=dbconnect();
		$query=mysqli_query($conn,$sql);
		$rows=array();
		$row=null;
		while($row=mysqli_fetch_assoc($query)){
			array_push($rows,$row);
		}
		return $rows;
		mysqli_close($conn);
	}
	function getrecord($table,$fields,$data){
		$rows=null;
		if(count($fields)==count($data)){
			$conn=dbconnect();
			$flds=array();
			for($i=0;$i<count($fields);$i++){
				array_push($flds,"`".$fields[$i]."`='".$data[$i]."'");
			}
			$fld=implode(" and ",$flds);
			$sql="SELECT * FROM `$table` WHERE $fld";
			
			$query = mysqli_query($conn,$sql) or die("SQL Error");
			$rows=mysqli_fetch_assoc($query);
		}
		mysqli_close($conn);
		return $rows;
	}
	function addrecord($table,$fields,$data){
		$okey=false;
		if(count($fields)==count($data)){
			$flds=implode("`,`",$fields);
			$dta=implode("','",$data);
			$sql="INSERT INTO `$table`(`$flds`) VALUES('$dta')";
			$conn=dbconnect();
			mysqli_query($conn,$sql);
			$okey=true;
			mysqli_close($conn);
		}
		return $okey;
	}
	function updaterecord($table,$fields,$data){
		$okey=false;
		if(count($fields)==count($data)){
			$flds=array();
			for($i=1;$i<count($fields);$i++){
				array_push($flds,"`".$fields[$i]."`='".$data[$i]."'");
			}
			$fld=implode(",",$flds);
			$sql="UPDATE `$table` SET $fld WHERE `$fields[0]`='$data[0]'";
			$conn=dbconnect();
			mysqli_query($conn,$sql);
			mysqli_close($conn);
			$okey=true;
		}
		return $okey;
	}
	
	function deleterecord($table,$fields,$data){
		$rows=null;
		if(count($fields)==count($data)){
			$conn=dbconnect();
			$flds=array();
			for($i=0;$i<count($fields);$i++){
				array_push($flds,"`".$fields[$i]."`='".$data[$i]."'");
			}
			$fld=implode(" and ",$flds);
			$sql="DELETE FROM `$table` WHERE $fld";
			echo $sql;
			$query = mysqli_query($conn,$sql) or die("SQL Error");
			$rows = mysqli_affected_rows($conn);
		}
		mysqli_close($conn);
		return $rows;
	}
?>