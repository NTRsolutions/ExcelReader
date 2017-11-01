<?php

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->mergeCells('A'.$CellCount.':I'.$CellCount);

$objPHPExcel->getActiveSheet()->setCellValue('A'.$CellCount,$Company);
$objPHPExcel->getActiveSheet()
            ->getStyle('A'.$CellCount.':I'.$CellCount)
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()
            ->setARGB('FF808080');

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Month');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, 'SumInvoice Subtotal (2016)');
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, 'SumInvoice Subtotal (2017)');
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, 'Collected BP (2016)');
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, 'Collected BP (2017)');
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, 'Collected Invoice (2016)');
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, 'Collected Invoice (2017)');
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, 'No Sale Percentage (2016)');
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, 'No Sale Percentage (2017)');

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Jan');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['jan_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['jan_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['jan_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['jan_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['jan_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['jan_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['jan_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['jan_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Feb');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['feb_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['feb_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['feb_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['feb_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['feb_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['feb_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['feb_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['feb_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Mar');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['mar_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['mar_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['mar_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['mar_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['mar_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['mar_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['mar_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['mar_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Apr');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['april_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['april_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['april_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['april_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['april_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['april_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['april_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['april_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'May');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['may_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['may_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['may_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['may_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['may_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['may_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['may_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['may_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Jun');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['june_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['june_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['june_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['june_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['june_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['june_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['june_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['june_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'July');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['july_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['july_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['july_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['july_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['july_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['july_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['july_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['july_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Aug');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['august_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['august_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['august_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['august_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['august_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['august_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['august_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['august_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Sept');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['sep_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['sep_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['sep_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['sep_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['sep_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['sep_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['sep_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['sep_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Oct');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['oct_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['oct_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['oct_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['oct_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['oct_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['oct_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['oct_2016_salePercentage']).'%');
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['oct_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Nov');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['nov_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['nov_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['nov_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['nov_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['nov_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['nov_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['nov_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['nov_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Dec');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $var_Year_Arr['dec_2016_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $var_Year_Arr['dec_2017_sumInvoiceSubtotal']);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $var_Year_Arr['dec_2016_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $var_Year_Arr['dec_2017_collectedBP']);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $var_Year_Arr['dec_2016_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $var_Year_Arr['dec_2017_collectedInvoice']);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, round($var_Year_Arr['dec_2016_salePercentage']).'%' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, round($var_Year_Arr['dec_2017_salePercentage']).'%' );

$CellCount++;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$CellCount, 'Sum Total');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$CellCount, $sumInvoiceSubtotal2016);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$CellCount, $sumInvoiceSubtotal2017);
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$CellCount, $sum2016_collectedBP);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$CellCount, $sum2017_collectedBP);
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$CellCount, $sum2016_collectedInvoice);
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$CellCount, $sum2017_collectedInvoice);
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$CellCount, '' );
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$CellCount, '' );
$CellCount++;
$objPHPExcel->getActiveSheet()->insertNewRowBefore($CellCount,3);

$objPHPExcel->getActiveSheet()->insertNewRowBefore($CellCount++,2);