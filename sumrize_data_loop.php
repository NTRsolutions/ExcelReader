<?php
foreach($value as $sameCompanykey => $sameCompanyValue)
{
	$affiliateID          = $sameCompanyValue[0];
	$Company              = $sameCompanyValue[1];
	$sumInvoiceSubtotal   = (float)$sameCompanyValue[3];//number_format((float)$sameCompanyValue[3] , 2, '.', '');
	$auctionCloseDateTime = $sameCompanyValue[2];
	$collectedBP          = (float)$sameCompanyValue[4];
	$noSaleSubTotal       = $sameCompanyValue[5];
	$noShowSubTotal       = $sameCompanyValue[6];
	$collectedInvoice     = (float)$sameCompanyValue[7];
	$lotCount             = (float)$sameCompanyValue[8];
	$noBidLotCount        = (float)$sameCompanyValue[9];
	$noSalePercentage     = $sameCompanyValue[10];
	$year = date('Y', strtotime($auctionCloseDateTime));
	$month = date('F', strtotime($auctionCloseDateTime));

//			echo $month.' ===> '.$year.'<br>';
//			echo 'affiliateID === '.$affiliateID.'</br>';
//			echo '$Company === '.$Company.'</br>';
//			echo '$sumInvoiceSubtotal === '.$sumInvoiceSubtotal.'</br>';
//			echo '$auctionCloseDateTime === '.$auctionCloseDateTime.'</br>';
//			echo '$collectedBP === '.$collectedBP.'</br>';
//			echo '$noSaleSubTotal === '.$noSaleSubTotal.'</br>';
//			echo '$noShowSubTotal === '.$noShowSubTotal.'</br>';
//			echo '$collectedInvoice === '.$collectedInvoice.'</br>';
//			echo '$lotCount === '.$lotCount.'</br>';
//			echo '$noBidLotCount === '.$noBidLotCount.'</br>';
//			echo '$noSalePercentage === '.$noSalePercentage.'</br>';
//			echo '$year === '.$year.'</br>';
//			echo '$month === '.$month.'</br>';

//			echo '<pre>';
//			print_r($sameCompanyValue);
//			echo '</pre>';
//			exit;

	if($year == 2017){
		switch($month){
			case 'January':
				$var_Year_Arr['jan_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['jan_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['jan_2017_collectedBP'] = 	$var_Year_Arr['jan_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['jan_2017_collectedInvoice'] = 	$var_Year_Arr['jan_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['jan_2017_noBidLotCount'] = 	$var_Year_Arr['jan_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['jan_2017_lotCount'] = 	$var_Year_Arr['jan_2017_lotCount'] + $lotCount;
				$var_Year_Arr['jan_2017_salePercentage'] = 	($var_Year_Arr['jan_2017_noBidLotCount']/$var_Year_Arr['jan_2017_lotCount']) * 100;

				break;
			case 'February':
				$var_Year_Arr['feb_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['feb_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['feb_2017_collectedBP'] = 	$var_Year_Arr['feb_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['feb_2017_collectedInvoice'] = 	$var_Year_Arr['feb_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['feb_2017_noBidLotCount'] = 	$var_Year_Arr['feb_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['feb_2017_lotCount'] = 	$var_Year_Arr['feb_2017_lotCount'] + $lotCount;
				$var_Year_Arr['feb_2017_salePercentage'] = 	($var_Year_Arr['feb_2017_noBidLotCount']/$var_Year_Arr['feb_2017_lotCount']) * 100;
				break;
			case 'March':
				$var_Year_Arr['mar_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['mar_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['mar_2017_collectedBP'] = 	$var_Year_Arr['mar_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['mar_2017_collectedInvoice'] = 	$var_Year_Arr['mar_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['mar_2017_noBidLotCount'] = 	$var_Year_Arr['mar_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['mar_2017_lotCount'] = 	$var_Year_Arr['mar_2017_lotCount'] + $lotCount;
				$var_Year_Arr['mar_2017_salePercentage'] = 	($var_Year_Arr['mar_2017_noBidLotCount']/$var_Year_Arr['mar_2017_lotCount']) * 100;
				break;
			case 'April':
				$var_Year_Arr['april_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['april_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['april_2017_collectedBP'] = 	$var_Year_Arr['april_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['april_2017_collectedInvoice'] = 	$var_Year_Arr['april_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['april_2017_noBidLotCount'] = 	$var_Year_Arr['april_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['april_2017_lotCount'] = 	$var_Year_Arr['april_2017_lotCount'] + $lotCount;
				$var_Year_Arr['april_2017_salePercentage'] = 	($var_Year_Arr['april_2017_noBidLotCount']/$var_Year_Arr['april_2017_lotCount']) * 100;
				break;
			case 'May':
				$var_Year_Arr['may_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['may_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['may_2017_collectedBP'] = 	$var_Year_Arr['may_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['may_2017_collectedInvoice'] = 	$var_Year_Arr['may_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['may_2017_noBidLotCount'] = 	$var_Year_Arr['may_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['may_2017_lotCount'] = 	$var_Year_Arr['may_2017_lotCount'] + $lotCount;
				$var_Year_Arr['may_2017_salePercentage'] = 	($var_Year_Arr['may_2017_noBidLotCount']/$var_Year_Arr['may_2017_lotCount']) * 100;
				break;
			case 'June':
				$var_Year_Arr['june_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['june_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['june_2017_collectedBP'] = 	$var_Year_Arr['june_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['june_2017_collectedInvoice'] = 	$var_Year_Arr['june_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['june_2017_noBidLotCount'] = 	$var_Year_Arr['june_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['june_2017_lotCount'] = 	$var_Year_Arr['june_2017_lotCount'] + $lotCount;
				$var_Year_Arr['june_2017_salePercentage'] = 	($var_Year_Arr['june_2017_noBidLotCount']/$var_Year_Arr['june_2017_lotCount']) * 100;
				break;
			case 'July':
				$var_Year_Arr['july_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['july_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['july_2017_collectedBP'] = 	$var_Year_Arr['july_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['july_2017_collectedInvoice'] = 	$var_Year_Arr['july_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['july_2017_noBidLotCount'] = 	$var_Year_Arr['july_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['july_2017_lotCount'] = 	$var_Year_Arr['july_2017_lotCount'] + $lotCount;
				$var_Year_Arr['july_2017_salePercentage'] = 	($var_Year_Arr['july_2017_noBidLotCount']/$var_Year_Arr['july_2017_lotCount']) * 100;
				break;
			case 'August':
				$var_Year_Arr['august_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['august_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['august_2017_collectedBP'] = 	$var_Year_Arr['august_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['august_2017_collectedInvoice'] = 	$var_Year_Arr['august_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['august_2017_noBidLotCount'] = 	$var_Year_Arr['august_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['august_2017_lotCount'] = 	$var_Year_Arr['august_2017_lotCount'] + $lotCount;
				$var_Year_Arr['august_2017_salePercentage'] = 	($var_Year_Arr['august_2017_noBidLotCount']/$var_Year_Arr['august_2017_lotCount']) * 100;
				break;
			case 'September':
				$var_Year_Arr['sep_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['sep_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['sep_2017_collectedBP'] = 	$var_Year_Arr['sep_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['sep_2017_collectedInvoice'] = 	$var_Year_Arr['sep_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['sep_2017_noBidLotCount'] = 	$var_Year_Arr['sep_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['sep_2017_lotCount'] = 	$var_Year_Arr['sep_2017_lotCount'] + $lotCount;
				$var_Year_Arr['sep_2017_salePercentage'] = 	($var_Year_Arr['sep_2017_noBidLotCount']/$var_Year_Arr['sep_2017_lotCount']) * 100;
				break;
			case 'October':
				$var_Year_Arr['oct_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['oct_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['oct_2017_collectedBP'] = 	$var_Year_Arr['oct_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['oct_2017_collectedInvoice'] = 	$var_Year_Arr['oct_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['oct_2017_noBidLotCount'] = 	$var_Year_Arr['oct_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['oct_2017_lotCount'] = 	$var_Year_Arr['oct_2017_lotCount'] + $lotCount;
				$var_Year_Arr['oct_2017_salePercentage'] = 	($var_Year_Arr['oct_2017_noBidLotCount']/$var_Year_Arr['oct_2017_lotCount']) * 100;
				break;
			case 'November':
				$var_Year_Arr['nov_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['nov_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['nov_2017_collectedBP'] = 	$var_Year_Arr['nov_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['nov_2017_collectedInvoice'] = 	$var_Year_Arr['nov_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['nov_2017_noBidLotCount'] = 	$var_Year_Arr['nov_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['nov_2017_lotCount'] = 	$var_Year_Arr['nov_2017_lotCount'] + $lotCount;
				$var_Year_Arr['nov_2017_salePercentage'] = 	($var_Year_Arr['nov_2017_noBidLotCount']/$var_Year_Arr['nov_2017_lotCount']) * 100;
				break;
			case 'December':
				$var_Year_Arr['dec_2017_sumInvoiceSubtotal'] = 	$var_Year_Arr['dec_2017_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['dec_2017_collectedBP'] = 	$var_Year_Arr['dec_2017_collectedBP'] + $collectedBP;
				$var_Year_Arr['dec_2017_collectedInvoice'] = 	$var_Year_Arr['dec_2017_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['dec_2017_noBidLotCount'] = 	$var_Year_Arr['dec_2017_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['dec_2017_lotCount'] = 	$var_Year_Arr['dec_2017_lotCount'] + $lotCount;
				$var_Year_Arr['dec_2017_salePercentage'] = 	($var_Year_Arr['dec_2017_noBidLotCount']/$var_Year_Arr['dec_2017_lotCount']) * 100;
				break;
		}
	}

	if($year == 2016){
		switch($month){
			case 'January':
				$var_Year_Arr['jan_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['jan_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['jan_2016_collectedBP'] = 	$var_Year_Arr['jan_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['jan_2016_collectedInvoice'] = 	$var_Year_Arr['jan_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['jan_2016_noBidLotCount'] = 	$var_Year_Arr['jan_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['jan_2016_lotCount'] = 	$var_Year_Arr['jan_2016_lotCount'] + $lotCount;
				$var_Year_Arr['jan_2016_salePercentage'] = 	($var_Year_Arr['jan_2016_noBidLotCount']/$var_Year_Arr['jan_2016_lotCount']) * 100;

				break;
			case 'February':
				$var_Year_Arr['feb_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['feb_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['feb_2016_collectedBP'] = 	$var_Year_Arr['feb_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['feb_2016_collectedInvoice'] = 	$var_Year_Arr['feb_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['feb_2016_noBidLotCount'] = 	$var_Year_Arr['feb_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['feb_2016_lotCount'] = 	$var_Year_Arr['feb_2016_lotCount'] + $lotCount;
				$var_Year_Arr['feb_2016_salePercentage'] = 	($var_Year_Arr['feb_2016_noBidLotCount']/$var_Year_Arr['feb_2016_lotCount']) * 100;
				break;
			case 'March':
				$var_Year_Arr['mar_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['mar_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['mar_2016_collectedBP'] = 	$var_Year_Arr['mar_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['mar_2016_collectedInvoice'] = 	$var_Year_Arr['mar_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['mar_2016_noBidLotCount'] = 	$var_Year_Arr['mar_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['mar_2016_lotCount'] = 	$var_Year_Arr['mar_2016_lotCount'] + $lotCount;
				$var_Year_Arr['mar_2016_salePercentage'] = 	($var_Year_Arr['mar_2016_noBidLotCount']/$var_Year_Arr['mar_2016_lotCount']) * 100;
				break;
			case 'April':
				$var_Year_Arr['april_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['april_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['april_2016_collectedBP'] = 	$var_Year_Arr['april_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['april_2016_collectedInvoice'] = 	$var_Year_Arr['april_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['april_2016_noBidLotCount'] = 	$var_Year_Arr['april_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['april_2016_lotCount'] = 	$var_Year_Arr['april_2016_lotCount'] + $lotCount;
				$var_Year_Arr['april_2016_salePercentage'] = 	($var_Year_Arr['april_2016_noBidLotCount']/$var_Year_Arr['april_2016_lotCount']) * 100;
				break;
			case 'May':
				$var_Year_Arr['may_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['may_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['may_2016_collectedBP'] = 	$var_Year_Arr['may_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['may_2016_collectedInvoice'] = 	$var_Year_Arr['may_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['may_2016_noBidLotCount'] = 	$var_Year_Arr['may_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['may_2016_lotCount'] = 	$var_Year_Arr['may_2016_lotCount'] + $lotCount;
				$var_Year_Arr['may_2016_salePercentage'] = 	($var_Year_Arr['may_2016_noBidLotCount']/$var_Year_Arr['may_2016_lotCount']) * 100;
				break;
			case 'June':
				$var_Year_Arr['june_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['june_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['june_2016_collectedBP'] = 	$var_Year_Arr['june_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['june_2016_collectedInvoice'] = 	$var_Year_Arr['june_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['june_2016_noBidLotCount'] = 	$var_Year_Arr['june_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['june_2016_lotCount'] = 	$var_Year_Arr['june_2016_lotCount'] + $lotCount;
				$var_Year_Arr['june_2016_salePercentage'] = 	($var_Year_Arr['june_2016_noBidLotCount']/$var_Year_Arr['june_2016_lotCount']) * 100;
				break;
			case 'July':
				$var_Year_Arr['july_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['july_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['july_2016_collectedBP'] = 	$var_Year_Arr['july_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['july_2016_collectedInvoice'] = 	$var_Year_Arr['july_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['july_2016_noBidLotCount'] = 	$var_Year_Arr['july_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['july_2016_lotCount'] = 	$var_Year_Arr['july_2016_lotCount'] + $lotCount;
				$var_Year_Arr['july_2016_salePercentage'] = 	($var_Year_Arr['july_2016_noBidLotCount']/$var_Year_Arr['july_2016_lotCount']) * 100;
				break;
			case 'August':
				$var_Year_Arr['august_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['august_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['august_2016_collectedBP'] = 	$var_Year_Arr['august_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['august_2016_collectedInvoice'] = 	$var_Year_Arr['august_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['august_2016_noBidLotCount'] = 	$var_Year_Arr['august_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['august_2016_lotCount'] = 	$var_Year_Arr['august_2016_lotCount'] + $lotCount;
				$var_Year_Arr['august_2016_salePercentage'] = 	($var_Year_Arr['august_2016_noBidLotCount']/$var_Year_Arr['august_2016_lotCount']) * 100;
				break;
			case 'September':
				$var_Year_Arr['sep_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['sep_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['sep_2016_collectedBP'] = 	$var_Year_Arr['sep_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['sep_2016_collectedInvoice'] = 	$var_Year_Arr['sep_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['sep_2016_noBidLotCount'] = 	$var_Year_Arr['sep_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['sep_2016_lotCount'] = 	$var_Year_Arr['sep_2016_lotCount'] + $lotCount;
				$var_Year_Arr['sep_2016_salePercentage'] = 	($var_Year_Arr['sep_2016_noBidLotCount']/$var_Year_Arr['sep_2016_lotCount']) * 100;
				break;
			case 'October':
				$var_Year_Arr['oct_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['oct_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['oct_2016_collectedBP'] = 	$var_Year_Arr['oct_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['oct_2016_collectedInvoice'] = 	$var_Year_Arr['oct_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['oct_2016_noBidLotCount'] = 	$var_Year_Arr['oct_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['oct_2016_lotCount'] = 	$var_Year_Arr['oct_2016_lotCount'] + $lotCount;
				$var_Year_Arr['oct_2016_salePercentage'] = 	($var_Year_Arr['oct_2016_noBidLotCount']/$var_Year_Arr['oct_2016_lotCount']) * 100;
				break;
			case 'November':
				$var_Year_Arr['nov_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['nov_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['nov_2016_collectedBP'] = 	$var_Year_Arr['nov_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['nov_2016_collectedInvoice'] = 	$var_Year_Arr['nov_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['nov_2016_noBidLotCount'] = 	$var_Year_Arr['nov_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['nov_2016_lotCount'] = 	$var_Year_Arr['nov_2016_lotCount'] + $lotCount;
				$var_Year_Arr['nov_2016_salePercentage'] = 	($var_Year_Arr['nov_2016_noBidLotCount']/$var_Year_Arr['nov_2016_lotCount']) * 100;
				break;
			case 'December':
				$var_Year_Arr['dec_2016_sumInvoiceSubtotal'] = 	$var_Year_Arr['dec_2016_sumInvoiceSubtotal'] + $sumInvoiceSubtotal;
				$var_Year_Arr['dec_2016_collectedBP'] = 	$var_Year_Arr['dec_2016_collectedBP'] + $collectedBP;
				$var_Year_Arr['dec_2016_collectedInvoice'] = 	$var_Year_Arr['dec_2016_collectedInvoice'] + $collectedInvoice;
				$var_Year_Arr['dec_2016_noBidLotCount'] = 	$var_Year_Arr['dec_2016_noBidLotCount'] + $noBidLotCount;
				$var_Year_Arr['dec_2016_lotCount'] = 	$var_Year_Arr['dec_2016_lotCount'] + $lotCount;
				$var_Year_Arr['dec_2016_salePercentage'] = 	($var_Year_Arr['dec_2016_noBidLotCount']/$var_Year_Arr['dec_2016_lotCount']) * 100;
				break;
		}
	}

}

$sumInvoiceSubtotal2016 = $var_Year_Arr['jan_2016_sumInvoiceSubtotal']+ $var_Year_Arr['feb_2016_sumInvoiceSubtotal']+
                          $var_Year_Arr['mar_2016_sumInvoiceSubtotal']+ $var_Year_Arr['april_2016_sumInvoiceSubtotal']+
                          $var_Year_Arr['may_2016_sumInvoiceSubtotal']+$var_Year_Arr['june_2016_sumInvoiceSubtotal']+
                          $var_Year_Arr['july_2016_sumInvoiceSubtotal']+ $var_Year_Arr['august_2016_sumInvoiceSubtotal']+
                          $var_Year_Arr['sep_2016_sumInvoiceSubtotal']+ $var_Year_Arr['oct_2016_sumInvoiceSubtotal']+
                          $var_Year_Arr['nov_2016_sumInvoiceSubtotal']+ $var_Year_Arr['dec_2016_sumInvoiceSubtotal'];
$sumInvoiceSubtotal2017 = $var_Year_Arr['jan_2017_sumInvoiceSubtotal']+ $var_Year_Arr['feb_2017_sumInvoiceSubtotal']+
                          $var_Year_Arr['mar_2017_sumInvoiceSubtotal']+ $var_Year_Arr['april_2017_sumInvoiceSubtotal']+
                          $var_Year_Arr['may_2017_sumInvoiceSubtotal']+$var_Year_Arr['june_2017_sumInvoiceSubtotal']+
                          $var_Year_Arr['july_2017_sumInvoiceSubtotal']+ $var_Year_Arr['august_2017_sumInvoiceSubtotal']+
                          $var_Year_Arr['sep_2017_sumInvoiceSubtotal']+ $var_Year_Arr['oct_2017_sumInvoiceSubtotal']+
                          $var_Year_Arr['nov_2017_sumInvoiceSubtotal']+ $var_Year_Arr['dec_2017_sumInvoiceSubtotal'];
$sum2016_collectedBP = $var_Year_Arr['jan_2016_collectedBP']+ $var_Year_Arr['feb_2016_collectedBP']+
                       $var_Year_Arr['mar_2016_collectedBP']+ $var_Year_Arr['april_2016_collectedBP']+
                       $var_Year_Arr['may_2016_collectedBP']+$var_Year_Arr['june_2016_collectedBP']+
                       $var_Year_Arr['july_2016_collectedBP']+ $var_Year_Arr['august_2016_collectedBP']+
                       $var_Year_Arr['sep_2016_collectedBP']+ $var_Year_Arr['oct_2016_collectedBP']+
                       $var_Year_Arr['nov_2016_collectedBP']+ $var_Year_Arr['dec_2016_collectedBP'];
$sum2017_collectedBP = $var_Year_Arr['jan_2017_collectedBP']+ $var_Year_Arr['feb_2017_collectedBP']+
                       $var_Year_Arr['mar_2017_collectedBP']+ $var_Year_Arr['april_2017_collectedBP']+
                       $var_Year_Arr['may_2017_collectedBP']+$var_Year_Arr['june_2017_collectedBP']+
                       $var_Year_Arr['july_2017_collectedBP']+ $var_Year_Arr['august_2017_collectedBP']+
                       $var_Year_Arr['sep_2017_collectedBP']+ $var_Year_Arr['oct_2017_collectedBP']+
                       $var_Year_Arr['nov_2017_collectedBP']+ $var_Year_Arr['dec_2017_collectedBP'];
$sum2016_collectedInvoice = $var_Year_Arr['jan_2016_collectedInvoice']+ $var_Year_Arr['feb_2016_collectedInvoice']+
                            $var_Year_Arr['mar_2016_collectedInvoice']+ $var_Year_Arr['april_2016_collectedInvoice']+
                            $var_Year_Arr['may_2016_collectedInvoice']+$var_Year_Arr['june_2016_collectedInvoice']+
                            $var_Year_Arr['july_2016_collectedInvoice']+ $var_Year_Arr['august_2016_collectedInvoice']+
                            $var_Year_Arr['sep_2016_collectedInvoice']+ $var_Year_Arr['oct_2016_collectedInvoice']+
                            $var_Year_Arr['nov_2016_collectedInvoice']+ $var_Year_Arr['dec_2016_collectedInvoice'];
$sum2017_collectedInvoice = $var_Year_Arr['jan_2017_collectedInvoice']+ $var_Year_Arr['feb_2017_collectedInvoice']+
                            $var_Year_Arr['mar_2017_collectedInvoice']+ $var_Year_Arr['april_2017_collectedInvoice']+
                            $var_Year_Arr['may_2017_collectedInvoice']+$var_Year_Arr['june_2017_collectedInvoice']+
                            $var_Year_Arr['july_2017_collectedInvoice']+ $var_Year_Arr['august_2017_collectedInvoice']+
                            $var_Year_Arr['sep_2017_collectedInvoice']+ $var_Year_Arr['oct_2017_collectedInvoice']+
                            $var_Year_Arr['nov_2017_collectedInvoice']+ $var_Year_Arr['dec_2017_collectedInvoice'];

