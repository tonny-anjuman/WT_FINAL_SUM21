<?php
    include 'model/db_config.php';
    $err_db = "";
	$userid = "";
    $err_userid = "";
    $name = "";
    $err_name = "";
    $dob = "";
    $err_dob = "";
    $credit = "";
    $err_credit = "";
    $cgpa = "";
    $err_cgpa = "";
    $dept_id = "";
    $err_dept_id = "";
    $hasError = false;

    if(isset($_POST["btn_addstudent"])){
        if(empty($_POST["userid"])){
            $hasError =  true;
            $err_userid = "ID Required";
        }
        else{
            $userid = $_POST["userid"];
        }
        if(empty($_POST["name"])){
            $hasError =  true;
            $err_name = "Name Required";
        }
        else{
            $name = $_POST["name"];
        }
        if(empty($_POST["dob"])){
            $hasError =  true;
            $err_dob = "Date of Birth Required";
        }
        else{
            $dob = $_POST["dob"];
        }
        if(empty($_POST["credit"])){
            $hasError =  true;
            $err_credit = "Credit Required";
        }
        else{
            $credit = $_POST["credit"];
        }
        if(empty($_POST["cgpa"])){
            $hasError =  true;
            $err_cgpa = "CGPA Required";
        }
        else{
            $cgpa = $_POST["cgpa"];
        }
        if(empty($_POST["dept_id"])){
            $hasError =  true;
            $err_dept_id = "Department ID Required";
        }
        else{
            $dept_id = $_POST["dept_id"];
        }
        if(!$hasError){
            $rs = insertstudent($userid,$name,$dob,$credit,$cgpa,$dept_id);
            if($rs === true){
                header("Location: student.php"); 
            }
            $err_db = $rs;
        }
    }
    function insertstudent($userid,$name,$dob,$credit,$cgpa,$dept_id){
        $query = "insert into students values(Null,'$name','$userid','$dob','$credit','$cgpa','$dept_id')";
        return execute($query);
    }
    if(isset($_POST["btn_addstudent"])){
        $rs = insertCategory($_POST["name"]);
        if($rs === true){
            header("Location: allcategories.php"); 
        }
        $err_db = $rs;
    }
    function insertCategory($name){
        $query = "insert into categories values(Null,'$name')";
        return execute($query);
    }
	if(isset($_POST["btn_editstudent"])){
        $userid = $_POST["userid"];
        $name = $_POST["name"];
        $dob = $_POST["dob"];
        $credit = $_POST["credit"];
        $cgpa = $_POST["cgpa"];
        $dept_id = $_POST["dept_id"];
        if(editstudent($userid, $name, $dob, $credit, $cgpa, $dept_id)){
            header("Location: student.php");
        }
    }
    function editstudent($userid, $name, $dob, $credit, $cgpa, $dept_id){
        global $id;
        $query = "update students set userid='$userid', name='$name', dob='$dob', credit='$credit', cgpa='$cgpa', dept_id='$dept_id' where id =$id";
        return execute($query);
    }
    function getAllStudents(){
        $query = "select * from students";
        $rs = get($query);
        return $rs;
    }
    function getStudent($id){
        $query = "select * from students where id = $id";
        $rs = get($query);
        return $rs[0];
    }
	function department($id){
        $query = "select name from department where dept_id = $id";
        $rs = get($query);
        return $rs[0];
    }
?>