<!-- 以 while 迴圈完成。 -->

<select name="num" >
  
  
  
  <?php
    $y=1990;
    while ($y<=2020)
    {
        echo "<option value=".$y.">".$y."</option>";
    $y++;
   
    }
    echo "<option value=".date("Y")." selected style=\"display:none\">".date("Y")."</option>";
    ?>

</select>年


<!-- 月，以陣列 1 12 配合 foreach 迴圈完成。 -->

<select name="num" >
<?php 
            $month = range(1,12);
            foreach($month as $v){
               echo "<option value=".$v." selected>".$v."</option>";
                                   
                }
                echo "<option value=".date("m")." selected style=\"display:none\">".date("m")."</option>";
        ;?>
</select>月

<!-- 日，以 for 迴圈完成。 -->
<select name="num" >
  
  
  
  <?php
      date_default_timezone_set('Asia/Taipei');
    for ($d=1;$d<=31;++$d)
    {
        echo "<option value=".$d.">".$d."</option>";
    
    }
    echo "<option value=".date("d")." selected style=\"display:none\">".date("d")."</option>";
    ?>

</select>日


<!-- while 、 list 及 each 迴圈完成。 -->
<select name="num" >
<?php 
            date_default_timezone_set('Asia/Taipei');
            $hour = range(1,24);
            reset($hour);
            while (list($i, $v) = each($hour)) {

                echo "<option value=".$v.">".$v."</option>";
            }
             echo "<option value=".date("H")." selected style=\"display:none\">".date("H")."</option>";
        ;?>

</select>時