<p>1~100分成</p>
<form method="post" action="">分成<input type="text" name="cols" >
<input type="submit" value="欄">
</form>
<fieldset>
     
<?php
function test(){
    $C=@$_POST['cols'];
    if(isset($C)) return $C;
    return 2;
}
$COL = test();
echo '<legend>'.$COL.'欄</legend>';
echo '<table border="1">';
for($i=0;$i<ceil(100/$COL);$i++){
         for($k =($i*$COL)+1;$k<=($i+1)*$COL && $k<=100;$k++){
                echo'<td>'.$k.'</td>';
                   }
echo'</tr>';
            }
?>
</fieldset>


