<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ProductsChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected static ?string $heading = 'Products Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Products per month',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    /* protected function getProductsPerMonth(): array
    {
        $now = Carbon::now();

        $productsPerMonth = [];

        $months = collect(range(1, 12))->map(function ($month) use ($now, $productsPerMonth) {
            $count = Product::whereMonth('created_at', Carbon::parse($now->month($month)->format('Y-m')))->count();

            $productsPerMonth = $count;

            return $now->month($month)->format('M');
        })->toArray();

        return [
            'productsPerMonth' => $productsPerMonth,
            'months' => $months
        ];
    } */
}
