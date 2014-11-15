<?php
/**
 * Include library, should be autoloaded
 */
include 'PDFMerge.php';

/**
 * Create new merger instance
 */
$merger = new PDFMerge;

/**
 * Put files IN
 */
$merger
    ->addPDF('path/to/file.pdf')
    ->addPDF('path/to/second/file.pdf')
   ->merge('file', 'path/to/output/directory/file.pdf');
