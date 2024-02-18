<h1>Danh sách sản phẩm</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên khóa học</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Tên danh mục</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $value):  extract($value)?>
    <tr>
        <td><?=$value[0]?></td>
        <td><?=$ten_khoa_hoc?></td>
        <td><img src="upload/<?=$hinh_anh?>" alt="" width="90px" height="90px"></td>
        <td><?=$gia?></td>
        <td><?=$ten_danh_muc?></td>
        <td>
            <a href="index.php?url=update_course&id_course=<?=$value[0]?>" class="btn btn-info">Sửa</a>
            <a href="index.php?url=delete_course&id_course=<?=$value[0]?>" class="btn btn-danger">Xóa</a>
        </td>
        <?php endforeach; ?>
    </tr>
    </tbody>
</table>
<a href="index.php?url=add" class="btn btn-primary">Thêm</a>
<a href="index.php?url=list_catalog" class="btn btn-info">Danh sách danh mục</a>
