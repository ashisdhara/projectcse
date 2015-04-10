<?php
echo $q_no ;
echo "$question" ;
echo "1 .".$option1 ;
echo "2 .".$option2 ;
echo "3 .".$option3 ;
echo "4 .".$option4 ;

?>
<html>
    <head>
        <title>
            Answer me 
        </title>
    </head>
    <body>
        <form action ="<?php echo base_url('tasks/submit_answer')?>" method="post">
            <input type="number" name="answer"  />
            <br />
            <input type="submit" value="I think Thats it" />
        </form>
    </body>
</html>