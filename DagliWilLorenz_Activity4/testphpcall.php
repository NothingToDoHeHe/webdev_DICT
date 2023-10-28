<?php

class DbConfig{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "trainingdb";
}
class PersonalInformation{
    public $firstname;
    public $lastname;
    public $age;
    public $gender;
    public $civilStatus;
    
    public function __construct($firstname,$lastname,$age,$gender,$civilStatus){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->gender = $gender;
        $this->civilStatus = $civilStatus;
    }
    public function InsertPersonalInformation(){
        $dbconfig = new DbConfig();
        $conn = new mysqli($dbconfig->servername,$dbconfig->username,$dbconfig->password,$dbconfig->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            $sql = "INSERT INTO personal(FirstName,LastName,Age,Gender,CivilStatus) VALUES('".$this->firstname."','".$this->lastname."','".$this->age."','".$this->gender."','".$this->civilStatus."')";
            if($conn->query($sql) === TRUE){
                return "Successful";
            }
        }
    }
}
class EducationalBackground{
    public $personalInformation;
    public $tertiary;
    
    public function __construct($mypersonalInformation,$tertiary){
        $this->personalInformation= $mypersonalInformation;
        $this->tertiary=$tertiary;
    }
    
    
}


$personalinfo = new PersonalInformation($_POST['firstname'],$_POST['lastname'],$_POST['age'],$_POST['gender'],$_POST['civilStatus']);

$educationalbackground = new EducationalBackground($personalinfo, $_POST['tertiary']);
echo json_encode(array("result"=>$personalinfo->InsertPersonalInformation()));




?>