<html lang="HTML">
<head>

    <title>Parking Management App</title>
    <style>
        .main {
            margin: 40px;
            padding: 20px;
            background-color: #CDF5FD;
            display: flex;
            flex-direction: column;
        }

        .head {
            margin: 10px;
            display: flex;
            flex-direction: row;
        }

        .content {
            padding: 10px;
            background-color: #ffff;
            display: flex;
            flex-direction: row;
        }

        .left {
            border: 2px solid #00A9FF;
            float: left;
            width: 65%;
            background-color: #A0E9FF;
            margin-right: 10px;
        }

        .right {
            border: 2px solid #D0A2F7;
            float: right;
            width: 35%;
            background-color: #E5D4FF;
        }

        h2 {
            text-align: center;
            padding: 5px;
        }

        .space {
            margin: 10px;
            padding: 10px;
        }

        .parking-container {
            display: flex;
            flex-wrap: wrap;
        }

        .parking-container > div {
            background-color: #f1f1f1;
            margin: 10px;
            padding: 5px;
            text-align: center;
            line-height: 25px;
            font-size: 15px;
            border: 2px firebrick solid;
            border-radius: 5px;
            width: 53px;
        }

        .error {
            padding: 5px;
            color: #D8000C;
            background-color: #FFBABA;
            line-height: 25px;
        }

        .success {
            color: #4F8A10;
            background-color: #DFF2BF;
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php
require_once 'conf.php';
require_once 'func.php';
?>
<div class="main">
    <div class="head">
        <div class="left">
            <h2>
                Parking View
            </h2>
        </div>
        <div class="right">
            <h2>
                Control panel
            </h2>
        </div>
    </div>
    <div class="content">
        <div class="left">
            <div class="parking-container">
                <div>SLOT1 CAT4525</div>
                <div>SLOT2 BCD4523</div>
                <div>SLOT3 ACB7946</div>
                <div>SLOT4 EMPTY</div>
                <div>SLOT5 CAV4231</div>
                <div>SLOT6 EMPTY</div>
                <div>SLOT7 DAD8523</div>
                <div>SLOT8 EMPTY</div>
                <div>SLOT9 EMPTY</div>
                <div>SLOT10 DAC486</div>
                <div>SLOT11 CAV4231</div>
                <div>SLOT12 EMPTY</div>
                <div>SLOT13 EMPTY</div>
                <div>SLOT14 EMPTY</div>
                <div>SLOT15 EMPTY</div>
                <div>SLOT16 EMPTY</div>
                <div>SLOT17 EMPTY</div>
                <div>SLOT18 EMPTY</div>
                <div>SLOT19 EMPTY</div>
                <div>SLOT20 EMPTY</div>
                <div>SLOT21 EMPTY</div>
                <div>SLOT22 EMPTY</div>
                <div>SLOT23 EMPTY</div>
                <div>SLOT24 EMPTY</div>
                <div>SLOT25 KS6696</div>
                <div>SLOT26 EMPTY</div>
                <div>SLOT27 EMPTY</div>
                <div>SLOT28 EMPTY</div>
                <div>SLOT29 EMPTY</div>
                <div>SLOT30 EMPTY</div>
                <div>SLOT31 EMPTY</div>
                <div>SLOT32 EMPTY</div>
                <div>SLOT33 EMPTY</div>
                <div>SLOT34 EMPTY</div>
                <div>SLOT34 DG4562</div>
                <div>SLOT36 EMPTY</div>
                <div>SLOT37 BCT9652</div>
                <div>SLOT38 EMPTY</div>
                <div>SLOT39 EMPTY</div>
                <div>SLOT40 EMPTY</div>
                <div>SLOT41 EMPTY</div>
                <div>SLOT42 EMPTY</div>
                <div>SLOT43 EMPTY</div>
                <div>SLOT44 EMPTY</div>
                <div>SLOT45 EMPTY</div>
                <div>SLOT46 AC4512</div>
                <div>SLOT47 EMPTY</div>
                <div>SLOT48 EMPTY</div>
                <div>SLOT49 EMPTY</div>
                <div>SLOT50 EMPTY</div>

                

            </div>
        </div>
        <div class="right">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table>
                    <tr>
                        <td align="right">Option:</td>
                        <td>
                            <label>
                                <input type="radio" name="park" value="alloc">Allocate
                                <input type="radio" name="park" value="free">Free

                            </label>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>Slot No:</td>
                        <td align="right">
                            <label>
                                <input type="number" name="slot">
                            </label>
                        </td>
                        <td>
                            <label class="error">
                            </label>

                        </td>
                    </tr>
                    <tr>
                        <td>Vehicle No:</td>
                        <td align="right">
                            <label>
                                <input type="text" name="vno">
                            </label>
                        </td>
                        <td>
                            <label class="error">
                                
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                        </td>
                        <td>
                            <label>
                                <input type="submit" name="alloc_btn" value="Allocate or Free">
                            </label>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

</body>

</html>

