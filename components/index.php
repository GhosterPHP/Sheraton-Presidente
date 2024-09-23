<?php
require_once "./middle/360.php";
echo "<style>.viewer {
    border: 1px solid #cccccc;
    border-radius: 20px;
    width: 800px;
    height: 800px;
    overflow: hidden;
}</style>";
echo render360Viewer('viewer1', '/src/images/30.jpg');
echo render360Viewer('viewer2', '/src/images/360.jpg');
?>