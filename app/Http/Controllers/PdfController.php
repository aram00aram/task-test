<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class PdfController extends Controller
{
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = User::nestable(\auth()->user()->children()->get());

        // share data to view
        view()->share('childrens',$data);
        $pdf = PDF::loadView('dashboard.pdf', $data);

        // download PDF file with download method
        return $pdf->download('pdf_tree_users.pdf');
    }
}
