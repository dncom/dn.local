

<?php 

//echo $post['post']."<br/>" ;
//echo $posts['post'];
$i = 0;

 
foreach($comments as $key => $comment)
{
    $a[] = $comment->comment;  
    echo "$a[$i]<br/>";
    $i++;
}

?>

<div style="padding:10px;">
    <form action="" method="post">
        Ваш комментарий: <br />
        <textarea name="comment" cols="25" rows="3"></textarea><br /><br />
        <input name="send" type="submit" value="Отправить" />
    </form>
</div>
