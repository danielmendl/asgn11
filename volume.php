<?php

  require_once('includes/functions.php');

  $fromValue = '';
  $fromUnit = '';
  $toUnit = '';
  $toValue = '';

  if(!isset($_POST['submit'])) {
    $_POST['submit'] = '';
  }

  if($_POST['submit']) {
    $fromValue = $_POST['fromValue'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
    
    $toValue = convertVolume($fromValue, $fromUnit, $toUnit);
  }

?>
<?php include_once 'includes/header.php'; ?>

    <div id="main-content">

      <h1>Convert Liquids</h1>
  
      <form action="volume.php" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="fromUnit">
            <option value="buckets"<?php if($fromUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($fromUnit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($fromUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($fromUnit == 'hogsheads') { echo " selected"; } ?>>Hogsheads</option>
            <option value="pints"<?php if($fromUnit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="toUnit">
            <option value="buckets"<?php if($toUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($toUnit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($toUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($toUnit == 'hogsheads') { echo " selected"; } ?>>Hogsheads</option>
            <option value="pints"<?php if($toUnit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
    <?php include_once 'includes/footer.php'; ?>
  </body>
</html>