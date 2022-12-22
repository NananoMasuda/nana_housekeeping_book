<!DOCTYPE html>
<html lang="en-US">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->css('calender');
        // echo $this->Html->script("https://code.jquery.com/jquery-3.5.1.min.js");
        // echo $this->Html->script('sample.js');
    ?>
</head>
<body>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>