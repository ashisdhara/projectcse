<html>
    <head>
        <title>DARU | Queries and Comments</title>
    </head>
    
    <body>
        <dl>
            <?php
            $i = 1;
            $total = 0;
            foreach ($list as $key => $row) {
                $user=$row["username"];
                $comments = $row["comments"];
                echo '<dt style="color:red;font-size:20px;">'.$user.'</dt>';
                echo '<dd style="color:blue;font-size:25px;">'.$comments.'</dd>';
                $i++;
            }

            echo "<input type=hidden name=count value=" . --$i . " />";
            ?>
        </ul>

        <form  method="post" action="<?php echo base_url('/home/insert_queries_and_comments') ?>">
            <textarea name="comments" style="">enter you comments here!</textarea>
            <br>      <button class="btn" type="submit">lets go</button>
        </form>
    </body>
</html>