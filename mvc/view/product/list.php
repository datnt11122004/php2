<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List product</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach ($data as $value): extract($value)?>
            <tr>
                <td><?=$id?></td>
                <td><?=$name?></td>
                <td><?=$price?></td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
</body>
</html>