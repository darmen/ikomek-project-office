<?php

namespace Darmen\IKomekProjectOffice\src\app\Console\Commands;

use Darmen\IKomekProjectOffice\app\Models\Category;
use Darmen\IKomekProjectOffice\app\Models\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Fetch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ikomek:project-office:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches projects from iKomek server.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = 'http://192.168.10.61/restapi/getproject';
        $json_str = @file_get_contents($url);


//        $request = new Request();
//        $request->setCreatedAt(new \DateTime());
//        $request->setResponseCode($http_response_header[0]);
//        $request->setUrl($url);

        if ($json_str) {
            $projects = json_decode($json_str, true);
            $saved = 0;

            if($projects)
            {
                DB::table((new Project)->getTable())->truncate();

                foreach($projects['projects'] as $p)
                {
                    $category = Category
                        ::where('title', $p['category']['title'])
                        ->first();

                    if (!$category) {
                        $category = new Category();
                        $category->title = $p['category']['title'];
                        $category->save();
                    }

                    $project = new Project();
                    $project->stage = $p['stage'];
                    $project->title = $p['title'];
                    $project->kurator = $p['kurator'];
                    $project->supervisor = $p['supervisor'];
                    $project->contractor = $p['contractor'];
                    $project->result = $p['result'];
                    $project->identifier = $p['ClBaseItem'];
                    $project->started_at = new \DateTime($p['started_at']);
                    $project->finished_at  = new \DateTime($p['finished_at']);
                    $project->category()->associate($category);

                    if (isset($p['budget'])) {
                        $project->budget = $p['budget'];
                    }

                    if (is_array($p['images'])) {
                        $p['images'] = array_reverse($p['images']);
                        foreach ($p['images'] as $key => $img) {
                            $filepath = parse_url($img, PHP_URL_PATH);

                            if ($filepath == '/Content/images/astana.jpg') {
                                $filename = 'astana.jpg';
                            } else {
                                $filename = str_replace("/PhotosObject/", "", $filepath);
                            }

                            if (!Storage::exists($filename))
                            {
                                Storage::put($filename, file_get_contents($img));
                            }


                            $p['images'][$key] = $filename;
                        }

                        $project->images = $p['images'];
                    }


                    $project->save();
                    $saved++;

                }

            }

//            $request->setProjectsCount($saved);

            $this->line('Done - '.$saved);

        } else {
            $this->line('Error.');
        }
    }
}
