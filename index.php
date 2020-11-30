<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1>Calculator</h1>
    <form action="calc.php" method="post" class="calculate-form">
        <div class="form-group row">
            <div class="col-3">
                <input class="form-control" name="number1" id ="number1" type="number" step="any" placeholder="First number" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-2">
                <select class="form-control" onchange="changeFunc()" id="oper" name="operation">
                    <option value="plus">+ </option>
                    <option value="minus">- </option>
                    <option value="multiply">* </option>
                    <option value="divide">/ </option>
                    <option value="scrt">^ </option>
                    <option value="radical">√ </option>

                    <script type="text/javascript">
                    /*prevents writing a number in field "number2" */
                        function changeFunc() {
                            var selectBox = document.getElementById("oper");
                            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                            if (selectedValue === 'radical'){
                                document.getElementById("number2").disabled = true
                                document.getElementById("number2").value = '0'
                            }else{
                                document.getElementById("number2").disabled = false
                            } ;
                    }
                    </script>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                <input class="form-control" id="number2" type="number" name="number2" class="numbers" step="any" placeholder="Second number">
            </div>
        </div>
        <input  class="submit_form" type="submit" name="submit" value="Result">
    </form>
</body>
</html>