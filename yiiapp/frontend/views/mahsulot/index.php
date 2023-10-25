<br>
<br>
<br>

<?php
// ListView

/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

use yii\widgets\ListView;

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView'=> "index.php"
]);