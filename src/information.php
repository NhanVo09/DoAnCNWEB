<?php

namespace CT275\Labs;

class information 
{
    private $db;
    public $mssv;
    public $hoten;
    public $sdt;
    public $email;
    public $makhoa;
    private $error = [];
public function getMssv(){
    return $this->mssv;
}
public function __construct($pdo){
		$this->db = $pdo;
}
public function fill(array $data){
    if (isset($data['mssv'])) {
        $this->mssv = trim($data['mssv']);
    }
    if (isset($data['hoten'])) {
        $this->hoten = trim($data['hoten']);
    }

    if (isset($data['sdt'])) {
        $this->sdt = preg_replace('/\D+/', '', $data['sdt']);
    }

    if (isset($data['email'])) {
        $this->email = trim($data['email']);
    }
    if (isset($data['makhoa'])) {
        $this->makhoa = trim($data['makhoa']);
    }

    return $this;
    }
public function getValidationErrors(){
    return $this->errors;
}
public function validate()
{
    if (strlen($this->mssv) > 8) {
        $this->errors['mssv'] = 'MSSV must be at most 8 characters.';
    }
    if (!$this->hoten) {
        $this->errors['hoten'] = 'Invalid name.';
    }

    if (strlen($this->sdt) < 10 || strlen($this->sdt) > 11) {
        $this->errors['sdt'] = 'Invalid phone number.';
    }

    return empty($this->errors);
}
public function all(){
    $contacts = [];

    $statement = $this->db->prepare('select * from Sinhvien');
    $statement->execute();
    while($row = $statement->fetch()){
        $contact = new information($this->db);
        $contact->fillFromDB($row);
        $contacts[] = $contact;
    }
    return $contacts;
}
protected function fillFromDB(array $row){
    [
        'mssv' => $this->mssv,
        'hoten' => $this->hoten,
        'sdt' => $this->sdt,
        'email' => $this->email,
        'makhoa' => $this->makhoa,
    ]= $row;
    return $this;
}
public function save(){
    $result = false;

    if(isset($_GET['mssv'])){
        $statement = $this->db->prepare(
            'update Sinhvien set hoten = :hoten,
            sdt = :sdt, email= :email, makhoa = :makhoa
            where mssv = :mssv'
        );
        $result = $statement->execute([
            ':hoten' => $this->hoten,
            ':sdt' => $this->sdt,
            ':email' => $this->email,
            ':makhoa' => $this->makhoa,
            ':mssv' => $this->mssv
        ]);
    }else{
        $statement = $this->db->prepare(
            'insert into Sinhvien (mssv, hoten, sdt, email, makhoa)
            values (:mssv, :hoten, :sdt, :email, :makhoa)'
        );
        $result = $statement->execute([
            ':mssv' => $this->mssv,
            ':hoten' => $this->hoten,
            ':sdt' => $this->sdt,
            ':email' => $this->email,
            ':makhoa' => $this->makhoa
        ]);
    }
    return $result;
}
public function find($mssv){
    $statement = $this->db->prepare('select * from Sinhvien where mssv = :mssv');
    $statement->execute([':mssv'=>$mssv]);

    if($row = $statement ->fetch()){
        $this->fillFromDB($row);
        return $this;
    }

    return null;
}
public function update(array $data){
    $this ->fill($data);
    if($this ->validate()){
        return $this->save();
    }
    return false;
}
}
