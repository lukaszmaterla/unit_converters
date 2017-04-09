<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (!empty($_POST['value']) && !empty($_POST['type'])) {

        $number = $_POST['value'];
        $type = $_POST['type'];
        $c = 0;
        $f = 0;
        $k = 0;
        switch ($type) {
            case 'c':
                $c = $number;
                $f = ($number * 1.8) + 32;
                $k = $number + 273.15;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$c</td><td>stopni Celcjusza</td></tr>"
                        . "<tr><td>$f</td><td>Stopni Fahrenheita</td></tr>"
                        . "<tr><td>$k</td><td>Stopni Kelvina</td></tr>"
                        . "</table>";
                break;
            case 'f':
                $c = ($number - 32) / 1.8;
                $f = $number;
                $k = ($number + 459.67) * (5 / 9);
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$c</td><td>stopni Celcjusza</td></tr>"
                        . "<tr><td>$f</td><td>Stopni Fahrenheita</td></tr>"
                        . "<tr><td>$k</td><td>Stopni Kelvina</td></tr>"
                        . "</table>";
                break;
            case 'k':
                $c = $number - 273.15;
                $f = ($number * 1.8) - 459.67;
                $k = $number;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$c</td><td>stopni Celcjusza</td></tr>"
                        . "<tr><td>$f</td><td>Stopni Fahrenheita</td></tr>"
                        . "<tr><td>$k</td><td>Stopni Kelvina</td></tr>"
                        . "</table>";
                break;
            default:
                break;
        }
    } else {
        $result = '<span style="color:red;">Podaj wartość  do przelicznenia</span>';
    }
}
?>
<div class="container">
    <div class="row page-header align-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
            <h3>Jednostki temperatury!</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="" method="POST">
                <div class="form-group">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="value">Wprowadz wartość</label>
                        <input type="number" class="form-control" name="value" id="value" placeholder="podaj wartosć...">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <label for="type" >Wybierz jednostkę </label>
                        <select class="form-control" name="type">
                            <option value="">Wybierz jednostkę....</option>
                            <option value="c">Skala Celcjusza</option>
                            <option value="f">Skala Farhrenheita</option>
                            <option value="k">Skala Kelvina</option>
                        </select>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button type="submit" class="btn btn-success">Przelicz</button>
                    </div>
                </div> 
            </form>

        </div>

    </div>

</div>
<div class="container">
    <div >
        <?php
        if ($result) {
            echo "$result";
        }
        ?>
    </div>
</div>
</div>