<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Javascript Functions</title>
</head>

<body>

    <h1>Introduction to Functions in javascript</h1>
    <hr>
    <h1 id="func"></h1>
    <p>this is a short note about myself</p>
    <p id="func2"></p>
    <script type="text/javascript">
        function myfunc(v1, v2) {
            return v1 * v2;
        }
        var number1 = 10;
        var number2 = 20;
        var res = myfunc(number1, number2);
        document.getElementById('func').innerHTML="our functions result is "+res;


        function sentence() {
            var name = "fahad bin munir is going to be programmer in future!";
            return name;
        }
        var abt_me = sentence();
        document.getElementById('func2').innerHTML="<h4>about fahad bin muniur</h4>"+abt_me;

    </script>

    <h1>a program to find a factorial number in Javascript</h1>

    <script type="text/javascript">

        function factorial(number) {
            var fact=1;
            for (var i = 1; i <= number; i++) {
                fact = fact * i;
            }
            document.write(fact);
        }
        factorial(5);


        function convertToCelsius(fahrenheit) {

            return (5/9) * (fahrenheit-32);
        }

        document.write("<h1> convert farenheit to celsiaus is </h1>"+convertToCelsius(80));




    </script>









</body>

</html>
