<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class BeneficiariesController extends Controller
{

    //Get cached beneficiaries if they are available, if not create a new cache
    public function getBeneficiaries(): JsonResponse
    {

        if (Cache::has('active_beneficiaries')) {
            $cache = Cache::get('active_beneficiaries');

            return response()->json($cache);
        } else {

            $data = Cache::remember('active_beneficiaries', 600, function () {
                return DB::table('beneficiaries')->where("status", "active")->get();
            });

            return response()->json($data);

        }


    }


    // Get active beneficiearies that were not cached
    public function getNonCachedBeneficiaries(): JsonResponse
    {
        $data = DB::table('beneficiaries')->where("status", "active")->get();

        return response()->json($data);
    }



    //inserts a new beneficiary to the database and deletes the cache
    public function addNewBeneficiary(Request $request): RedirectResponse
    {

        //Invalidate cached beneficiaries
        Cache::forget('active_beneficiaries');

        //Update beneficiary name and status, if not found add new record to the db.
        DB::table('beneficiaries')
            ->where('email', $request->email)
            ->update(['name' => $request->name, 'status' => $request->status, 'registration_date' => $request->registrationDate]);



        return back()->with("status", "success");
    }
}
