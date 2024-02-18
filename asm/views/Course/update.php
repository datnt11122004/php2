<?php
    if(is_array($data)):
//        var_dump($data);
?>



        <form action="index.php?url=update_course" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data[0]['id']?>" >
            <div class="form-group">
                <label for="ten-khoa-hoc">Tên khóa học</label>
                <input type="text" class="form-control" name="ten-khoa-hoc" value="<?=$data[0]["ten_khoa_hoc"]?>">
            </div>

            <div class="form-group">
                <label for="gia">Giá:</label>
                <input type="text" class="form-control" name="gia" value="<?=$data[0]['gia']?>">
            </div>

            <div class="form-group">
                <label for="anh">Hình ảnh</label>
                <input type="file" class="form-control" name="hinh-anh" >
                <img src="<?='upload/'.$data[0]['hinh_anh']?>" alt="Không có ảnh" width="90px" height="90px">
            </div>

            <div class="form-group">
                <label for="id-danh-muc">Danh mục</label>
                <select name="id-danh-muc" id="" class="form-control">
                    <option value="0">Danh mục khóa học</option>
                    <?php foreach ($dataCatalog as $key => $value):?>
                        <option value="<?=$value['id']?>" <?=$value['id'] == $data[0]['id_danh_muc'] ? 'selected' : '' ?>><?=$value['ten_danh_muc']?></option>
                    <?php endforeach;?>
                </select>
            </div>


            <input type="submit" value="Sửa khóa học" name="update">
        </form>


    <?php endif;?>