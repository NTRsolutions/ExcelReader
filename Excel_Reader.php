<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */


require_once 'dompdf/autoload.inc.php';
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
//$dompdf = new Dompdf();
//
//// Load content from html file
//$html = file_get_contents("SaveHtml.html");
//$dompdf->loadHtml($html);
//
//// (Optional) Setup the paper size and orientation
////$dompdf->setPaper('A4', 'portrait');
//$customPaper = array(0,0,660,1000);
////$dompdf->set_paper($customPaper);
//// Render the HTML as PDF
//$dompdf->render();
//
//// Output the generated PDF (1 = download and 0 = preview)
//$dompdf->stream("codexworld",array("Attachment"=>0));
//exit;
include('style.php');

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/London');

/** PHPExcel_IOFactory */
require_once dirname(__FILE__) . '/PHPExcel/IOFactory.php';

class MyReadFilter implements PHPExcel_Reader_IReadFilter
{
	public function readCell($column, $row, $worksheetName = '') {
		// Read title row and rows 20 - 30
		if ($row == 1 || ($row >= 20 && $row <= 30)) {
			return true;
		}

		return false;
	}
}

$filename = "xlsxFiles/comparsion_10-23-2017_short.xlsx";
//$filename = "xlsxFiles/comparsion_10-23-2017_main.xlsx";
$myfile = fopen("SaveHtml.html", "w") or die("Unable to open file!");

$type = PHPExcel_IOFactory::identify($filename);
$objReader = PHPExcel_IOFactory::createReader($type);
$objPHPExcel = $objReader->load($filename);
$mainArray = [];
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

	$myArray = $worksheet->toArray();
	$ExcelTile = $myArray[0];
	$totalArrCount =  count($worksheet->toArray());

	foreach(array_slice($myArray,1) as $key => $value)
	{

		if (isset($mainArray[$value[0]])) {
			array_push($mainArray[$value[0]],$value);
		}else{
			$mainArray[$value[0]] = [$value];
		}
	}
	break;
	//$worksheets[$worksheet->getTitle()] = $worksheet->toArray();
}

/** PHPExcel_Writer_Excel2007 */
include 'PHPExcel/Writer/Excel2007.php';
// Create new PHPExcel object
//echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();



$var_static = [
	'jan_2016_' => 0 ,
	'feb_2016_' => 0 ,
	'mar_2016_' => 0 ,
	'april_2016_' => 0 ,
	'may_2016_' => 0 ,
	'june_2016_' => 0 ,
	'july_2016_' => 0 ,
	'august_2016_' => 0 ,
	'sep_2016_' => 0,
	'oct_2016_' => 0 ,
	'nov_2016_' => 0 ,
	'dec_2016_' => 0,
	'jan_2017_' => 0 ,
	'feb_2017_' => 0 ,
	'mar_2017_' => 0 ,
	'april_2017_' => 0 ,
	'may_2017_' => 0 ,
	'june_2017_' => 0 ,
	'july_2017_' => 0 ,
	'august_2017_' => 0 ,
	'sep_2017_' => 0,
	'oct_2017_' => 0 ,
	'nov_2017_' => 0 ,
	'dec_2017_' => 0
];
$var_Year_Arr = [];
foreach($var_static as $key => $val)
{
	$var_Year_Arr[$key.'sumInvoiceSubtotal'] = $val;
	$var_Year_Arr[$key.'collectedBP'] = $val;
	$var_Year_Arr[$key.'collectedInvoice'] = $val;
	$var_Year_Arr[$key.'lotCount'] = $val;
	$var_Year_Arr[$key.'noBidLotCount'] = $val;
	$var_Year_Arr[$key.'sumInvoiceSubtotal'] = $val;
	$var_Year_Arr[$key.'salePercentage'] = $val;
}

$CellCount=1;
foreach($mainArray as $key => $value){

	if(is_array($value))
	{

		include('sumrize_data_loop.php');
		//include('xlsx_formate.php');
		include('html_formate.php');
		include('html_convert.php');



		$var_Year_Arr = [];
		foreach($var_static as $key => $val)
		{
			$var_Year_Arr[$key.'sumInvoiceSubtotal'] = $val;
			$var_Year_Arr[$key.'collectedBP'] = $val;
			$var_Year_Arr[$key.'collectedInvoice'] = $val;
			$var_Year_Arr[$key.'lotCount'] = $val;
			$var_Year_Arr[$key.'noBidLotCount'] = $val;
			$var_Year_Arr[$key.'sumInvoiceSubtotal'] = $val;
			$var_Year_Arr[$key.'salePercentage'] = $val;
		}
	}

}
fclose($myfile);
//Instanciation of inherited class
echo date('H:i:s') . " Write to Excel2007 format\n";
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
// Echo done
echo date('H:i:s') . " Done writing file.\r\n";

