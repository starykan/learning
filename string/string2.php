<?php

$text =
'<p>What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony. </p>
<p>Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components. </p>
<p>Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish. </p>
<p>Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible. </p>
<p>Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications. </p>';

$pc = substr_count($text,'. ');
$parc = substr_count($text,'<p>');
$wc = str_word_count($text);
$lc = strip_tags($text);
$lc1 = trim($lc);
echo 'predlozenia '.$pc.'</br>';
echo 'paragraph '.$parc.'</br>';
echo 'word '.$wc.'</br>';
echo ($lc);
