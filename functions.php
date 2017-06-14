<?php

//include createconnection

include 'createconn.php';

function fetch_next_quote()
{
    global $conn;
    global $quote;
    global $id;
    $sql="SELECT * FROM `quotes` WHERE `status` = 1";
    $query=$conn->query($sql); 
    $result=$query->fetch_assoc();
    if($result==NULL)
    {
        exit;
    }
    $quote=$result['quote'];
    $id=$result['id'];
    update_status($result['id']);
}
function update_status($id)
{
    global $conn;
    $sql="UPDATE `quotes` SET `status`=0 WHERE id=$id";
    $query=$conn->query($sql); 
}

?>