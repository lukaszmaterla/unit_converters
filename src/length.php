<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['value']) && !empty($_POST['type'])) {
        $number = $_POST['value'];
        $type = $_POST['type'];
        $mm = 0;
        $dm = 0;
        $cm = 0;
        $m = 0;
        $km = 0;

        switch ($type) {
            case 'mm':
                $mm = $number;
                $cm = $number * 0.1;
                $dm = $number * 0.01;
                $m = $number * 0.001;
                $km = $number * 0.000001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm</td><td>mm</td></tr>"
                        . "<tr><td>$cm</td><td>cm</td></tr>"
                        . "<tr><td>$dm</td><td>dm</td></tr>"
                        . "<tr><td>$m</td><td>m</td></tr>"
                        . "<tr><td>$km</td><td>km</td></tr>"
                        . "</table>";
                break;
            case 'cm':
                $mm = $number * 10;
                $cm = $number;
                $dm = $number * 0.1;
                $m = $number * 0.001;
                $km = $number * 0.00001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm</td><td>mm</td></tr>"
                        . "<tr><td>$cm</td><td>cm</td></tr>"
                        . "<tr><td>$dm</td><td>dm</td></tr>"
                        . "<tr><td>$m</td><td>m</td></tr>"
                        . "<tr><td>$km</td><td>km</td></tr>"
                        . "</table>";
                break;
            case 'dm':
                $mm = $number * 100;
                $cm = $number * 10;
                $dm = $number;
                $m = $number * 0.1;
                $km = $number * 0.0001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm</td><td>mm</td></tr>"
                        . "<tr><td>$cm</td><td>cm</td></tr>"
                        . "<tr><td>$dm</td><td>dm</td></tr>"
                        . "<tr><td>$m</td><td>m</td></tr>"
                        . "<tr><td>$km</td><td>km</td></tr>"
                        . "</table>";
                break;
            case 'm':
                $mm = $number * 1000;
                $cm = $number * 100;
                $dm = $number * 10;
                $m = $number;
                $km = $number * 0.001;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm</td><td>mm</td></tr>"
                        . "<tr><td>$cm</td><td>cm</td></tr>"
                        . "<tr><td>$dm</td><td>dm</td></tr>"
                        . "<tr><td>$m</td><td>m</td></tr>"
                        . "<tr><td>$km</td><td>km</td></tr>"
                        . "</table>";
                break;
            case 'km':
                $mm = $number * 1000000;
                $cm = $number * 100000;
                $dm = $number * 10000;
                $m = $number * 1000;
                $km = $number;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$mm</td><td>mm</td></tr>"
                        . "<tr><td>$cm</td><td>cm</td></tr>"
                        . "<tr><td>$dm</td><td>dm</td></tr>"
                        . "<tr><td>$m</td><td>m</td></tr>"
                        . "<tr><td>$km</td><td>km</td></tr>"
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-812 align-center">
            <h3>Metryczne jednostki dlugośći !</h3>
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
                            <option value="mm">mm</option>
                            <option value="cm">cm</option>
                            <option value="dm">dm</option>
                            <option value="m">m</option>
                            <option value="km">km</option>
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


