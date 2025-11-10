<?php
class Student {
  public $id,$name,$class,$age;
  function __construct($id,$name,$class,$age){
    $this->id=$id;
    $this->name=$name;
    $this->class=$class;
    $this->age=$age;
  }
  function show(){
    echo "<tr>
            <td>{$this->id}</td>
            <td>{$this->name}</td>
            <td>{$this->class}</td>
            <td>{$this->age}</td>
          </tr>";
  }
}

$students = [];
for($i=1;$i<=10;$i++){
  $students[] = new Student($i,"Student $i","XII-A",17);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Class Students Details</title>
<style>
body{font-family:Arial;background:#f7f7f7;padding:20px}
table{width:60%;margin:auto;border-collapse:collapse;background:#fff}
th,td{border:1px solid #ccc;padding:8px;text-align:center}
th{background:#007bff;color:#fff}
h2{text-align:center}
</style>
</head>
<body>
<h2>Class XII-A - Student Details</h2>
<table>
<tr><th>ID</th><th>Name</th><th>Class</th><th>Age</th></tr>
<?php
foreach($students as $stu){
  $stu->show();
}
?>
</table>
</body>
</html>
