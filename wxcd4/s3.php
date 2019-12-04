<?php
$source = $_POST['srcpath'];
$destdir = $_POST['destdir'];


$arr = [];
for($i=0;$i<count($_POST['links']);$i++){
    $arr[$i]=array_column($_POST,$i);
    // var_dump($arr[$i][0]);
 }
 

function copydir($source, $dest)
{
    if (!file_exists($dest)) mkdir($dest);
    $handle = opendir($source);
    while (($item = readdir($handle)) !== false) {
        if ($item == '.' || $item == '..') continue;
        $_source = $source . '/' . $item;
        $_dest = $dest . '/' . $item;
        if (is_file($_source)) copy($_source, $_dest);
        if (is_dir($_source)) copydir($_source, $_dest);
    }
    closedir($handle);
}

for($i=0;$i<count($_POST['links']);$i++){
    $rand = rand();
    copydir($source,$destdir.'/'.$rand);

$state = rename($destdir.'/'.$rand,$destdir.'/'.$arr[$i][0]); // 将folder文件夹重命名为folder2文件夹
if($state)
{  echo '重命名目录<span style="color:blue;">'.$destdir.'</span><span style="color:green">/'.$arr[$i][0].'</span>成功！<br>';}
else{  echo '重命名目录<span style="color:blue;">'.$destdir.'</span><span style="color:red">/'.$arr[$i][0].'</span>失败！<br>';}

 }



