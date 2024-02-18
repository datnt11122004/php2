<h1>Danh sách danh mục</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên danh mục khóa học</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $value):  extract($value)?>
    <tr>
        <td><?=$value[0]?></td>
        <td><?=$ten_danh_muc?></td>
        <td>
            <a href="index.php?url=update_catalog&id_catalog=<?=$id?>" class="btn btn-info">Sửa</a>
            <a href="index.php?url=delete_catalog&id_catalog=<?=$id?>" class="btn btn-danger">Xóa</a>
        </td>
        <?php endforeach; ?>
    </tr>
    </tbody>
</table>
<a href="index.php?url=add_catalog" class="btn btn-primary">Thêm</a>
<a href="index.php" class="btn btn-info">Danh sách khóa học</a>

