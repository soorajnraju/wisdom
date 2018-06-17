<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include HOME . 'html/header.php'; ?>
    </head>
    <body>
        <div class="register">
            <form method="post">
                <div class="form-group">
                    <?php if (isset($name)) echo "<h3>Hello " . $name . "</h3>"; ?>
                    <h2>Wisdom Framework</h2>
                </div>
                <div class="form-group">
                    <input type="hidden" name="action" value="hello">
                </div>
                <div class="form-group">
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit" name="submit">
                </div>
            </form>
        </div>
    </body>
</html>
