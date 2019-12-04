<?php
$source = $_GET['srcpath'];
$destdir = $_GET['destdir'];
$seed = time();
echo $seed;

$newfilename = $_GET['newfilename'];
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

copydir($source,$destdir.'/'.$seed);

$state = rename($destdir.'/'.$seed,$destdir.'/'.$newfilename); // 将folder文件夹重命名为folder2文件夹
if($state)
{  echo '重命名目录<span style="color:blue;">'.$destdir.'</span><span style="color:green">/'.$newfilename.'</span>成功！';}
else{  echo '重命名目录失败！';}