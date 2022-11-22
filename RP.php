<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

    <input type="text" id="p">
    <button onclick="RP()">Click Me</button>

    <script>
    function RP() {

        var randomstring = Math.random().toString(36).slice(-8);
        document.getElementById("p").value = randomstring;
        return;

    }
    </script>
</body>

</html>