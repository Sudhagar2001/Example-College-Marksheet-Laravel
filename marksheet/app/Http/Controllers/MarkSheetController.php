<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Dompdf\Dompdf;
use Dompdf\Options;

use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class MarkSheetController extends Controller
{
    public function generatePDF($id)
    {
        // Fetch the student data based on the ID
        $student = Student::findOrFail($id);
    
        // Fetch the marks data for the student
        $marks = $student->marks; // Assuming marks are related to students in your database
    
        // Create a new Dompdf instance
        $dompdf = new Dompdf();
    
        // Load the HTML view
        $html = View::make('mark_sheet', compact('student', 'marks'))->render();
    
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
    
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the HTML as PDF
        $dompdf->render();
    
        // Output the generated PDF (inline or download)
        return $dompdf->stream('mark_sheet_' . $student->id . '.pdf');
    }
    
}
