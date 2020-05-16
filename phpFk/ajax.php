<?php
include("db.php");
if(isset($_POST['done'])){
   $name=mysqli_escape_string($connect,$_POST['username']);
   $comment=mysqli_escape_string($connect,$_POST['comment_text']);
    $query=mysqli_query($connect,"INSERT INTO comments (name, comment) VALUES('{$name}','{$comment}')");
exit();
}
if(isset($_POST['display'])){
    $result=mysqli_query($connect,"SELECT * FROM comments");
    while($row=mysqli_fetch_array($result))
    {
        ?>
<div id="comment_box" style="width: 50%;margin: 15px;padding: 5px;background: #b7cbeb;border-radius: 4px;border: 1px solid">
    <p style="color: orangered;font-weight: bold"><?php echo $row['name']; ?></p>
    <p style="font-family:Consolas "><?php echo $row['comment']; ?></p>
</div>
<?php
    }
    exit();
}
