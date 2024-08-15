<?php

namespace App\Filament\Admin\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeeStatsOvweview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Employees', Employee::all()->count()),
            Stat::make('Diferents countries', Country::all()->count()),
            Stat::make('Most recently employee', Employee::orderBy('date_hired', 'desc')->value('date_hired')),
        ];
    }
}
