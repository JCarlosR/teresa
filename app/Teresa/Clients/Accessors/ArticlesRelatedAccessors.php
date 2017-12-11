<?php namespace App\Teresa\Clients\Accessors;

trait ArticlesRelatedAccessors
{
    public function getArticlesPercentAttribute()
    {
        $articles = $this->articles()->get([
            'id', 'idea', 'idea_development'
        ]);

        $n = sizeof($articles);
        if ($n == 0) return 0;

        $sum = 0;
        foreach ($articles as $article) {
            $sum += $article->characters_percent;
        }

        $average = $sum / $n;
        return number_format((float) $average, 1, '.', '');
    }

}