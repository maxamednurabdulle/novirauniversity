<?php
$conn =new mysqli('localhost','root','','admission');
if($conn){
    echo ("hampbalyo! waad na so gaartay.");
}else{
    echo $conn->error;
}

# wuxuu ii xareyn doonaa xogta form-ka

?>