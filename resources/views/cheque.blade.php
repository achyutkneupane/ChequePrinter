<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheque No. 1</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color: #3f3f3f;
            font-size: 18px;
            overflow: hidden;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cheque {
            position: relative;
            width: 190.5mm;
            height: 88.9mm;
            color: white;
            border: 2px solid white;
            background-image: url('https://s8.freechequewriter.com/image/cheque/KumariBank_NP.jpg');
            background-color: blue;
            background-repeat: no-repeat;
            background-blend-mode: multiply;
            background-size: cover;
        }
        .date {
            position: absolute;
            top: calc(88.9mm - 82.55mm);
            left: calc(190.5mm - 53.175mm);
        }
        .payee {
            position: absolute;
            top: calc(88.9mm - 71.5mm);
            left: 38mm;
        }
        .amount {
            position: absolute;
            top: calc(88.9mm - 60.33mm + 0.7875mm);
            left: calc(190.5mm - 53.975mm + 1.5875mm);
        }
        .amount-words {
            position: absolute;
            top: calc(88.9mm - 63.5mm);
            right: 66.675mm;
            left: 20mm;
        }
    </style>
</head>
<body>
<div class="cheque">
    <div class="date">
        <table>
            <tr style="color: red; height: 9.525mm;">
                <td style="width: 5.3mm;">1</td>
                <td style="width: 5.3mm;">2</td>
                <td style="width: 5.3mm;">1</td>
                <td style="width: 5.3mm;">2</td>
                <td style="width: 5.3mm;">2</td>
                <td style="width: 5.3mm;">0</td>
                <td style="width: 5.3mm;">2</td>
                <td style="width: 5.3mm;">4</td>
            </tr>
        </table>
    </div>
    <div class="payee">
        <table>
            <tr style="color: red; height: 9.525mm;">
                <td>Achyut Neupane</td>
            </tr>
        </table>
    </div>
    <div class="amount">
        <table>
            <tr style="color: red; height: 9.525mm;">
                <td>10,000</td>
            </tr>
        </table>
    </div>
    <div class="amount-words">
        <table>
            <tr style="color: red;">
                <td>ten thousand only</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
