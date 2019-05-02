<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <a href="board_form.php" style="border: 1px; padding: 10px; background: #63f2e8; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-bottom: 5px;"> start </a>
            <a href="board_form.php" style="border: 1px; padding: 10px; background: #63f2e8; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-bottom: 5px;"> Rest </a>
            <a href="board_form.php" style="border: 1px; padding: 10px; background: #63f2e8; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-bottom: 5px;"> Add </a>
            <div class="table100">
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">Process Number</th>
                        <th class="column2">Arrive Time</th>
                        <th class="column3">Burst Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        # TODO : 아래 표시되는 내용을, MySQL 테이블에 있는 레코드로 대체하기!
                        # Note : column6 에 해당하는 Total 은 Price 값과 Quantity 값의 곱으로 표시!
                    global $processData;
                    $processData = array(
                        array (1, 123, 456),
                        array (2, 555, 123)
                    );
                    $processData[2] = array(3, 111, 789);
                    $processData[3] = array(0, 1);
                    $i = 0;
                        while(count($processData[$i]) == 3)
                        {
                    ?>
                            <tr onclick="location.href = ('board_form.php?num=<? echo $i ?>')">
                                <td class="column4">P<? echo $processData[$i][0] ?></td>
                                <td class="column5"><? echo $processData[$i][1] ?></td>
                                <td class="column6"><? echo $processData[$i][2] ?></td>
                            </tr>
                    <?php
                            $i++;
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>