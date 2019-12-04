<?php
function getSubDirs($dir) {
$subdirs = array();
if(!$dh = opendir($dir)) return $subdirs;
while ($f = readdir($dh)) {
if($f =='.' || $f =='..') continue;
$path = $dir.'/'.$f; //如果只要子目录名, path = $f;
if(is_dir($path)) {
$subdirs[] = str_replace('D:\WEB\zh.de3wa.com\czs60\/','',$path);
}
}
return $subdirs;
}
$arr = getSubDirs('D:\WEB\zh.de3wa.com\czs60\\');
$arr=array_filter ($arr);
rsort($arr); 
 
echo $arr[0];