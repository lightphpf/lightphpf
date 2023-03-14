<!DOCTYPE html>
<html lang="en">
<head>
    <?php require $data['app_root'] . '/Views/partials/head.php' ?>
</head>
<body>
    <h1>Home Page</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate iusto saepe minima aliquid quae commodi ex molestias dolores perferendis, assumenda iure facilis sint? Voluptatem voluptate placeat soluta magnam, porro commodi autem. Modi, voluptate nesciunt. Repellat, aut cumque dolorum, debitis eligendi neque porro id voluptates quos error explicabo ut excepturi sint.</p>
    <h3>List Users</h3>
    <ul>
        <?php while ($row = array_shift($data['users'])): ?>
            <li><?php echo $row->id . ' ' . $row->username ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
