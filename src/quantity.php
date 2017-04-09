<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['value']) && !empty($_POST['type'])) {

        $number = $_POST['value'];
        $type = $_POST['type'];
        $sz = 0;
        $t = 0;
        $m = 0;
        $k = 0;
        $g = 0;

        switch ($type) {
            case 'sz':
                $sz = $number;
                $t = $number * 0.08833;
                $m = $number * 0.0667;
                $k = $number * 0.0167;
                $g = $number * 0.0069;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$sz</td><td>sztuk</td></tr>"
                        . "<tr><td>$t</td><td>tuzin</td></tr>"
                        . "<tr><td>$m</td><td>mendel</td></tr>"
                        . "<tr><td>$k</td><td>kopa</td></tr>"
                        . "<tr><td>$g</td><td>gros</td></tr>"
                        . "</table>";
                break;
            case 't':
                $sz = $number * 12;
                $t = $number;
                $m = $number * 0.8;
                $k = $number * 0.2;
                $g = $number * 0.0833;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$sz</td><td>sztuk</td></tr>"
                        . "<tr><td>$t</td><td>tuzin</td></tr>"
                        . "<tr><td>$m</td><td>mendel</td></tr>"
                        . "<tr><td>$k</td><td>kopa</td></tr>"
                        . "<tr><td>$g</td><td>gross<td></tr>"
                        . "</table>";
                break;
            case 'm':
                $sz = $number * 15;
                $t = $number * 1.25;
                $m = $number;
                $k = $number * 0.25;
                $g = $number * 0.1024;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$sz</td><td>sztuk</td></tr>"
                        . "<tr><td>$t</td><td>tuzin</td></tr>"
                        . "<tr><td>$m</td><td>mendel</td></tr>"
                        . "<tr><td>$k</td><td>kopa</td></tr>"
                        . "<tr><td>$g</td><td>gross<td></tr>"
                        . "</table>";
                break;
            case 'k':
                $sz = $number * 60;
                $t = $number * 5;
                $m = $number * 4;
                $k = $number;
                $g = $number * 0.4167;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$sz</td><td>sztuk</td></tr>"
                        . "<tr><td>$t</td><td>tuzin</td></tr>"
                        . "<tr><td>$m</td><td>mendel</td></tr>"
                        . "<tr><td>$k</td><td>kopa</td></tr>"
                        . "<tr><td>$g</td><td>gross<td></tr>"
                        . "</table>";
                break;
            case 'g':
                $sz = $number * 144;
                $t = $number * 12;
                $m = $number * 9.6;
                $k = $number * 2.4;
                $g = $number;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$sz</td><td>sztuk</td></tr>"
                        . "<tr><td>$t</td><td>tuzin</td></tr>"
                        . "<tr><td>$m</td><td>mendel</td></tr>"
                        . "<tr><td>$k</td><td>kopa</td></tr>"
                        . "<tr><td>$g</td><td>gross<td></tr>"
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>przeliczy ilośc posiadanych produktów</h3>
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
                            <option value="sz">sztuk</option>
                            <option value="t">tuzin</option>
                            <option value="m">mendel</option>
                            <option value="k">kopa</option>
                            <option value="g">gros</option>
                        </select> <br>
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