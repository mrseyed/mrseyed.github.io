<?php
header('Content-Type: text/html; charset=utf-8');

// گرفتن داده‌های فرم
$fname   = $_POST['fname']     ?? '';
$lname  = $_POST['lname']     ?? '';
$faname = $_POST['faname']    ?? '';
$bdate  = $_POST['bdate']     ?? '';
$idnum  = $_POST['idnum']     ?? '';
$shenas = $_POST['shenas']    ?? '';
$gen    = $_POST['geneder']   ?? '';
$sarbazi= $_POST['khedmat']   ?? '';
$mrg    = $_POST['mrg']       ?? '';

// ساختن شیء XML
$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = true;

// ریشه
$root = $xml->createElement('person');
$xml->appendChild($root);

// افزودن عناصر
$root->appendChild($xml->createElement('fname', htmlspecialchars($fname, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('lname', htmlspecialchars($lname, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('faname', htmlspecialchars($faname, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('bdate', htmlspecialchars($bdate, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('idnum', htmlspecialchars($idnum, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('shenas', htmlspecialchars($shenas, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('gender', htmlspecialchars($gen, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('khedmat', htmlspecialchars($sarbazi, ENT_XML1, 'UTF-8')));
$root->appendChild($xml->createElement('mrg', htmlspecialchars($mrg, ENT_XML1, 'UTF-8')));

// ذخیره در فایل
$xml->save('form-data.xml');

echo "اطلاعات با موفقیت ذخیره شد!";
?>