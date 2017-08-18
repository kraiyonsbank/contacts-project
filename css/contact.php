<?php
class contact
{
  public static  function sayHello()
{ 

echo "Hello world from contacts class";
}

protected function connectDb()
{

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'crud';


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)

{
return false;
}

return $conn;

}

public static function getFruits()
{
    $conn = self:: connectDb();
    if($conn)
    {
        $sql = 'SELECT = FROM fruits';
        $result = $conn->query($sql);

        $row=[];
        while($row = $result->fetch_row())
        {
            $row[] = $row;
        }
        return $row;

        if($results->num_rows > 0)
        {
            return $result->fetch_assoc();
        }else{
            return "cannot connect db";
        }

    }
  

}
?>