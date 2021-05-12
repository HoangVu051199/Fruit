<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class SearchShipping extends Component
{
    use WithPagination;
    public $searchTerm;
    public $cunrrentPage = 1;

    public function render()
    {
        $searchTerm = '%'. $this->searchTerm .'%';
        $shipping = Order::where('name', 'LIKE', $searchTerm)
            ->orWhere('email', 'LIKE', $searchTerm)
            ->orWhere('phone', 'LIKE', $searchTerm)
            ->orWhere('address', 'LIKE', $searchTerm)
            ->orWhere('total', 'LIKE', $searchTerm)
            ->orderBy('id', 'ASC')->paginate(5);

        return view('livewire.search-shipping',[
            'shipping' => $shipping
        ]);
    }

    public function setPage($url)
    {
        $this->cunrrentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function () {
            return $this->cunrrentPage;
        });
    }
}
