<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

header("Content-type:application/pdf");
header("Content-Disposition:attachment;filename=yahya iraamane cv.pdf'");
readfile("yahya iraamane cv.pdf");


}


?>