<!DOCTYPE html>
<html>
<head>
    <title>Corrida</title>
</head>
<body>
    <form action="response.php" method="post">
        <label for="numVoltas">Número de voltas:</label>
        <input type="number" id="numVoltas" name="numVoltas" required><br><br>
        <div id="voltas">
            <!-- Campos de tempo das voltas serão inseridos aqui pelo JavaScript -->
        </div>
        <input type="submit" value="Enviar">
    </form>

    <script>
        document.getElementById('numVoltas').addEventListener('change', function() {
            var numVoltas = this.value;
            var voltasDiv = document.getElementById('voltas');
            voltasDiv.innerHTML = '';
            for (var i = 1; i <= numVoltas; i++) {
                voltasDiv.innerHTML += '<label for="volta' + i + '">Tempo da volta ' + i + ':</label>';
                voltasDiv.innerHTML += '<input type="number" step="0.01" id="volta' + i + '" name="voltas[]" required><br><br>';
            }
        });
    </script>
</body>
</html>