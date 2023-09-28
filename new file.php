<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="POST">
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter number 2" required>
        <input type="submit" name="calculate" value="Calculate">
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
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
                if ($num2 == 0) {
                    echo "Division by zero is not allowed.";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "Invalid operator";
        }

        if (isset($result)) {
            echo "<p>Result: $result</p>";
        }
    }
    ?>
</body>
</html>



