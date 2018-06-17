<!DOCTYPE html>
<html>
    <head>
        <title>Wisdom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="form-group">
                    <ul>
                        <li><a href="<?php echo $loader->config['site_url'].'?page=page1'?>">Page 1<a></li>
                        <li><a href="<?php echo $loader->config['site_url'].'?page=page2'?>">Page 2</a></li>
                        <li><a href="<?php echo $loader->config['site_url'].'?page=page3'?>">Page 3</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </body>
</html>
