<?php

namespace App\Http\Controllers;
use App\Invoice;
use App\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.invoices.index', compact('invoices'));
    }

    public function show($orderNumber)
    {
        $invoices = Invoice::all();
        return view('admin.invoices.index', compact('invoices'));
    }  
}


