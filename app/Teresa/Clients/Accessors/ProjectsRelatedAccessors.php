<?php namespace App\Teresa\Clients\Accessors;

use App\Project;

trait ProjectsRelatedAccessors
{
    public function getProjectsPercentAttribute()
    {
        $projects = $this->projects()->get([
            'id',
            'question_1', 'question_2', 'question_3'
        ]);

        $n = sizeof($projects);
        if ($n == 0) return 0;

        $sum = 0;
        foreach ($projects as $project) {
            $sum += $project->characters_percent;
        }

        $average = $sum / $n;
        return number_format((float) $average, 1, '.', '');
    }

    public function getProjectsStatusAttribute()
    {
        if ($this->projects_percent < 50)
            return 'danger';
        else if ($this->projects_percent < 90)
            return 'warning';
        else
            return 'success';
    }

    public function getProjectsCountAttribute()
    {
        return Project::where('user_id', $this->id)->count();
    }

}