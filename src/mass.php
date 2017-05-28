<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['value']) && !empty($_POST['type'])) {

        $number = $_POST['value'];
        $type = $_POST['type'];
        $mg = 0;
        $g = 0;
        $dkg = 0;
        $k = 0;
        $t = 0;

        switch ($type) {
            case 'mg':
                $mg = $number;
                $g = $number * 0.001;
                $dkg = $number * 0.0001;
                $kg = $number * 0.000001;
                $t = $number * 0.000000001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mg</td><td>mg</td></tr>"
                        . "<tr><td>$g</td><td>g</td></tr>"
                        . "<tr><td>$dkg</td><td>dkg</td></tr>"
                        . "<tr><td>$kg</td><td>kg</td></tr>"
                        . "<tr><td>$t</td><td>t</td></tr>"
                        . "</table>";
                break;
            case 'g':
                $mg = $number * 1000;
                $g = $number;
                $dkg = $number * 0.1;
                $kg = $number * 0.001;
                $t = $number * 0.000001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mg</td><td>mg</td></tr>"
                        . "<tr><td>$g</td><td>g</td></tr>"
                        . "<tr><td>$dkg</td><td>dkg</td></tr>"
                        . "<tr><td>$kg</td><td>kg</td></tr>"
                        . "<tr><td>$t</td><td>t</td></tr>"
                        . "</table>";
                break;
            case 'dkg':
                $mg = $number * 10000;
                $g = $number * 10;
                $dkg = $number;
                $kg = $number * 0.01;
                $t = $number * 0.00001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mg</td><td>mg</td></tr>"
                        . "<tr><td>$g</td><td>g</td></tr>"
                        . "<tr><td>$dkg</td><td>dkg</td></tr>"
                        . "<tr><td>$kg</td><td>kg</td></tr>"
                        . "<tr><td>$t</td><td>t</td></tr>"
                        . "</table>";
                break;
            case 'kg':
                $mg = $number * 1000000;
                $g = $number * 1000;
                $dkg = $number * 100;
                $kg = $number;
                $t = $number * 0.001;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mg</td><td>mg</td></tr>"
                        . "<tr><td>$g</td><td>g</td></tr>"
                        . "<tr><td>$dkg</td><td>dkg</td></tr>"
                        . "<tr><td>$kg</td><td>kg</td></tr>"
                        . "<tr><td>$t</td><td>t</td></tr>"
                        . "</table>";
                break;
            case 't':
                $mg = $number * 1000000000;
                $g = $number * 1000000;
                $dkg = $number * 100000;
                $kg = $number * 1000;
                $t = $number;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mg</td><td>mg</td></tr>"
                        . "<tr><td>$g</td><td>g</td></tr>"
                        . "<tr><td>$dkg</td><td>dkg</td></tr>"
                        . "<tr><td>$kg</td><td>kg</td></tr>"
                        . "<tr><td>$t</td><td>t</td></tr>"
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
            <h3>Metryczne jednostki masy</h3>
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
                            <option value="mg">miligram</option>
                            <option value="g">gram</option>
                            <option value="dkg">dekagram</option>
                            <option value="kg">kilogram</option>
                            <option value="t">tona</option>
                        </select> <br>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button type="submit" class="btn btn-success">Przelicz</button>
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
