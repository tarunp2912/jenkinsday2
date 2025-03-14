<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

Name: <input type="text" name="name" value="<?php echo $name;?>"><br><br>

E-mail: <input type="text" name="email" value="<?php echo $email;?>"><br><br>

Website: <input type="text" name="website" value="<?php echo $website;?>"><br><br>

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br><br>

Gender: <br>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female <br>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male <br>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other <br><br>
