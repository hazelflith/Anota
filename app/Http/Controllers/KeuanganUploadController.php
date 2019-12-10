<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganUpload extends Controller
{

    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        
        //nama file
		echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
        
        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
        
        // real path
		echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
        
        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
 
      	// tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'upload';
 
        // upload file
		$file->move($upload,$file->getClientOriginalName());
	}
}
