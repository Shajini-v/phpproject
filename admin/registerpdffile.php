<?php

function generateRow(){
	require('connection.php');
		$contents = '';
		$res=$con->query("select * from `register`");
		
			while($row=$res->fetch_assoc())
			{
			$contents .= '
			<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
				<td>'.$row['phone_number'].'</td>
				<td>'.$row['password'].'</td>
				<td>'.$row['reg_email'].'</td>
				<td>'.$row['country'].'</td>
				<td>'.$row['state'].'</td>
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
         	<th>id</th>
			<th>first_name</th>
			<th>last_name</th>
			<th>phone_number</th>
			<th>passowrd</th>
			<th>reg_email</th>
         	<th>country</th>
         	<th>state</th>

				
           </tr>  
      ';  
   $content .= generateRow(); 
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('Report.pdf', 'I');

?>
















