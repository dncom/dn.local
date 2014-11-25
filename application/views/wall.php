<div style="padding:10px;">
    <form action="" method="post">
        Чем бы вы хотели поделится: <br />
        <textarea name="post" cols="25" rows="5"></textarea><br /><br />
        <input name="send" type="submit" value="Отправить" />
    </form>
</div>


<?php 

//echo print_r($posts)."<br/>" ;
//echo $posts['post'];

foreach($posts as $key => $post)
{
    $a[] = $post->post;  
}
$i = count($a)-1;
 echo "<div id = wall1>";
for ($j = $i; $j>=$i; $j--)
{
echo "$a[$j]</br>";
}
echo "</div>";
//print_r($a);
 echo "<div id = wall2>";
for ($j = $i-1; $j>=0; $j--)
{
echo "$a[$j]</br>";
}
echo "</div>";


?>

