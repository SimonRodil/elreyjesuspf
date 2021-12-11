<?php

namespace App\Http\Livewire;

use App\Models\Network;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardTableNetwork extends Component
{

    use WithPagination;

    public function render()
    {

        return view('livewire.dashboard-table-network', [
            'networks' => Network::paginate(3)
        ]);
    }
}
