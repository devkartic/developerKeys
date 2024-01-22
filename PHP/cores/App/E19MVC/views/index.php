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
        Invoice ID: <?= htmlspecialchars($invoice['id'], ENT_QUOTES);?><br/>
        Invoice Amount: <?= htmlspecialchars($invoice['amount'], ENT_QUOTES);?><br/>
        User: <?= htmlspecialchars($invoice['full_name']);?><br/>
    <?php endif;?>
</div>

</body>
</html>