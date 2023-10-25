<br>
<br>
<br>
<?php
/**
 * @var \yii\data\Pagination $pagination
 * @var \yii\data\Sort $sort
*/
//pagination

use yii\widgets\LinkPager;
echo $sort->link('name',);
?>
<table class="table">
    <?php
foreach ($model as $item){

echo  "<tr>";
   echo "<td>";
     echo $item->name;
   echo "</td>";

   echo "<td>";
     echo $item->email;
   echo "</td>";
echo "</tr>";
}  ?>

</table>
<h4 class="pagination justify-content-center">
<?php
echo LinkPager::widget([
     'pagination'=>$pagination,
    'maxButtonCount'=>1,
    'nextPageLabel'=>'Keyingi',
    'prevPageLabel'=>'orqaga',
 ]);
?>
</h4>
