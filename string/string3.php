<?php

$text =
'<p>What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony. </p>
<p>Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components. </p>
<p>Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish. </p>
<p>Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible. </p>
<p>Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications. </p>';

$text = strip_tags($text);
$text1 = str_replace(',',' ', $text);
$text2 = str_replace('.',' ', $text1);
$arr = explode(" ", $text2);
$max = $arr[0];
for ($i=0; $i<count($arr); $i++) {
    if(strlen($arr[$i]) > strlen($max)){
        $max = $arr[$i];
    }
}
echo $max;