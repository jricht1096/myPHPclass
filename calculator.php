
        <?php
        include './includes/header.html'
        ?>

<h1> Simple PHP calculator</h1>
<br>
<form action="calculator.php" method="POST">
    Value1 <input type ="text" name="value1">
    <br><br>
    operation <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>
     Value2 <input type ="text" name="value2">
     <br><br>
     <input type ="submit" value = "Calculate "name="calculate">
     
</form>

        <?php
        include './includes/footer.html'
        ?>