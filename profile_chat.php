<?php
    // session_start();
    include 'profile_conn_chat.php';
    if(isset($_POST['send']))
    {   
        $msg=$_POST['msg'];
        $name=$_SESSION['username'];
        $dt=date('Y-m-d H:i:s');
        $sql="insert into posts (msg,name ,date) values('$msg','$name','$dt')";
        $result=$conn->query($sql);
        header("location:profile.php?chat");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div id="main" style="background-color:#32373d;  border:1px solid #222222 ;padding:10px; margin-top:30px;">
        <h1 style="background-color:#83f500b3; color:white; padding:5px; text-align:center;"><?php echo $_SESSION['username']?>-online</h1>
        <div class="output" style="height:280px; overflow-x: auto; overflow-y: auto; width:1080px; color:white;" >
            <?php
                $sql = "SELECT * FROM posts";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo "" . $row["name"]. " " .":: " . $row["msg"]." --" .$row["date"]. "<br>";
                        echo "<br>";
                    }
                }
                else{
                    echo "0 results";
                }
                $conn->close();
            ?>
        </div>
        
        <form  method="POST"> 
            <textarea name="msg" placeholder="Type to send a message...." class="form-control" style="width:1077px;background-color:#9e9e9e1f; color:white; border:none; height:50px"></textarea><br>
           <center> <input type="submit" value="Send" name="send" style="width: 200px; height:30px;border-radius: 15px;border: none;  background-color: #83f500b3; font-size: 15px; color: white;"></center>
        </form>
      
        <br>
    </div>
</body>
</html>