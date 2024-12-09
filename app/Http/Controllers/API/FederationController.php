<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FederationResource;
use App\Models\Federation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FederationController extends BaseController
{
    // Display a listing of the resource.
    public function index(): JsonResponse
    {
        $federations = Federation::all();

        return $this->sendResponse(FederationResource::collection($federations), 'Federations retrieved successfully.');
    }

    // Store a newly created resource in storage.
    public function store(Request $request): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'abbreviation' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $federation = Federation::create($input);

        return $this->sendResponse(new FederationResource($federation), 'Federation created successfully.');
    }

    // Display the specified resource.
    public function show($id): JsonResponse
    {
        $federation = Federation::find($id);

        if (is_null($federation)) {
            return $this->sendError('Federation not found.');
        }

        return $this->sendResponse(new FederationResource($federation), 'Federation retrieved successfully.');
    }

    // Update the specified resource in storage.
    public function update(Request $request, Federation $federation): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'abbreviation' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $federation->name = $input['name'];
        $federation->abbreviation = $input['abbreviation'];
        $federation->save();

        return $this->sendResponse(new FederationResource($federation), 'Federation updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Federation $federation): JsonResponse
    {
        $federation->delete();

        return $this->sendResponse([], 'Federation deleted successfully.');
    }


}


