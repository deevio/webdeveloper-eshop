<?php
require '../vendor/autoload.php';

use Classes\Kniha;
use PHPUnit\Framework\TestCase;

class KnihaTest extends TestCase
{
    public function testTitle() {

        $book = new Kniha();
        $book->setTitle('Kniha sdf');

        $bookName = $book->getFirstWordOfTitle();

        $this->assertEquals('Kniha', $bookName);
    }

}

?>