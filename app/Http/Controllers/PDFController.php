<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // pastikan menggunakan alias 'PDF' atau use Barryvdh\DomPDF\Facade as PDF;
use App\Models\User; // Model user

class PDFController extends Controller
{
    

    public function generateCV()
    {
        // Ambil data user beserta relasinya
        $user = app('usernya');

        // dd($user);
                    

        // Load view untuk CV dan kirim data
        $pdf = PDF::loadView('livewire.template.T001.cv', compact('user'));

        // Optional: simpan PDF ke storage atau langsung download
        return $pdf->stream('CV_' . $user->name . '.pdf', ['Attachment' => false]);
    }
}
