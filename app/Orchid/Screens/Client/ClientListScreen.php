<?php

namespace App\Orchid\Screens\Client;

use App\Models\Client;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class ClientListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'clients' => Client::paginate(20)
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Clients';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            //
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('clients', [
                TD::make('name')->width('100px'),
                TD::make('last_name')->width('100px'),
                TD::make('status')->width('50px')->render(function (Client $client){
                    return $client->status === 'interviewed' ? 'Обработано' : 'Необработано';
                }),
                TD::make('phone')->width('150px'),
                TD::make('email')->width('100px'),
                TD::make('birthday')->width('100px'),
                TD::make('created_at')->defaultHidden(),
            ])
        ];
    }
}
