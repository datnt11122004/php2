<?php
if(is_array($data)):
//        var_dump($data);
    ?>



    <form action="index.php?url=update_catalog" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?=$data[0]['id']?>" readonly >
        <div class="form-group">
            <label for="ten-khoa-hoc">Tên khóa học</label>
            <input type="text" class="form-control" name="ten-danh-muc" value="<?=$data[0]["ten_danh_muc"]?>">
        </div>

        <input type="submit" value="Sửa danh mục" name="update">
    </form>


<?php endif;?>