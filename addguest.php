<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Guest</title>
  </head>
  <body>
    <h2>Add Guest : Using Table</h2>
    <form autocomplete="off">
      <label >First Name: </label>
      <input type="text" id="f_name"> <br>
      <label >Last Name: </label>
      <input type="text" id="l_name"> <br>
      <label >Email:  </label>
      <input type="text" id="email"> <br>
      <label >Gender:  </label>
      <select id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
<!-- 
    <br><br><br><br>
    <h2>Add Guest : Using Div</h2>
        <div1>
            <label >First Name: </label>
            <input type="text" id="f_name"> <br>
        </div1>
        <div2>
            <label >Last Name: </label>
            <input type="text" id="l_name"> <br>
        </div2>
        <div3>      
            <label >Email:  </label>
            <input type="text" id="email"> <br>
        </div3>
        <div4>
            <label >Gender:  </label>
            <select id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> <br>
        </div4>
        <div5>
        <button type="button" onclick="submitData('insert');">Insert</button>
        </div5>
        <br><br>
        <a href="index.php">Go To Index</a> -->
        
    <?php require 'script.php'; ?>
  </body>
</html>