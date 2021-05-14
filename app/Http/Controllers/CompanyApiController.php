<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyStoreRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyApiController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $companies = Company::paginate(10);
        return CompanyResource::collection($companies);
    }

    /**
     * @param CompanyStoreRequest $request
     * @return CompanyResource
     */
    public function store(CompanyStoreRequest $request): CompanyResource
    {
        $company = Company::create($request->validated());
        return new CompanyResource($company);
    }

    /**
     * @param Company $company
     * @return CompanyResource
     */
    public function show(Company $company): CompanyResource
    {
        return new CompanyResource($company);
    }

    /**
     * @param CompanyStoreRequest $request
     * @param Company $company
     * @return CompanyResource
     */
    public function update(CompanyStoreRequest $request, Company $company): CompanyResource
    {
        $company->update($request->validated());
        return new CompanyResource($company);
    }

    /**
     * @param Company $company
     * @return JsonResponse
     */
    public function destroy(Company $company): JsonResponse
    {
        $company->delete();
        return response()->json(['message' => 'deleted OK', 'company' => new CompanyResource($company)]);
    }
}
