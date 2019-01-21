<?php

use TestExceptions\MyTestExceptions;
use TestExceptions\MyTestExceptions1;

spl_autoload_register(function ($class) {
    $file_name = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file does not exist!";
    }
});


//$var = 'MyTestExceptions';
$var = 'MyTestExceptions1';
//$var = 'MyTestExceptions2';

//try {
//    try {
//        echo '<br>try!!!<br>';
//        $i = 0;
//        $y = 13;
//        if ($var === 'MyTestExceptions') {
//            throw new MyTestExceptions('Ex11111', 666);
//        }
//        if ($var === 'MyTestExceptions1') {
//            throw new MyTestExceptions1('Ex22222', 777);
//        }
//        echo '<br>result!!!<br>';
//    } catch (MyTestExceptions $ex) {
//        echo "<br>11 ",get_class($ex), $ex, "<br>";
//            throw $ex;
//
//    } catch (MyTestExceptions1 $ex) {
//        echo "<br>22",get_class($ex), $ex, "<br>";
//        throw $ex;
//
//    } catch (\Exception $ex) {
//        echo "<br>3",get_class($ex), $ex, "<br>";
//        throw $ex;
//
//    } finally {
//        echo "<br>Finally!!!";
//    }
//}catch (\Exception $ee) {
//    echo "<br>@@@",get_class($ee), $ee, "<br>";
//
//    var_dump("2222".$ee);
//
//} finally {
//    echo "<br>Finally2!!!";
//}
//


    try {
        echo '<br>try!!!<br>';
        $i = 0;
        $y = 13;
        if ($var === 'MyTestExceptions') {
            throw new MyTestExceptions('Ex11111', 666);
        }
        if ($var === 'MyTestExceptions1') {
            throw new MyTestExceptions1('Ex22222', 777);
        }
        if ($var === 'MyTestExceptions2') {
            throw new \Exception('Ex33333', 888);
        }
        echo '<br>result!!!<br>';
    } catch (MyTestExceptions $ex) {
        echo "<br>11 ",get_class($ex), $ex, "<br>";
//        throw $ex;

    } catch (MyTestExceptions1 $ex) {
        echo "<br>22",get_class($ex), $ex, "<br>";
        throw $ex;

    } catch (\Exception $ex) {
        echo "<br>3",get_class($ex), $ex, "<br>";
//        throw $e      x;

    } finally {
        echo "<br>Finally!!!";
    }

