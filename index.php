<!DOCTYPE html>
<html>
    <head>
        <title>კალკულატორი</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    </head>
    <body>
        <h1>{ &lt;DIRECTED ByABGEO /&gt; }</h1>
        <div class="content">
            <div class="glava">მაგ.2: კალკულატორი</div> <hr>

            <form action="/" method="POST">
                <center>
                    <input type="text" name="chis1" size="2">
                     <select name="operation">
                        <option value="1">+</option>
                        <option value="2">-</option>
                        <option value="3">*</option>
                        <option value="4">/</option>
                    </select>
                    <input type="text" name="chis2" size="2"> </br></br>

                    <input type="submit" value="გამოთვლა">
                </center>
            </form>

            <?php
                $chis1 = trim($_REQUEST['chis1']);
                $chis2 = trim($_REQUEST['chis2']);

                switch($_REQUEST['operation']) {
                    case 1:
                        echo $chis1." + ".$chis2." = ".$chis1 + $chis2;
                        break;
                    case 2:
                        echo $chis1." - ".$chis2." = ".$chis1 - $chis2;
                        break;
                    case 3:
                        echo $chis1." * ".$chis2." = ".$chis1 * $chis2;
                        break;
                    case 4:
                        echo $chis1." / ".$chis2." = ".$chis1 * $chis2;
                        break;
                }
            ?>

        </div>
        <div class="footer">
            <p>{ TTProductions 2016-<?php echo date(Y); ?> }</p>
        </div>
    </body>
</html>