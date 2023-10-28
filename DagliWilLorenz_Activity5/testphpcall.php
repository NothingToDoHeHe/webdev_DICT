<?php

class DbConfig{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "trainingdb";
}
$dbconfig = new DbConfig();
$conn = new mysqli($dbconfig->servername,$dbconfig->username,$dbconfig->password,$dbconfig->dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
class PersonalInformation{
    public $firstname;
    public $lastname;
    public $age;
    public $gender;
    public $civilStatus;
    public $primary;
    public $jhs;
    public $shs;
    public $tertiary;
    
    public function __construct($firstname,$lastname,$age,$gender,$civilStatus,$primary,$jhs,$shs,$tertiary){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->gender = $gender;
        $this->civilStatus = $civilStatus;
        $this->primary = $primary;
        $this->jhs = $jhs;
        $this->shs = $shs;
        $this->tertiary=$tertiary;
    }
    public function InsertPersonalInformation($conn){
        $sql = "INSERT INTO personal(FirstName,LastName,Age,Gender,CivilStatus) VALUES('".$this->firstname."','".$this->lastname."','".$this->age."','".$this->gender."','".$this->civilStatus."')";
        if($conn->query($sql) === TRUE){
                return "Success";
        }
        
    }
    public function InsertEducInformation($conn){
        $sql = "INSERT INTO education(primaryeduc,jhs,shs,tertiary) VALUES('".$this->primary."','".$this->jhs."','".$this->shs."','".$this->tertiary."')";
        if($conn->query($sql) === TRUE){
                return "Successful";
            }
    }
}


$personalinfo = new PersonalInformation($_POST['firstname'],$_POST['lastname'],$_POST['age'],$_POST['gender'],$_POST['civilStatus'],$_POST['primary'], $_POST['jhs'], $_POST['shs'], $_POST['tertiary']);
echo json_encode($personalinfo->InsertPersonalInformation($conn));
echo json_encode($personalinfo->InsertEducInformation($conn));



?>