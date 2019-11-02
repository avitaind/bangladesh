<?php

namespace App\Http\Controllers\Admin;

use App\RepairTerm;
use App\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //

    public function getRepairTerms() {

        $repair_terms = RepairTerm::all();

        return view('admin.settings.repair_terms_list', compact('repair_terms'));
    }

    public function postRepairTerms(Request $request) {

        // Save Terms to DB.
        Settings::set('repair_tnc_en', $request->get('repair_tnc_en'));
        Settings::set('repair_tnc_tc', $request->get('repair_tnc_tc'));


        alert('Repair Terms And Condition updated');


        return redirect('admin/repair_tnc');

    }
}
