<?php
echo "<h3>Create and Write to a File</h3>";

// Create and write to note.txt
$file = fopen("note.txt", "w");   
fwrite($file, "This is line one.\n");
fwrite($file, "This is line two.\n");
fclose($file);

echo "File created and written successfully.<br><br>";

// Read from a file
echo "<h3> Read Entire File</h3>";
$file = fopen("note.txt", "r");
$content = fread($file, filesize("note.txt"));
echo nl2br($content);
fclose($file);

echo "<br>";

// Read line by line
echo "<h3> Read File Line by Line</h3>";
$file = fopen("note.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

echo "<br>";

// Append to file
echo "<h3> Append to File</h3>";
$file = fopen("note.txt", "a");
fwrite($file, "Appended via PHP tutorial.\n");
fclose($file);

echo "Text appended successfully.<br><br>";

// Show updated content
echo "<b>Updated File Content:</b><br>";
$file = fopen("note.txt", "r");
echo nl2br(fread($file, filesize("note.txt")));
fclose($file);
?>
