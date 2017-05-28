<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['value']) && !empty($_POST['type'])) {
        $number = $_POST['value'];
        $type = $_POST['type'];
        $mm2 = 0;
        $dm2 = 0;
        $cm2 = 0;
        $m2 = 0;
        $km2 = 0;
        $ar = 0;
        $ha = 0;
        switch ($type) {
            case 'mm2':
                $mm2 = $number;
                $cm2 = $number * 0.01;
                $dm2 = $number * 0.0001;
                $m2 = $number * 0.000001;
                $km2 = $number * 0.000000000001;
                $ar = $number * 0.00000001;
                $hr = $number * 0.0000000001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm2</td><td>mm<sup>2<sup></td></tr>"
                        . "<tr><td>$cm2</td><td>cm<sup>2<sup></td></tr>"
                        . "<tr><td>$dm2</td><td>dm<sup>2<sup></td></tr>"
                        . "<tr><td>$m2</td><td>m<sup>2<sup></td></tr>"
                        . "<tr><td>$km2</td><td>km<sup>2<sup></td></tr>"
                        . "<tr><td>$ar</td><td>ar[ar]</td></tr>"
                        . "<tr><td>$hr</td><td>hektar[hr]</td></tr>"
                        . "</table>";
                break;
            case 'cm2':
                $mm2 = $number * 100;
                $cm2 = $number;
                $dm2 = $number * 0.01;
                $m2 = $number * 0.0001;
                $km2 = $number * 0.0000000001;
                $ar = $number * 0.000001;
                $hr = $number * 0.00000001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm2</td><td>mm<sup>2<sup></td></tr>"
                        . "<tr><td>$cm2</td><td>cm<sup>2<sup></td></tr>"
                        . "<tr><td>$dm2</td><td>dm<sup>2<sup></td></tr>"
                        . "<tr><td>$m2</td><td>m<sup>2<sup></td></tr>"
                        . "<tr><td>$km2</td><td>km<sup>2<sup></td></tr>"
                        . "<tr><td>$ar</td><td>ar[ar]</td></tr>"
                        . "<tr><td>$hr</td><td>hektar[hr]</td></tr>"
                        . "</table>";
                break;
            case 'dm2':
                $mm2 = $number * 10000;
                $cm2 = $number * 100;
                $dm2 = $number;
                $m2 = $number * 0.01;
                $km2 = $number * 0.00000001;
                $ar = $number * 0.0001;
                $hr = $number * 0.000001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm2</td><td>mm<sup>2<sup></td></tr>"
                        . "<tr><td>$cm2</td><td>cm<sup>2<sup></td></tr>"
                        . "<tr><td>$dm2</td><td>dm<sup>2<sup></td></tr>"
                        . "<tr><td>$m2</td><td>m<sup>2<sup></td></tr>"
                        . "<tr><td>$km2</td><td>km<sup>2<sup></td></tr>"
                        . "<tr><td>$ar</td><td>ar[ar]</td></tr>"
                        . "<tr><td>$hr</td><td>hektar[hr]</td></tr>"
                        . "</table>";
                break;
            case 'm2':
                $mm2 = $number * 1000000;
                $cm2 = $number * 10000;
                $dm2 = $number * 100;
                $m2 = $number;
                $km2 = $number * 0.000001;
                $ar = $number * 0.01;
                $hr = $number * 0.0001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm2</td><td>mm<sup>2<sup></td></tr>"
                        . "<tr><td>$cm2</td><td>cm<sup>2<sup></td></tr>"
                        . "<tr><td>$dm2</td><td>dm<sup>2<sup></td></tr>"
                        . "<tr><td>$m2</td><td>m<sup>2<sup></td></tr>"
                        . "<tr><td>$km2</td><td>km<sup>2<sup></td></tr>"
                        . "<tr><td>$ar</td><td>ar[ar]</td></tr>"
                        . "<tr><td>$hr</td><td>hektar[hr]</td></tr>"
                        . "</table>";
                break;
            case 'km2':
                $mm2 = $number * 1000000000000;
                $cm2 = $number * 10000000000;
                $dm2 = $number * 100000000;
                $m2 = $number * 1000000;
                $km2 = $number;
                $ar = $number * 100000;
                $hr = $number * 100;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm2</td><td>mm<sup>2<sup></td></tr>"
                        . "<tr><td>$cm2</td><td>cm<sup>2<sup></td></tr>"
                        . "<tr><td>$dm2</td><td>dm<sup>2<sup></td></tr>"
                        . "<tr><td>$m2</td><td>m<sup>2<sup></td></tr>"
                        . "<tr><td>$km2</td><td>km<sup>2<sup></td></tr>"
                        . "<tr><td>$ar</td><td>ar[ar]</td></tr>"
                        . "<tr><td>$hr</td><td>hektar[hr]</td></tr>"
                        . "</table>";
                break;
            case 'ar':
                $mm2 = $number * 100000000;
                $cm2 = $number * 1000000;
                $dm2 = $number * 10000;
                $m2 = $number * 100;
                $km2 = $number * 0.0001;
                $ar = $number;
                $hr = $number * 0.01;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm2</td><td>mm<sup>2<sup></td></tr>"
                        . "<tr><td>$cm2</td><td>cm<sup>2<sup></td></tr>"
                        . "<tr><td>$dm2</td><td>dm<sup>2<sup></td></tr>"
                        . "<tr><td>$m2</td><td>m<sup>2<sup></td></tr>"
                        . "<tr><td>$km2</td><td>km<sup>2<sup></td></tr>"
                        . "<tr><td>$ar</td><td>ar[ar]</td></tr>"
                        . "<tr><td>$hr</td><td>hektar[hr]</td></tr>"
                        . "</table>";
                break;
            case 'ha':
                $mm2 = $number * 10000000000;
                $cm2 = $number * 100000000;
                $dm2 = $number * 1000000;
                $m2 = $number * 10000;
                $km2 = $number * 0.01;
                $ar = $number * 100;
                $hr = $number;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm2</td><td>mm<sup>2<sup></td></tr>"
                        . "<tr><td>$cm2</td><td>cm<sup>2<sup></td></tr>"
                        . "<tr><td>$dm2</td><td>dm<sup>2<sup></td></tr>"
                        . "<tr><td>$m2</td><td>m<sup>2<sup></td></tr>"
                        . "<tr><td>$km2</td><td>km<sup>2<sup></td></tr>"
                        . "<tr><td>$ar</td><td>ar[ar]</td></tr>"
                        . "<tr><td>$hr</td><td>hektar[hr]</td></tr>"
                        . "</table>";
                break;
            default:
                break;
        }
    } else {
        $result = '<span style="color:red;">Podaj wartość  do przelicznenia lub wybierz jednostkę</span>';
    }
}
?>
<div class="container">
    <div class="row page-header align-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
            <h3>Metryczne jednostki powierzchni !</h3>
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
                            <option value="mm2">mm<sup>2</sup></option>
                            <option value="cm2">cm<sup>2</sup></option>
                            <option value="dm2">dm<sup>2</sup></option>
                            <option value="m2">m<sup>2</sup></option>
                            <option value="km2">km<sup>2</sup></option>
                            <option value="ar">ar[ar]</option>
                            <option value="hr">hektar[ha]</option>
                        </select> <br>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button type="submit" name="calculate" class="btn btn-success">Przelicz</button>
                    </div>
                </div> 
            </form>

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

