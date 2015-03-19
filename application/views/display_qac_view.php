<html>
    <body>
<ul>
    <?php
/*foreach($result as $row)
{
    echo "<li><div class=\"user_name\">";
    echo $row['user_id'];
    echo "</div><div class=\"comments\">";
    echo $row['comments'];
    echo "<div></li>";
        
            
            
} */
    echo $result['user_id'];
?>
</ul>
 
<form name="frm" method="post" action="<?php base_url('/home/insert_queries_and_comments')?>"
      <input type="text" name="comments" />
    <button type="submit">add comment</button>
</form>
</body>
</html>