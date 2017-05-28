<!doctype html>
<html lang="en">
    <!-- head-->
    <?php require_once(__DIR__ . '/content/head.html'); ?>
    <!-- end head-->
    <body>
        <!-- fixed navbar-->
        <?php require_once(__DIR__ . '/content/navbar.html'); ?>
        <!-- end fixed navbar -->
        <!-- type of units -->
        <div class= "jumbotron">
            <div class="container">
                <div class="row page-header align-center">
                    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>Witaj, chcesz przeliczyc jednostki? Dobrze trafiłeś !</h2>
                    </div>
                    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <form action="index.php" method="GET">
                            <button type="submit" name="name" value="area" class="btn btn-success">Powierzchnia</button>
                            <button type="submit" name="name" value="length" class="btn btn-success">Długość</button>
                            <button type="submit" name="name" value="time" class="btn btn-success">Czas</button>
                            <button type="submit" name="name" value="mass" class="btn btn-success">Masa</button>
                            <button type="submit" name="name" value="opacity" class="btn btn-success">Objętość</button>
                            <button type="submit" name="name" value="temperature" class="btn btn-success">Temperatura</button>
                            <button type="submit" name="name" value="quantity" class="btn btn-success">Ilość</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end type of units -->
        <!-- unit calculator-->
        <?php
        if (isset($_GET['name'])) {
            switch ($_GET['name']) {
                case 'area':
                    require_once(__DIR__ . '/src/area.php');
                    break;
                case 'length':
                    require_once(__DIR__ . '/src/length.php');
                    break;
                case 'time':
                    require_once(__DIR__ . '/src/time.php');
                    break;
                case 'mass':
                    require_once(__DIR__ . '/src/mass.php');
                    break;
                case 'opacity':
                    require_once(__DIR__ . '/src/opacity.php');
                    break;
                case 'temperature':
                    require_once(__DIR__ . '/src/temperature.php');
                    break;
                case 'quantity':
                    require_once(__DIR__ . '/src/quantity.php');
                    break;
                default :
                    break;
            }
        }
        ?>
        <!-- end unit calculator-->
        <!-- footer-->
        <?php require_once(__DIR__ . '/content/footer.html'); ?>
        <!-- end footer -->
    </body>
</html>
