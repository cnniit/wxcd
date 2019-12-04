<?php
$source = $_POST['srcpath'];
$destdir = $_POST['destdir'];

$fromindex = $_POST['fromindex'];
$toindex = $_POST['toindex'];
$arr = [];
for($i=$fromindex;$i<$toindex+1;$i++){
    $arr[$i]=$i;
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

for($i=$fromindex;$i<$toindex+1;$i++){
    $rand = rand();
    copydir($source,$destdir.'/'.$rand);

$state = rename($destdir.'/'.$rand,$destdir.'/'.$arr[$i]); // 将folder文件夹重命名为folder2文件夹
if($state)
{  echo '重命名目录<span style="color:blue;">'.$destdir.'</span><span style="color:green">/'.$arr[$i].'</span>成功！<br>';}
else{  echo '重命名目录<span style="color:blue;">'.$destdir.'</span><span style="color:red">/'.$arr[$i].'</span>失败！<br>';}

 }



