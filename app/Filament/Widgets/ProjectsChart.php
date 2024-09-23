<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Widgets\ChartWidget;

class ProjectsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $projects = Project::selectRaw('category, COUNT(*) as total')
            ->groupBy('category')
            ->get();

        $labels = $projects->pluck('category');
        $data = $projects->pluck('total');

        return [

            'datasets' => [
                [
                    'label' => 'Projects By Category',
                    'data' => $data,
                    'background color' => [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
