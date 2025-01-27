<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('map');
});
Route::get('/map', function () {
    return view('map');
})->name('map');

Route::post('/save-coordinates', function (\Illuminate\Http\Request $request) {
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');

    // Save to the database or process as needed
    // Example:
    // DB::table('locations')->insert([
    //     'latitude' => $latitude,
    //     'longitude' => $longitude,
    // ]);

    return redirect()->route('show.map')->with('success', 'Coordinates saved successfully!');
})->name('coordinates');