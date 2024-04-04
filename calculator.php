<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(83, 96, 108);
            font-size: 20px; /* Adjusted font size */
        }

        .calc {
            border: 2px solid black; /* Increased border thickness */
            border-radius: 40px; /* Increased border radius */
            width: 320px; /* Adjusted width */
            height: 600px; /* Adjusted height */
            margin: auto;
            background-color: rgb(65, 63, 63);
            box-shadow: 15px 15px 20px 5px rgba(0, 0, 0, 0.5); /* Increased box shadow */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px; /* Adjusted padding */
        }

        .calc form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .head {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-bottom: 12px; /* Increased margin */
        }

        .head label {
            color: white;
            font-family: sans-serif;
            font-weight: 700;
            margin-right: auto;
            font-size: 24px; /* Increased font size */
        }

        .head .mirror {
            display: flex;
            background-color: rgb(82, 44, 44);
            width: 80%;
            height: 24px; /* Increased height */
            border-radius: 6px; /* Increased border radius */
            border: 2px solid black;
            border-right-color: rgb(142, 141, 141);
            border-top-color: rgb(96, 95, 95);
            border-left-color: rgba(0, 0, 0, 0.1);
        }

        .input input {
            margin-bottom: 20px; /* Adjusted margin */
            height: 80px; /* Adjusted height */
            width: 98%;
            background-color: rgb(81, 99, 99);
            text-align: end;
            font-size: 30px; /* Adjusted font size */
            border-radius: 20px; /* Increased border radius */
            border-right-color: rgb(190, 190, 190);
        }

        .row {
            display: flex;
            width: 100%;
            justify-content: space-between;
            margin-bottom: 10px; /* Adjusted margin */
        }

        .row input {
            border-radius: 20px; /* Increased border radius */
            font-size: 24px; /* Adjusted font size */
            color: white;
            background-color: rgb(83, 83, 82);
            height: 80px; /* Adjusted height */
            width: calc(25% - 10px); /* Adjusted width */
            border: 2px solid rgb(12, 12, 12);
            box-shadow: 0px 0px 5px 2px rgb(33, 32, 32);
            cursor: pointer;
            border-right: 5px solid black;
            border-top: 5px solid black;
        }

        .row .key {
            background-color: rgb(175, 33, 33);
        }

        .row .key:hover {
            background-color: rgb(224, 62, 62);
        }

        .row .eql {
            background-color: rgb(4, 113, 4);
        }

        .row .eql:hover {
            background-color: rgb(17, 131, 17);
        }

        .row input:hover {
            background-color: rgb(97, 97, 95);
        }

        .end {
            background-color: rgb(52, 51, 51);
            width: 100%;
            height: 20px; /* Adjusted height */
            margin-top: 10px; /* Increased margin */
            border-bottom-left-radius: 40px; /* Increased border radius */
            border-bottom-right-radius: 40px; /* Increased border radius */
            margin-bottom: 0px;
        }
    </style>
</head>

<body>
    <div class="calc">
        <form action="" method="post">
            <div class="input">
                <div class="head">
                    <label for="inp">Elex Calculator</label>
                    <div class="mirror"></div>
                </div>
                <input type="text" id="inp" name="display">
            </div>
            <div class="row">
                <input type="button" value="7" name="7" onclick="display.value+='7'">
                <input type="button" value="8" name="8" onclick="display.value+='8'">
                <input type="button" value="9" name="9" onclick="display.value+='9'">
                <input type="button" value="/" name="/" onclick="display.value +='/'">
            </div>

            <div class="row">
                <input type="button" value="4" name="4" onclick="display.value+='4'">
                <input type="button" value="5" name="5" onclick="display.value+='5'">
                <input type="button" value="6" name="6" onclick="display.value+='6'">
                <input type="button" value="*" name="x" onclick="display.value+='*'">
            </div>
            <div class="row">
                <input type="button" value="1" name="1" onclick="display.value +='1'">
                <input type="button" value="2" name="2" onclick="display.value +='2'">
                <input type="button" value="3" name="3" onclick="display.value +='3'">
                <input type="button" value="-" name="-" onclick="display.value+='-'">
            </div>
            <div class="row">
                <input type="button" value="0" name="0" onclick="display.value +='0'" style="width: 30%;">
                <input type="button" value="=" name="=" onclick="calculateResult()" style="width: 40%;">
                <input type="button" value="+" name="+" onclick="display.value +='+'" style="width: 30%;">
            </div>


            <div class="end"></div>
        </form>
    </div>

    <script>
        function calculateResult() {
            var result = eval(document.getElementById("inp").value);
            if (result == 10) {
                document.getElementById("inp").value = "O.A";
            } else {
                document.getElementById("inp").value = result;
            }
        }
    </script>
</body>

</html>
