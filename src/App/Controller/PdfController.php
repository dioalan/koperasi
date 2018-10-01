<?php

namespace App\Controller;

use Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;
use iio\libmergepdf\Merger;


class PdfController extends AppController
{
	public function mapRoute() {
		
		$this->map('/user/:id', 'projectPdf')->via('GET');
		
	}

	
	public function userPdf () {
		$dompdf = new Dompdf();
		$template = $this->app->theme->partial('pdf/print_member');
		$dompdf->setPaper('Legal', 'potrait');
		$dompdf->loadHtml($template);
		$dompdf->render();
		$dompdf->stream('new_member.pdf', array("Attachment" => false));
		exit;

	}
}