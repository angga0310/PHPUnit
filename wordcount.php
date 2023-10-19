<?php
    class wordcount{

        //membuat fungsi untuk menampung kata
        public function countword ($sentence){

            //memecah kata dengan explode agar bisa dihitung
            return count(explode(" ", $sentence));
        }
    } 
?>