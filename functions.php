<?php
function displayHRDate ($id){
    include 'pages/messagelist.php';
    foreach($messages as $comment){
        if($id==$comment['id']){
            return $comment['body'];
        }
    }
}
return false;
?>
<?php
// Return current date from the remote server
$time = date('d-m-y h:i:s');
echo $time;
?>