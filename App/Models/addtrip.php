<?php  

if(isset($_POST["submit"])){
    include_once "Rides.php";
    $ride=new Rides();
    $id=$_POST["id"];
    $date=$_POST["date"];
    $ride->InsertInDB('23','23','123','123','23','232','32','32','32','32','32323','23','23','22','2'); 
}

?>


<form action="" method="post">

    <label for="">id</label><br>
    <input type="text" name='id'><br>

    <label for="">date</label><br>
    <input type="text" name='date'><br>

    <label for="">time</label><br>
    <input type="text"><br>

    <label for="">loc</label><br>
    <input type="text"><br>
    <label for="">des</label><br>
    <input type="text"><br>
    <label for="">stat</label><br>
    <input type="text"><br>
    <label for="">carp</label><br>
    <input type="text"><br>
    <label for="">carname</label><br>
    <input type="text"><br>
    <label for="">driverid</label><br>
    <input type="text"><br>
    <label for="">driverphon</label><br>
    <input type="text"><br>
    <label for="">email</label><br>
    <input type="text"><br>
    <label for="">phone</label><br>
    <input type="text"><br>
    <label for="">paymebt</label><br>
    <input type="text"><br>
    <label for="">cost</label><br>
    <input type="text">
    <input type="submit" value="submit" name="submit">

</form>