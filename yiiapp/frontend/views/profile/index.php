<br>
<br>
<br>
<?php
//relation  jadvallarni bog'lash  ko'p bog'lanish
echo "<pre>";

foreach ($model as $item) {
    echo $item->id, '/' . $item->first_name . '<br>';

    foreach ($item->orders as $order){
        echo $order->id. '/'. $order->ordered_at.'<br>';
    }
}