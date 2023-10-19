<?php
   $num = 1;
   echo "num is now: $num<BR>";
   $num = 20 + 9;
   echo "num is now: $num<BR>";
   /*
   ** all the following add one to the value of $num
   */
   $num = $num + 3;
   echo "num is now: $num<BR>";
   $num += 1;
   echo "num is now: $num<BR>";
   $num++;
   echo "num is now: $num<BR>";
   /*
   ** these subtract one from $num
   */
   $num = $num -1;
   echo "num is now: $num<BR>";
   $num -= 1;
   echo "num is now: $num<BR>";
   $num--;
   echo "num is now: $num<BR>";
   /*
   ** double the value of $num
   */
   $num = 70;
   echo "num is now: $num<BR>";
   $num = $num * 2;
   echo "num is now: $num<BR>";
   $num *= 2;
   echo "num is now: $num<BR>";
   /*
   ** halve the value of $num
   */
   $num = 100;
   echo "num is now: $num<BR>";
   $num = $num / 2;
   echo "num is now: $num<BR>";
   $num /= 2;
   echo "num is now: $num<BR>";
   /*
   ** A combination 
   */
   $num = 17;
   echo "num is now: $num<BR>";
   $num = (((($num + 4) * 7)  - 6) / 3);
   echo "num is now: $num<BR>";
 ?>