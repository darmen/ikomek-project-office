<?php

namespace Darmen\IKomekProjectOffice\app\Http\Controllers;

use Darmen\IKomekProjectOffice\app\Models\Category;
use Darmen\IKomekProjectOffice\app\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectOfficeController extends Controller
{
    public function index()
    {
        $categories = Category
            ::whereIn('id', [1,2,3,4])
            ->get();

        return view('project-office::index', compact('categories'));
    }

    public function category(Request $request, $category_id)
    {
        $category = Category::find($category_id);

        if (!$category)
        {
            abort(404);
        }

        $projects = $category->projects()->paginate(config('ikomek.project-office.per_page'));

        return view('project-office::category', compact('category', 'projects'));
    }

    public function project(Request $request, $project_id)
    {
        $project = Project::where('identifier', $project_id)->first();

        if (!$project)
        {
            abort(404);
        }

        return view('project-office::project', compact('project'));
    }
}
