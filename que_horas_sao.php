<?php
    echo Date('Y-m-d h:i:s');

    $backgroundColors = [
        'orange',
        'yellow',
        'pink',
        'blue',
        'green',
        'brown',
        'black',
        'gray',
        'purple'
    ];

    $myRandomColorIs = $backgroundColors[rand(0,count($backgroundColors))];
?>

<body style="background-color: <?php echo $myRandomColorIs; ?>">
    <h1> Oi </h1>
</body>

<script>
    alert('<?php echo $myRandomColorIs; ?>');
</script>