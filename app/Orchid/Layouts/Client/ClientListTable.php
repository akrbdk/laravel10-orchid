<?php

namespace App\Orchid\Layouts\Client;

use App\Models\Client;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ClientListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'clients';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name')->width('100px'),
            TD::make('last_name')->width('100px'),
            TD::make('status')->width('50px')->sort()->render(function (Client $client){
                return $client->status === 'interviewed' ? 'Обработано' : 'Необработано';
            }),
            TD::make('phone')->width('150px')->filter(),
            TD::make('email')->width('100px'),
            TD::make('birthday')->width('100px'),
            TD::make('created_at')->defaultHidden(),
        ];
    }
}
