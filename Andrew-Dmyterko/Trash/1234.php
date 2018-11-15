<pre>
<?php

/**
 * Задание Поиск по файловой системе.
 * файлы массивы строки
 * есть начальная директория
 * пройтись по всем вложенным директориям
 * и найти все файлы с расширением txt
 * и вывести их с полными путями
 */

$dir = "/var/www/html/";
$to_search = 'tttt.php';

$dirFile = [];

$eee = chdir ($dir);

$absDir = getcwd();

echo $absDir;

$files1 = scandir($dir);
$files2 = scandir($dir, 1);
$upDir = 0;
$downDir = 1;

foreach ($files1 as $name) {

    if (($name == '.') || ($name == '..') || ($name=='.idea')) continue;

        $dirFile[] = [$upDir, $absDir."/", $name, is_dir($name) ? "d" : "f", is_dir($name) ? $downDir++ : "f"];




}


echo $dirFile[0][4];

echo "<br>";


foreach ($dirFile as $fileDir=> $massiv ) {

        echo $dirFile[$fileDir][0], "\t",
             $dirFile[$fileDir][1], "\t",
        str_pad($dirFile[$fileDir][2], 32),
             $dirFile[$fileDir][3], "\t",
        $dirFile[$fileDir][4];

    echo "<br>";
}


//foreach ($dirFile as $fileDir=> $massiv ) {
//
//    foreach ($massiv as $iner_key => $val) {
//
//        echo $dirFile[$fileDir][$iner_key], "\t";
//
//    }
//    echo "<br>";
//}


print_r ($dirFile);


//print_r($files1);
//print_r($files2);




//$absDir = getcwd();
//$dir    = './';
//
//
//echo __DIR__,"<br>";
//echo getcwd(),"<br>";
////opendir("/var/www/html/MyPHP/");
//$eee = chdir ("/var/www/html/MyPHP");
//echo $eee,"<br>";
//echo getcwd(),"<br>";
//$eee = chdir ("..");
//echo getcw650351
//d(),"<br>";
//echo __DIR__,"<br>";

?>

</pre>