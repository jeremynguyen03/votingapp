<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilters extends Component
{
    public $status = 'All';
    protected $queryString = [
        'status'
    ];

    public function mount()
    {
        if (Route::currentRouteName() === 'idea.show') {
            $this->status = null;
            $this->queryString = [];
        }
    }

    private function getPreviousRouteName(): ?string
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;
        if ($this->getPreviousRouteName() === 'idea.show') {

            return redirect()->route('idea.index', [
                'status' => $this->status
            ]);
        }
    }

    public function render()
    {
        return view('livewire.status-filters');
    }
}
