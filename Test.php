<?php
//phpinfo();

function dosomething() 
{
    $data = 'Whazzup dude';
    if(isset($data)) :
        echo $data;
        else :
            echo 'nodata set';
        endif;

}
?>

<?php
dosomething();
echo  '<br>this is to commit';// here we add the comments on line
?>

here we try the ssh mode modification done
