<!DOCTYPE html>
<html>
    <head>
        <title>Test input</title>
    </head>
    <body>
        <form method="get">
            <input type="text" id="input" name="input" />
            <input type="submit" value="Submit"/>
        </form>
    </body>
    <hr/>
    <?php if(isset($_GET['input'])) {
    echo "You entered:"; echo $_GET['input'];
    } ?>
</html>