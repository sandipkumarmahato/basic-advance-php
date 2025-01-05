<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Division by zero';
                }
                break;
            default:
                $result = 'Invalid operation';
        }
    } else {
        $result = 'Error: Please enter valid numbers';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .calculator h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .calculator input, .calculator select, .calculator button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .calculator button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        .calculator button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 10px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="calculator">
    <h1>Mini Calculator</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <?php if (isset($result)): ?>
        <div class="result">Result: <?php echo htmlspecialchars($result); ?></div>
    <?php endif; ?>
</div>
</body>
</html>
