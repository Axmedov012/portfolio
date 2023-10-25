<br>
<br>
<br>
<?php
/**
 * @var \yii\data\ActiveDataProvider $dataprovider
 */

$model = $dataprovider->getModels();
echo "<table class='table'>";

foreach ($model as $item) {
    echo "<tr>";

    echo "<td>";
    echo $item->name;
    echo "</td>";

    echo "<td>";
    echo $item->email;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

echo \yii\widgets\LinkPager::widget([
        'pagination'=> $dataprovider->pagination
]);
?>