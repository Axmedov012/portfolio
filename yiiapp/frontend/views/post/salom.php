

<?php
if ($malumot->hasErrors()){
    echo "<pre>";
    print_r($malumot->getErrors());
    echo "</pre>";
}
?>
<form action='' method="post">
    <label for="malumot_1">malumot 1</label>
    <input type="text" name="malumot_1" id="malumot_1"><br>
    <label for="malumot_2">malumot 2</label>
    <input type="text" name="malumot_2" id="malumot_2"><br><br>
<button type="submit">send</button>

</form>
