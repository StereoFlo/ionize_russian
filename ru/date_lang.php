<?php
/*
|--------------------------------------------------------------------------
| Ionize Date Language file
|
| To use with the a date field through tags
| This format uses days and months translation like defined in this file, if the PHP date format code is used.
|
| Example of usage :
|  		$lang['dateformat_short'] = 'd m Y';	View call : <ion:date format="short" />		Output : 15 01 2011
| 		$lang['dateformat_medium'] = 'd M Y'; 	View call : <ion:date format="medium" />	Output : 15 jan 2011
|  		$lang['dateformat_long'] = 'l F d Y';	View call : <ion:date format="long" />		Output : saturday january 15 2011
|
| You can create your own format and call it in views :
| 		$lang['dateformat_complete'] = 'l F d Y H:i:s';		View call : <ion:date format="complete" />		Output : saturday january 15 2011 20:54:21
|
|--------------------------------------------------------------------------
*/

$lang['dateformat_short'] = 'm d Y';
$lang['dateformat_medium'] = 'M d Y';
$lang['dateformat_long'] = 'F d Y';

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';

/*
|--------------------------------------------------------------------------
| PHP day date format 'D' translations
| Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
| Ex : <articles:date format="D" manip="ucase" />
|--------------------------------------------------------------------------
*/
$lang['mon'] = '��';
$lang['tue'] = '��';
$lang['wed'] = '��';
$lang['thu'] = '��';
$lang['fri'] = '��';
$lang['sat'] = '��';
$lang['sun'] = '��';

/*
|--------------------------------------------------------------------------
| PHP day date format 'l' translations
|--------------------------------------------------------------------------
*/
$lang['monday'] = '�����������';
$lang['tuesday'] = '�������';
$lang['wednesday'] = '�����';
$lang['thursday'] = '�������';
$lang['friday'] = '�������';
$lang['saturday'] = '�������';
$lang['sunday'] = '�����������';

/*
|--------------------------------------------------------------------------
| PHP month date format 'M' translations
|--------------------------------------------------------------------------
*/
$lang['jan'] = '���';
$lang['feb'] = '���';
$lang['mar'] = '���';
$lang['apr'] = '���';
$lang['may'] = '���';
$lang['jun'] = '���';
$lang['jul'] = '���';
$lang['aug'] = '���';
$lang['sep'] = '���';
$lang['oct'] = '���';
$lang['nov'] = '���';
$lang['dec'] = '���';

/*
|--------------------------------------------------------------------------
| PHP month date format 'F' translations
|--------------------------------------------------------------------------
*/
$lang['january'] = '������';
$lang['february'] = '�������';
$lang['march'] = '����';
$lang['april'] = '������';
$lang['may'] = '���';
$lang['june'] = '����';
$lang['july'] = '����';
$lang['august'] = '������';
$lang['september'] = '��������';
$lang['october'] = '�������';
$lang['november'] = '������';
$lang['december'] = '�������';

