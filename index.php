<?php
phpinfo();

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
echo  'this is to commit';
?>