<?php
if($_POST['login'] === 'admin'  && $_POST['password'] === '123'){
    echo true;
}else{
    echo false;
}
?>