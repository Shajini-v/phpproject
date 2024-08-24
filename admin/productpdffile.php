<?php

function generateRow(){
	require('connection.php');
		$contents = '';
		$res=$con->query("select * from `product`");
		
			while($row=$res->fetch_assoc())
			{
			$file=$row['image'];	
			$contents .= '
			<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['name'].'</td>
                <td>'.$row['size'].'</td>
				<td>'.$row['amount'].'</td>
				<td>'.$row['offer'].'</td>
				<td>'.$row['category'].'</td>
				<td>'.$row['image'].'</td>
				<td><img src="imageproduct/'.$file.'" width="50" height="50"></td>		
			</tr>
			';
			// ..............c name from category table.
		}

		
		return $contents;
	}
		

	
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
      
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	

      		
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
         	<th>S.NO</th>
			<th>ID</th>
			<th>CATEGORY_NAME</th>
			<th>CATEGORY_PASSWORD</th>
			<th>CATEGORY_EMAIL</th>
			<th>CATEGORY_IMAGE</th>			
           </tr>  
      ';  
   $content .= generateRow(); 
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('Report.pdf', 'I');

?>
















