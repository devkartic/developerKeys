<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h2>Home Page</h2>
<hr/>
<div>
    <?php if(!empty($invoice)):?>
        Invoice ID: <?= $invoice['id'];?><br/>
        Invoice Amount: <?= $invoice['amount'];?><br/>
        User: <?= $invoice['full_name'];?><br/>
    <?php endif;?>
</div>

</body>
</html>