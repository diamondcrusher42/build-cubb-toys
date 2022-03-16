<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// temporary
Route::post('/invest', function (Request $request) {
    $email = $request->input('email');
    $name = $request->input('name');

    Mail::send('emails.investment-instructions', [
        'name' => $name,
        'amount' => $request->input('amount'),
        'project' => Project::find($request->input('projectId'))
    ], function ($message) use ($email, $name) {
        $message->to($email, $name)
            ->bcc('halcer.co@gmail.com', 'Halcer')
            ->subject('Cubb Platform - pledge summary and instructions')
            ->attach(public_path('pdf/CUBB_platform_-_PDF_instructions.pdf'));
    });
});
