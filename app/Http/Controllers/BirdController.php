<?php

namespace App\Http\Controllers;

use App\src\Service\saveService;
use Audubon\Entities\Bird;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use LaravelDoctrine\ORM\Facades\EntityManager;

class BirdController extends Controller
{
    public function audubonSociety(): view
    {
        /*return view('audubon-society', [
            'audubon-form' => EntityManager::getRepository(Bird::class)->findAll()
        ]);*/

        return view('audubon-society');
    }

    public function saveAudubonSociety(Request $request, saveService $saveService): view
    {
        //var_dump($request->input());
        $saveService->putDataIntoClasses($request->input());
        return view('redirect-after-submit');
    }

    public function displayAllSightings(): view
    {
        return view('display-all-sightings', [
            'allSightings' => EntityManager::getRepository(Bird::class)->findAll()
        ]);
    }
}