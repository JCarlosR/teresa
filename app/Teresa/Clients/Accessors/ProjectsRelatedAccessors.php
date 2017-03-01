<?php namespace App\Teresa\Clients\Accessors;

use App\Project;

trait ProjectsRelatedAccessors
{
    public function getProjectsPercentAttribute()
    {
        $projects = $this->projects;

        $n = sizeof($projects);
        if ($n == 0) return 0;

        $sum = 0;
        foreach ($projects as $project) {
            $sum += $project->characters_percent;
        }

        $average = $sum / $n;
        return number_format((float) $average, 1, '.', '');
    }

    public function getProjectsCountAttribute()
    {
        return Project::where('user_id', $this->id)->count();
    }

}