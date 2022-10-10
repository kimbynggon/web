
<?php include $_SERVER["DOCUMENT_ROOT"] . "lib.php"; ?>
<?php

//','을 분기점으로 확장자명을 가져온다
$allowed_extensions = explode(',', $upload_ext);

$max_file_size = 5242880;
//'.' 을 분기점으로 파일명을 분리한다.
$ext1 = substr($file1['name'], strrpos($file1['name'], '.') + 1);
$ext2 = substr($file2['name'], strrpos($file2['name'], '.') + 1);
$ext3 = substr($file3['name'], strrpos($file3['name'], '.') + 1);
$ext4 = substr($file4['name'], strrpos($file4['name'], '.') + 1);


if ($file1['size'] >= $max_file_size) {

    echo "5MB 까지만 업로드 가능합니다.";

}
if ($file2['size'] >= $max_file_size) {

    echo "5MB 까지만 업로드 가능합니다.";

}
if ($file3['size'] >= $max_file_size) {

    echo "5MB 까지만 업로드 가능합니다.";

}
if ($file4['size'] >= $max_file_size) {

    echo "5MB 까지만 업로드 가능합니다.";

}
$path1 = md5(microtime()) . '.' . $ext1;
$path2 = md5(microtime()) . '.' . $ext2;
$path3 = md5(microtime()) . '.' . $ext3;
$path4 = md5(microtime()) . '.' . $ext4;

//var_dump( in_array($ext1,$allowed_extensions));

if (isset($_POST['setup']) && $_POST['setup'] == "update") {
    if (!in_array($ext1, $allowed_extensions)) {
        echo "<script>alert('업로드 할수없는 파일입니다.1')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {
        if (move_uploaded_file($file1['tmp_name'], $upload . $path1)) {
            $main_upload = $file1['name'];
            $main_file = $path1;
            $main_size = $file1['size'];
            $query = "update tbl_setting set se_main_file = '$main_upload',main_upload = '$main_file',se_main_file_size = '$main_size',log_date = '$log_date'";


            echo "<script>alert('업로드되었습니다.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
    }

    if (!in_array($ext2, $allowed_extensions)) {
        echo "<script>alert('업로드 할수없는 파일입니다.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {

        if (move_uploaded_file($file2['tmp_name'], $upload . $path2)) {
            $footer_upload = $file2['name'];
            $footer_file = $path2;
            $footer_size = $file2['size'];
            $query = "update tbl_setting set se_footer_file = '$footer_upload',footer_upload = '$footer_file',se_footer_file_size = '$footer_size',log_date = '$log_date'";


            echo "<script>alert('업로드되었습니다.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
    }


    if (!in_array($ext3, $allowed_extensions)) {
        echo "<script>alert('업로드 할수없는 파일입니다.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {
        if (move_uploaded_file($file3['tmp_name'], $upload . $path3)) {
            $sns_upload = $file3['name'];
            $sns_file = $path3;
            $sns_size = $file3['size'];
            $query = "update tbl_setting set se_sns_file = '$sns_upload',sns_upload = '$sns_file',se_sns_file_size = '$sns_size',log_date = '$log_date'";


            echo "<script>alert('업로드되었습니다.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
    }


    if (!in_array($ext4, $allowed_extensions)) {
        echo "<script>alert('업로드 할수없는 파일입니다.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {
        if (move_uploaded_file($file4['tmp_name'], $upload . $path4)) {
            $favicon_upload = $file4['name'];
            $favicon_file = $path4;
            $favicon_size = $file4['size'];
            $query = "update tbl_setting set se_favicon_file = '$favicon_upload',favicon_upload = '$favicon_file',se_favicon_file_size = '$favicon_size',log_date = '$log_date'";


            echo "<script>alert('업로드되었습니다.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
    }



    $mysqli->query($query);
}





?>
<td class="">
                        <input type="text" class="fileName" id="se_main_file" readonly="readonly" style="width:85%;" value="" name="main_upload">
                        <label for="uploadBtn" class="btn_file">찾아보기</label>
                        <input type="file" id="uploadBtn" class="upload-hidden" name="se_main_file">
                        <p><span class="item_guide">ㆍjpg, gif, png 파일의 이미지파일만 가능 (권장 사이즈 :  X  픽셀)</span></p>
                        <dl class="file_upimg_wrap">
                            <dt><img src="../../../data/setting/<?=$row['se_main_file']?>"/></dt>
                            <dd><?=$row['main_upload']?> &nbsp; <a href="#"><i class="xi-close-circle"></i></a>
                                <p>(<?=$row['se_main_file_size']?>kb) </p></dd>
                        </dl>
                    </td>