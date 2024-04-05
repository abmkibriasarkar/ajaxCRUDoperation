<?php
    include'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h2>Index : All Guest List</h2>
    <table border = 1>
      <tr>
        <td>SL.</td>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Reg. Date</td>
        <td>Action</td>
      </tr>
      <?php
        $sql = "Select * From `guests`";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $i = 1;
       ?>
          <?php foreach($result as $row) : ?>
            <tr id = <?php echo $row["id"]; ?>>
              <td><?php echo $i++; ?></td>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["first_name"]; ?></td>
              <td><?php echo $row["last_name"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["gender"]; ?></td>
              <td><?php echo $row["reg_date"]; ?></td>
              <td>
                <a href="editguest.php?id=<?php echo $row['id']; ?>">Edit</a>
                <!-- <button type="button" onclick = "submitData('<?php echo $row['id']; ?>');">Delete</button> -->
                <button type="button" onclick = "submitData('<?php echo $row['id']; ?>');">Delete</button>
              </td>
            </tr>
          <?php endforeach; ?>           
      <?php }else{
            echo "No Result";
        } 
       ?>

    </table>
    <br>
    <a href="addguest.php">Add Guest</a>
    <?php require 'script.php'; ?>
  </body>
</html>