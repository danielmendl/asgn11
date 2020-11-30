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
    
    $toValue = convertLength($fromValue, $fromUnit, $toUnit);
  }

?>
<?php include_once 'includes/header.php'; ?>

    <div id="main-content">

      <h1>Convert Outdate Irish Lengths</h1>
  
      <form action="outdated-irish-length-measurements.php" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="fromUnit">
            <option value="grain"<?php if($fromUnit == 'grain') { echo " selected"; } ?>>Grain</option>
            <option value="thumb-length"<?php if($fromUnit == 'thumb-length') { echo " selected"; } ?>>Thumb-length</option>
            <option value="palm"<?php if($fromUnit == 'palm') { echo " selected"; } ?>>Palm</option>
            <option value="fist"<?php if($fromUnit == 'fist') { echo " selected"; } ?>>Fist</option>
            <option value="foot"<?php if($fromUnit == 'foot') { echo " selected"; } ?>>Foot</option>
            <option value="step"<?php if($fromUnit == 'step') { echo " selected"; } ?>>Step</option>
            <option value="step"<?php if($fromUnit == 'step') { echo " selected"; } ?>>Double-step</option>
            <option value="rod"<?php if($fromUnit == 'rod') { echo " selected"; } ?>>Rod</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="toUnit">
            <option value="grain"<?php if($toUnit == 'grain') { echo " selected"; } ?>>Grain</option>
            <option value="thumb-length"<?php if($toUnit == 'thumb-length') { echo " selected"; } ?>>Thumb-length</option>
            <option value="palm"<?php if($toUnit == 'palm') { echo " selected"; } ?>>Palm</option>
            <option value="fist"<?php if($toUnit == 'fist') { echo " selected"; } ?>>Fist</option>
            <option value="foot"<?php if($toUnit == 'foot') { echo " selected"; } ?>>Foot</option>
            <option value="step"<?php if($toUnit == 'step') { echo " selected"; } ?>>Step</option>
            <option value="step"<?php if($toUnit == 'step') { echo " selected"; } ?>>Double-step</option>
            <option value="rod"<?php if($toUnit == 'rod') { echo " selected"; } ?>>Rod</option>
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