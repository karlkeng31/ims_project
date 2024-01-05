<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '15s';
    protected static bool $isLazy = true;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Customers', Customer::count())->description('Increase in customers')->color('success')->chart([7, 3, 4, 5, 6, 3, 5, 3]),

            Stat::make('Total Products', Product::count())->description('Total products in IMS')->color('danger')->chart([7, 3, 4, 5, 6, 3, 5, 3]),

            Stat::make('Total Orders', Order::count())->description('Total orders in IMS')->color('primary')->chart([7, 3, 4, 5, 6, 3, 5, 3])
        ];
    }
}
