<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Graph;
use App\Graph2;
use App\Graph3;
use App\Graph4;

class UploadFileController extends Controller
{
	public function index()
	{
		// $g = count(glob(public_path() . '/uploads/' . '*1*'));
		$files = array();
		if (file_exists(public_path() . '/uploads/csv1.xlsx')) {
			$files['csv1'] = 'csv1.xlsx';
		} else {
			$files['csv1'] = '';
		}
		if (file_exists(public_path() . '/uploads/csv2.xlsx')) {
			$files['csv2'] = 'csv2.xlsx';
		} else {
			$files['csv2'] = '';
		}
		if (file_exists(public_path() . '/uploads/csv3.xlsx')) {
			$files['csv3'] = 'csv3.xlsx';
		} else {
			$files['csv3'] = '';
		}
		if (file_exists(public_path() . '/uploads/csv4.xlsx')) {
			$files['csv4'] = 'csv4.xlsx';
		} else {
			$files['csv4'] = '';
		}
		return view('admin.upload.uploadfile', compact('files'));
	}

	public function UploadFile(Request $request)
	{
		$file = "";
		if ($request->file('csv1')) {
			$file =  $request->file('csv1');
			$name = 'csv1';
		} else if ($request->file('csv2')) {
			$file =  $request->file('csv2');
			$name = 'csv2';
		} else if ($request->file('csv3')) {
			$file =  $request->file('csv3');
			$name = 'csv3';
		} else if ($request->file('csv4')) {
			$file =  $request->file('csv4');
			$name = 'csv4';
		}
		$path = $file->path();
		$allowedfileExtension = ["xls", "xlsx", "xlm", "xla", "xlc", "xlt", "xlw"];
		$filename = $name;
		$destinationPath = 'uploads';
		$extension = $file->getClientOriginalExtension();
		$check = in_array($extension, $allowedfileExtension);
		if ($check) {
			$data = Excel::load($path)->get();
			$file->move($destinationPath, $filename . "." . $extension);
			if ($data->count()) {
				foreach ($data as $key => $value) {
					$csv_data = [
						'date' => date('Y-m-d', strtotime($value->date)), 'equity' => $value->equity, 'time' => date('H:i:s', strtotime($value->time))
					];
					if ($request->file('csv1')) {
						Graph::updateOrCreate(['date' =>  date('Y-m-d', strtotime($value->date))], $csv_data);
					} else if ($request->file('csv2')) {
						Graph2::updateOrCreate(['date' =>  date('Y-m-d', strtotime($value->date))], $csv_data);
					} else if ($request->file('csv3')) {
						Graph3::updateOrCreate(['date' =>  date('Y-m-d', strtotime($value->date))], $csv_data);
					} else if ($request->file('csv4')) {
						Graph4::updateOrCreate(['date' =>  date('Y-m-d', strtotime($value->date))], $csv_data);
					}
				}
			}

			return  redirect()->back()->with('success_single_' . $name, 'File Uploaded Successfully');
		} else {
			return  redirect()->back()->with('errors_single_' . $name, 'Sorry only xls files');
		}
	}

	public function UploadMultipleFile(Request $request)
	{
		if ($request->hasFile('csv2')) {
			$allowedfileExtension = ["xls", "xlsx", "xlm", "xla", "xlc", "xlt", "xlw"];
			$files = $request->file('csv2');
			$destinationPath = 'uploads';
			if (count($files) != 2) {
				return  redirect('admin/uploadfile')->with('errors_multiple', 'Please Select 2 Files');
			}
			$i = 2;
			foreach ($files as $file) {
				$filename = "graph" . $i;
				$extension = $file->getClientOriginalExtension();
				$check = in_array($extension, $allowedfileExtension);
				if ($check) {
					$file->move($destinationPath, $filename . "." . $extension);
				} else {
					return  redirect('admin/uploadfile')->with('errors_multiple', 'Sorry only upload xls files');
				}
				$i++;
			}
			return  redirect('admin/uploadfile')->with('success_multiple', 'File Uploaded Successfully');
		}
	}
}
