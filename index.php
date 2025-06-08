<?php
    require_once 'src/functions.php';

    $finalAmount = 0;
    if (isset($_GET['amount'])) {
        $finalAmount = calculateVAT($_GET['amount']); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAT Calculation</title>
</head>
<body>
    <header>
        <h1>VAT Calculation</h1>
    </header>
    <main>
<?php if($finalAmount === 0) { ?>
        <section>
            <form action="index.php" method="GET">
                <label for="txtAmount">Amount</label>
                <input type="text" name="amount" id="txtAmount">
                <br>
                <input type="submit">
            </form>
        </section>
<?php } else { ?>
        <section>
            <p>
                The final amount including VAT is <?=$finalAmount ?> DKK.
                <br>
                <a href="index.php" alt="VAT Calculator">Back</a>
            </p>
        </section>
<?php } ?>            
    </main>
</body>
</html>