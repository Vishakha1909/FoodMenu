<?php
function get_rows() {
    $file=fopen("food.txt",'r',FILE_IGNORE_NEW_LINES);
    while($line = fgets($file)){//while we can still read the file
        $line=trim($line);//remove the line endings and extra white-spaces at start and end
        list($day,$starter,$main,$dessert) = explode('|',$line);//you get an array of 4 per line, first item is author, etc...
        echo "<tr><td>$day</td><td>$starter\n---\n$main\n---\n$dessert</td></tr>\n";//use the \n to clean up the source a code a bit to make it readable
    }
    return true;
}
get_rows();
?>