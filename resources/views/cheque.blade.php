<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheque No. 1</title>
    <style>
        html, body {
            padding: 0;
            margin: 0;
            overflow: hidden;
            width: 190.5mm;
            height: 88.9mm;
            background-color: #3f3f3f;
            font-size: 16px;
        }

        .cheque {
            position: relative;
            width: 190.5mm;
            height: 88.9mm;
            color: white;
            background-image: url('https://s8.freechequewriter.com/image/cheque/KumariBank_NP.jpg');
            background-color: blue;
            background-repeat: no-repeat;
            background-blend-mode: multiply;
            background-size: cover;
        }

        .date, .payee, .amount, .amount-words, .or-bearer-one, .or-bearer-two {
            color: red;
            position: absolute;
        }

        .date {
            top: calc(88.9mm - 82.55mm);
            left: calc(190.5mm - 53.175mm);
        }

        .payee {
            top: calc(88.9mm - 71.5mm);
            left: 38mm;
        }

        .or-bearer-one, .or-bearer-two {
            right: 2mm;
            font-size: 12px;
        }

        .or-bearer-one {
            top: calc(88.9mm - 67mm);
        }

        .or-bearer-two {
            top: calc(88.9mm - 63mm);
        }

        .amount {
            top: calc(88.9mm - 60.33mm + 0.7875mm);
            left: calc(190.5mm - 53.975mm + 1.5875mm);
        }

        .amount-words {
            top: calc(88.9mm - 63.5mm);
            left: 20mm;
            right: 66.675mm;
            line-height: 1.6;
        }
    </style>
</head>
<body>
@php
    $date = "2010-06-09";
    $payee = "Achyut Neupane";
    $amount_num = 100000000;
    $amount = \Illuminate\Support\Number::currency($amount_num, 'NPR');
    $converter = new \MilanTarami\NumberToWordsConverter\Services\NumberToWords();
    $amount_words = $converter->get($amount_num);

    $date = str_split(date_create($date)->format('dmY'));
@endphp
<div class="cheque">
    <div class="date">
        <table>
            <tr style="height: 9.525mm;">
                @foreach($date as $d)
                    <td style="width: 5.3mm;">{{ $d }}</td>
                @endforeach
            </tr>
        </table>
    </div>
    <div class="payee">
        <table>
            <tr style="height: 9.525mm;">
                <td>
                    {{ $payee }}
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr class="or-bearer-one">
                <td>
                    XXXXX
                </td>
            </tr>
            <tr class="or-bearer-two">
                <td>
                    XXXXX
                </td>
            </tr>
        </table>
    </div>
    <div class="amount">
        <table>
            <tr style="height: 9.525mm;">
                <td>
                    {{ $amount }}
                </td>
            </tr>
        </table>
    </div>
    <div class="amount-words">
        <table>
            <tr>
                <td>
                    {{ $amount_words }}
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
