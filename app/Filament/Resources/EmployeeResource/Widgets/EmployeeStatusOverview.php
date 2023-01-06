<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeeStatusOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $us=Country::Where('country_code', 'US')->withcount('employees')->first();
        $uk=Country::Where('country_code', 'UK')->withcount('employees')->first();
        $Монгол=Country::Where('country_code', 'Монгол')->withcount('employees')->first();

        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make($uk->name. '   Employees', $uk->employees_count),
            Card::make($us->name.  '   Employees', $us->employees_count),
            Card::make($Монгол->name.  '   Employees', $Монгол->employees_count),
            Card::make('Average time on page', '3:12'),
        ];
    }
}
