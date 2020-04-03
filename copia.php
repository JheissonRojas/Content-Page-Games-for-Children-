<?
function rec_copy ($from_path, $to_path) { 
mkdir($to_path, 0777); 
$this_path = getcwd(); 
if (is_dir($from_path)) { 
chdir($from_path); 
$handle=opendir('.'); 
while (($file = readdir($handle))!==false) { 
if (($file != ".") && ($file != "..")) { 
if (is_dir($file)) { 

rec_copy ($from_path.$file."/", $to_path.$file."/"); 
chdir($from_path); 
} 
if (is_file($file)){ 
copy($from_path.$file, $to_path.$file); 
} 
} 
} 
closedir($handle); 
} 
}


?>