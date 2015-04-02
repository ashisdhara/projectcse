<html>
    <body>
        <ul>
            <?php
            $i = 1;
            $total = 0;
            foreach ($list as $key => $row) {

                $comments = $row["comments"];
                echo $comments;
                $i++;
            }

            echo "<input type=hidden name=count value=" . --$i . " />";
            ?>
        </ul>

        <form name="frm" method="post" action="<?php base_url('/home/insert_queries_and_comments') ?>"
              <input type="text" name="comments" />
            <input type="submit" placeholder="submit" />
        </form>
    </body>
</html>