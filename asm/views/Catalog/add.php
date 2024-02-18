

<form action="index.php?url=add" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="ten-khoa-hoc">Tên khóa học</label>
        <input type="text" class="form-control" name="ten-khoa-hoc" >
    </div>

    <div class="form-group">
        <label for="gia">Giá:</label>
        <input type="text" class="form-control" name="gia" >
    </div>

    <div class="form-group">
        <label for="anh">Hình ảnh</label>
        <input type="file" class="form-control" name="hinh-anh" >
    </div>

    <div class="form-group">
        <label for="id-danh-muc">Danh mục</label>
        <select name="id-danh-muc" id="" class="form-control">
            <option value="0">Danh mục khóa học</option>
            <?php foreach ($dataCatalog as $key => $value):?>
                <option value="<?=$value['id']?>"><?=$value['ten_danh_muc']?></option>
            <?php endforeach;?>
        </select>
    </div>


    <input type="submit" value="Thêm khóa học" name="add">
</form>


