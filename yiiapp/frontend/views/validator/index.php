
<?php

if ($model -> hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';

}

?>

<br><br><br>
<form method="post">
    <label for="malumot_1">malumot_1</label>
    <input type="text" name="malumot_1 " id="malumot_1"><br>
    <label for="malumot_2">malumot_2</label>
    <input type="text" name="malumot_2" id="malumot_2">

    <button type="submit">send</button>

</form>
