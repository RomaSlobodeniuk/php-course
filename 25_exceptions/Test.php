<?php

require_once '../helpers/functions.php';

final class MyException extends Exception
{

}

final class OtherExc extends Exception
{

}

class Test
{
    public function execute()
    {
        try {
            try {
                throw new MyException('My Message!');
            } catch (MyException $e) {
                debug([
                    'Спрацював внутрішній catch, повідомлення:' => $e->getMessage(),
//                    'getTrace:' => $e->getTrace()
                ]);

                /**
                 * Повторний викид виключення
                 */
                throw $e;
            }
        } catch (\Exception $e) {
            debug([
                'Спрацював зовнішній catch, повідомлення:' => $e->getMessage(),
//                'getTraceAsString:' => $e->getTraceAsString()
            ]);

            throw new OtherExc('Other Exc class: ' . $e->getMessage());
        }
    }
}


try {
    $test = new Test();
    $test->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}