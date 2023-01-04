<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        $patient_id =1;
        $data = Record::where('patient_id','=',$patient_id)
                        ->get();
        $data = json_decode(json_encode ( $data ) , true);  
        //dd($data[0]['prescriptons']);
       
        $data = [
            'title' => $data[0]['prescriptons'],
            
        ];             
        
        $pdf = Pdf::loadView('pdf.myPDF', $data);

        return $pdf->download('NiceSnippets.pdf');
    }
}
