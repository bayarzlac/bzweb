<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        $pageTitle = "Хянах самбар";

        return view('admin.dashboard', compact('pageTitle'));
    }

    public function homePage()
    {
        $pageTitle = "Нүүр хуудасны мэдээлэл";

        $jsonPath = public_path('storage/homePage.json');

        if (File::exists($jsonPath)) {
            $jsonData = file_get_contents($jsonPath);
            $homePageData = json_decode($jsonData, true);

            return view('admin.homePage', compact('homePageData', 'pageTitle'));
        }
        else {
            return response()->json(['error' => 'JSON file not found'], 404);
        }
    }

    public function homePageUpdate(Request $request)
    {

    }
}
