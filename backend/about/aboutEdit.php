<?php 
require("../html/header.php"); 
require("../../db/dbhelper.php"); 

// $sql = "select * from infoyou WHERE id = 1";
// $info = executeSingleResult($sql);

?>
            <form action="" method="get" class="formAbout">
                <div>
                    <label>id</label>
                    <input type="text" name="id" class="form-control" value="<?=$info['id']?>">
                </div>
                <div>
                    <label>họ và tên</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div>
                    <label>ảnh avatar</label>
                    <input type="text" name="imageInfo" class="form-control">
                </div>
                <div>
                    <label>công việc</label>
                    <input type="text" name="work" class="form-control">
                </div>
                <div>
                    <label>gmail</label>
                    <input type="text" name="gmail" class="form-control">
                </div>
                <div>
                    <label>gmail 2</label>
                    <input type="text" name="gmail2" class="form-control">
                </div>
                <div>
                    <label>số điện thoại</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div>
                    <label>sinh nhật</label>
                    <input type="text" name="birthday" class="form-control">
                </div>
                <div>
                    <label>địa chỉ</label>
                    <input type="text" name="location" class="form-control">
                </div>
                <div>
                    <label>facebook</label>
                    <input type="text" name="facebook" class="form-control">
                </div>
                <div>
                    <label>twitch</label>
                    <input type="text" name="twitch" class="form-control">
                </div>
                <div>
                    <label>instagram</label>
                    <input type="text" name="intagram" class="form-control">
                </div>
                <div>
                    <label>discord</label>
                    <input type="text" name="discord" class="form-control">
                </div>
                <div>
                    <label>github</label>
                    <input type="text" name="github" class="form-control">
                </div>
                <div>
                    <label>giới thiệu bản thân</label>
                    <textarea class="form-control ip-textarea" name="intro"></textarea>
                </div>
                <div>
                    <a href="../../backend.php" class="btn btn-danger">Hủy</a>
                    <input type="submit" class="btn btn-success" value="Lưu Thay Đổi">
                </div>
            </form>

<?php require("../html/footer.php"); ?>
