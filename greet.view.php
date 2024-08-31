<html data-theme='light'>
    <head>
        <title>Greetings</title>
        <link rel="stylesheet" href="/pico.min.css">
    </head>
    <body>
        <main class="container">
            <form method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">

                <input type="radio" name="fav_food" id="opt_noodles" value="Noodles">
                <label for="opt_noodles">Noodles</label>

                <input type="radio" name="fav_food" id="opt_pizza" value="Pizza">
                <label for="opt_pizza">Pizza</label>

                <input type="radio" name="fav_food" id="opt_panipuri" value="Panipuri">
                <label for="opt_panipuri">Pani Puri</label>

                <button type="submit">Submit</button>
            </form>
            <?php if (!empty($_POST)) : ?>
                <?php if ($_POST['fav_food'] == 'Noodles'): ?>
                    <h5><?php echo $Greet.' '.$_POST['name'] ?>.Your favorite food is Noodles.</h5>
                <?php elseif ($_POST['fav_food'] == 'Pizza'): ?>
                    <h5><?php echo $Greet.' '.$_POST['name'] ?>.Your favorite food is Pizza.</h5>
                <?php elseif ($_POST['fav_food'] == 'Panipuri'): ?>
                    <h5><?php echo $Greet.' '.$_POST['name'] ?>.Your favorite food is Pani Puri.</h5>
                <?php endif ?>
            <?php endif ?>
        </main>
    </body>
</html>