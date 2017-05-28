<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['value']) && !empty($_POST['type'])) {
        $number = $_POST['value'];
        $type = $_POST['type'];
        $ms = 0;
        $s = 0;
        $m = 0;
        $h = 0;

        switch ($type) {
            case 'ms':
                $ms = $number;
                $s = $number * 0.001;
                $m = $number * 0.000017;
                $h = $number * 0.0000002777778;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ms</td><td>milisekund</td></tr>"
                        . "<tr><td>$s</td><td>sekund</td></tr>"
                        . "<tr><td>$m</td><td>minut</td></tr>"
                        . "<tr><td>$h</td><td>godzin</td></tr>"
                        . "</table>";
                break;
            case 's':
                $ms = $number * 1000;
                $s = $number;

                $m = $number * 0.016667;
                $h = $number * 0.000278;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ms</td><td>milisekund</td></tr>"
                        . "<tr><td>$s</td><td>sekund</td></tr>"
                        . "<tr><td>$m</td><td>minut</td></tr>"
                        . "<tr><td>$h</td><td>godzin</td></tr>"
                        . "</table>";
                break;
            case 'm':
                $ms = $number * 60000;
                $s = $number * 60;

                $m = $number;
                $h = $number * 0.016667;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ms</td><td>milisekund</td></tr>"
                        . "<tr><td>$s</td><td>sekund</td></tr>"
                        . "<tr><td>$m</td><td>minut</td></tr>"
                        . "<tr><td>$h</td><td>godzin</td></tr>"
                        . "</table>";
                break;
            case 'h':
                $ms = $number * 1000 * 3600;
                $s = $number * 3600;

                $m = $number * 60;
                $h = $number;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ms</td><td>milisekund</td></tr>"
                        . "<tr><td>$s</td><td>sekund</td></tr>"
                        . "<tr><td>$m</td><td>minut</td></tr>"
                        . "<tr><td>$h</td><td>godzin</td></tr>"
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
            <h3>Jednostki czasu</h3>
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
                            <option value="ms">milisekunda</option>
                            <option value="s">sekunda</option>
                            <option value="m">minuta</option>
                            <option value="h">godzina</option>
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

