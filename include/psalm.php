            <h4>The Psalm or Psalms Appointed</h4>
                <?php 
                    $num=1;
                    for ($i = 1; $i <= 30; $i++) 
                    {
                        if (date("d")==$i)
                        {
                            $psalm1=$num;
                            $num=$num+5;
                        }
                        
                        else
                        {
                            $num=$num+5;
                        }
                    }
                    $psalm2=$psalm1+1;
                    $psalm3=$psalm2+1;
                ?>
                
            
                <p><?php echo '<a href="http://bookofcommonprayer.net/psalter.php#', urlencode($psalm1), '">';?>The First Psalm</a></p>
                <p><?php echo '<a href="http://bookofcommonprayer.net/psalter.php#', urlencode($psalm2), '">';?>The Second Psalm</a></p>
                <p><?php echo '<a href="http://bookofcommonprayer.net/psalter.php#', urlencode($psalm3), '">';?>The Third Psalm</a></p>
                <p>Glory to the Father, and to the Son, and to the Holy Spirit: *<br> 
                    &nbsp;&nbsp;&nbsp;&nbsp;as it was in the beginning, is now, and will be for ever. Amen.<br></p>