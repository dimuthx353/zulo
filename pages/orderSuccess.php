<?php
if (isset($_GET['order_id'])) {
    $orderId = $_GET['order_id'];
}
?>

<html>
<head>
   <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>We received your purchase request;<br /> we'll be in touch shortly!</p>
        <p style="margin-top:10px ;">Your Order Id: <b><?php echo $orderId ?></b></p>

        <a style="padding: 5px;margin:30px 0px;display:inline-block; background-color: #4CAF50;color: white;text-decoration: none" href="../../zulo/index.php">Click Here to Return Home</a>
    </div>
    
</body>

</html>