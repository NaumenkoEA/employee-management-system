<?php

namespace App\Http\Controllers;

use App\Models\EmployeePhoto;
use Illuminate\Http\Request;

class EmployeePhotoController extends Controller
{
    public function show($id)
    {
        $photo = EmployeePhoto::where('employee_id', $id)->firstOrFail();
        return response()->download(storage_path('app/' . $photo->photo_path));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('employee_photos');

        $photo = EmployeePhoto::create([
            'employee_id' => $id,
            'photo_path' => $photoPath,
        ]);

        return response()->json($photo, 201);
    }
}
