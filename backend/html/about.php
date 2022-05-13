<?php
require("./db/dbhelper.php");
$sql = 'select * from infoyou WHERE id = 1';
$infoYou = executeSingleResult($sql);
?>
<div id="main_admin">
    <div class="item_table">
        <hr>
        <table class="ad_about_show">  
            <tr>
                <th>Họ Và Tên</th>
                <th>Link Ảnh Avatar</th>
                <th>Ngành Nghề</th>
                <th>Gmail</th>
                <th>Gmail2</th>
            </tr>  
            <tr>
                <td><?=$infoYou['name']?></td>
                <td><?=$infoYou['imageInfo']?></td>
                <td><?=$infoYou['work']?></td>
                <td><?=$infoYou['gmail']?></td>
                <td><?=$infoYou['gmail2']?></td>
            </tr>
            <tr>
                <th>Sđt</th>
                <th>mm/dd/yy năm sinh</th>
                <th>Địa Chỉ</th>
                <th>Link Fb</th>
                <th>Twitch</th>
            </tr>  
            <tr>
                <td><?=$infoYou['phone']?></td>
                <td><?=$infoYou['birthday']?></td>
                <td><?=$infoYou['location']?></td>
                <td><?=$infoYou['facebook']?></td>
                <td><?=$infoYou['twitch']?></td>
            </tr>
            <tr>
                <th>Intagram</th>
                <th>Discord</th>
                <th>Github</th>
                <th>Thới Thiệu</th>
                <th>id</th>
            </tr>  
            <tr>
                <td><?=$infoYou['intagram']?></td>
                <td><?=$infoYou['discord']?></td>
                <td><?=$infoYou['github']?></td>
                <td><?=$infoYou['intro']?></td>
                <td><?=$infoYou['id']?></td>
            </tr>
        </table>
        <hr>
        <a href="./backend/about/aboutEdit.html?<?=$infoYou['id']?>" target="" class="btn btn-success" >Thay đổi</a>
        <hr>
    </div>
    

</div>
