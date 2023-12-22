<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Random\RandomException;

trait StorageImageTrait
{
    /**
     * @throws RandomException
     */
    public function storageTraitUpload($request, $fieldName, $forlderName): ?array
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->$fieldName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = bin2hex(random_bytes(10)) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fieldName)->storeAs('public/' . $forlderName . '/' . auth()->id(), $fileNameHash);
            $dataUploadTrait = [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return  $dataUploadTrait;
        }
        return null;
    }

    /**
     * @throws RandomException
     */
    public function storageTraitUploadMulti($file, $forlderName)
    {
        $fileNameOrigin = $file->getClientOriginalName();
        $fileNameHash = bin2hex(random_bytes(10)) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/' . $forlderName . '/' . auth()->id(), $fileNameHash);

        $dataUploadTrait = [
            'file_name' => $fileNameOrigin,
            'file_path' => Storage::url($filePath)
        ];
        return  $dataUploadTrait;
    }
}
