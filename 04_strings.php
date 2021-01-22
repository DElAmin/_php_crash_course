<?php

// Create simple string
$name = 'DElAmin';
$string = 'Hello '.$name;
$string2 = "Hello $name";
echo $string.'<br>';
echo $string2.'<br>';

// String concatenation

// String functions
$string = "     Hello        ";
echo strlen(ltrim($string)).'<br>';
echo str_word_count($string).'<br>';
echo strpos($string, 'e').'<br>';
echo substr($string, 2, 5).'<br>';
echo str_replace('e', 'a', $string).'<br>';
// Multiline text and line breaks

$longText = "
    Hello, my name is <b>DElAmin</b>
    I am 36,
    I love my name
";
echo $longText.'<br>';
echo nl2br($longText).'<br>';
echo htmlentities($longText).'<br>';
echo html_entity_decode('&lt;b&gt;Hi&lt;/b&gt;').'<br>';
// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php