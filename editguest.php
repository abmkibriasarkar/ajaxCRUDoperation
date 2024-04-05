<?php 
    require 'config.php';

    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Guest</title>
  </head>
  <body>
    <h2>Edit Guest : Using Table</h2>
    <?php 
        $sql="select * from `guests` where `id`='$id'";
        $result=$conn->query($sql);

        $row=$result->fetch_assoc();
    ?>
    <form autocomplete="off">
      <input type="hidden" id="id" value="<?php echo $row["id"] ?>">
      <label >First Name: </label>
      <input type="text" id="f_name" value="<?php echo $row['first_name'] ?>"> <br>
      <label >Last Name: </label>
      <input type="text" id="l_name" value="<?php echo $row['last_name'] ?>"> <br>
      <label >Email:  </label>
      <input type="text" id="email" value="<?php echo $row['email'] ?>"> <br>
      <label >Gender:  </label>
      <select id="gender">
        <option value="Male" <?php if($row['gender']=="Male") echo "selected" ?>>Male</option>
        <option value="Female" <?php if($row["gender"]=="Female") echo "selected" ?>>Female</option>
      </select> <br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
<!-- 
    <br><br><br><br>
    <h2>Edit Guest : Using Div</h2>
        <div1>
            <label >First Name: </label>
            <input type="text" id="f_name" value="<?php echo $row['first_name'] ?>"> <br>
        </div1>
        <div2>
            <label >Last Name: </label>
            <input type="text" id="l_name" value="<?php echo $row['last_name'] ?>"> <br>
        </div2>
        <div3>      
            <label >Email:  </label>
            <input type="text" id="email" value="<?php echo $row['email'] ?>"> <br>
        </div3>
        <div4>
            <label >Gender:  </label>
            <select id="gender">
                <option value="Male" <?php if($row['gender']=="Male") echo "selected" ?>>Male</option>
                <option value="Female" <?php if($row['gender']=="Female") echo "selected" ?>>Female</option>
            </select> <br>
        </div4>
        <div5>
        <button type="button" onclick="submitData('edit');">Edit</button>
        </div5>
        <br><br>
        <a href="index.php">Go To Index</a> -->
        
    <?php require 'script.php'; ?>
  </body>
</html>