<?php
    //Menggunakan PHPUnit
    use PHPUnit\Framework\TestCase;

    //membutuhkan wordcount.php
    require_once "wordcount.php";
    class Simpletest extends TestCase {
        public function testcountword (){
            // Menggunakan Class yang akan di test / mendeklarasi class
            $wc = new wordcount();

            //Masukkan kata kata 
            $TestSentence = "Dania Angga Barry Lana";
            $Wordcount = $wc ->countword($TestSentence);
            
            $this -> assertEquals(4, $Wordcount);
        }
    }
?>