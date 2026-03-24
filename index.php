<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Form semplice</title>
</head>
<body>

    <h2>Add Neuron</h2>

    <form action="actions/SendData.php" method="post">
        
        <label for="nome">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Threshold:</label><br>
        <input type="text" id="threshold" name="threshold" required><br><br>

        <button type="submit">Invia</button>

    </form>
    <h2>Add Synapsis</h2>

    <form action="actions/SendData.php" method="post">
        
        <label for="nome">Starting Neuron:</label><br>
        <input type="text" id="fromName" name="fromName" required><br><br>

        <label for="email">Ending Neuron:</label><br>
        <input type="text" id="toName" name="toName" required><br><br>

        <label for="email">Weight:</label><br>
        <input type="text" id="weight" name="weight" required><br><br>

        <button type="submit">Invia</button>

    </form>

</body>
</html>