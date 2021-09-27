<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use Illuminate\Support\Facades\Route;


use Livewire\Component;

class Report extends Component
{

    public $name;

    protected $rules = [
        'name' => 'required|min:2|max:50',
    ];


    public function submit()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'ip_address' => request()->ip(),
            'browser_agent' => request()->server('HTTP_USER_AGENT')
        ];
        $domain =  Domain::create($data);

        return redirect()->route('domain', $domain->name);
    }

    public function render()
    {
        return view('livewire.report')
            ->extends('layout')
            ->section('content');
    }
}
