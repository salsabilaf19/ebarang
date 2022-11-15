<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class FileUploaderHelper
{
  public function store(Request $req, $path = 'uploads', $input = 'file')
  {
    if ($req->file()) {
      $fileName = time() . '_' . $req->file->getClientOriginalName();
      $filePath = $req->file($input)->storeAs($path, $fileName, 'public');

      $public_path = '/storage/' . $filePath;

      return [
        'name' => $fileName,
        'path' => $filePath,
        'public_path' => $public_path
      ];
    }
  }
}
