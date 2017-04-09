<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['value']) && !empty($_POST['type'])) {
        $number = $_POST['value'];
        $type = $_POST['type'];
        $ml = 0;
        $cl = 0;
        $dl = 0;
        $l = 0;
        $m3 = 0;

        switch ($type) {
            case 'ml':
                $ml = $number;
                $cl = $number * 0.1;
                $dl = $number * 0.01;
                $l = $number * 0.001;
                $m3 = $number * 0.000001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ml</td><td>ml</td></tr>"
                        . "<tr><td>$cl</td><td>cl</td></tr>"
                        . "<tr><td>$dl</td><td>dl</td></tr>"
                        . "<tr><td>$l</td><td>l</td></tr>"
                        . "<tr><td>$m3/td><td>m<sup>3</sup</td></tr>"
                        . "</table>";
                break;
            case 'cl':
                $ml = $number * 10;
                $cl = $number;
                $dl = $number * 0.1;
                $l = $number * 0.01;
                $m3 = $number * 0.00001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ml</td><td>ml</td></tr>"
                        . "<tr><td>$cl</td><td>cl</td></tr>"
                        . "<tr><td>$dl</td><td>dl</td></tr>"
                        . "<tr><td>$l</td><td>l</td></tr>"
                        . "<tr><td>$m3</td><td>m<sup>3</sup</td></tr>"
                        . "</table>";
                break;
            case 'dl':
                $ml = $number * 100;
                $cl = $number * 10;
                $dl = $number;
                $l = $number * 0.1;
                $m3 = $number * 0.0001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ml</td><td>ml</td></tr>"
                        . "<tr><td>$cl</td><td>cl</td></tr>"
                        . "<tr><td>$dl</td><td>dl</td></tr>"
                        . "<tr><td>$l</td><td>l</td></tr>"
                        . "<tr><td>$m3</td><td>m<sup>3</sup</td></tr>"
                        . "</table>";
                break;
            case 'l':
                $ml = $number * 1000;
                $cl = $number * 100;
                $dl = $number * 10;
                $l = $number;
                $m3 = $number * 0.001;
                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ml</td><td>ml</td></tr>"
                        . "<tr><td>$cl</td><td>cl</td></tr>"
                        . "<tr><td>$dl</td><td>dl</td></tr>"
                        . "<tr><td>$l</td><td>l</td></tr>"
                        . "<tr><td>$m3</td><td>m<sup>3</sup</td></tr>"
                        . "</table>";
                break;
            case 'm3':
                $ml = $number * 1000000;
                $cl = $number * 100000;
                $dl = $number * 10000;
                $l = $number * 1000;
                $m3 = $number;

                $result = "<table class='table table-hover'><th>Wartość </th><th>Jednostka</th>"
                        . "<tr><td>$ml</td><td>ml</td></tr>"
                        . "<tr><td>$cl</td><td>cl</td></tr>"
                        . "<tr><td>$dl</td><td>dl</td></tr>"
                        . "<tr><td>$l</td><td>l</td></tr>"
                        . "<tr><td>$m3</td><td>m<sup>3</sup</td></tr>"
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
            <h3>Metryczne jednostki objętośći</h3>
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
                            <option value="ml">mililitr</option>
                            <option value="cl">centylitr</option>
                            <option value="dl">decylitr</option>
                            <option value="l">litr</option>
                            <option value="m3">metr[m<sub>3</sup]</option>
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

