<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use PDF;

class PageController extends Controller
{
    public function downloadPDF()
    {
        $customer=Customer::all();
        $pdf = PDF::loadView('pdfview',compact('customer'));
        return $pdf->download('pdfview.pdf');
    }
    public function view()
    {
        $customer=Customer::all();
        return view('pdfview')->with('customer',$customer);
    }
    
}
