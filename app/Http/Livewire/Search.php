<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class Search extends Component
{
    use WithPagination;
    public $searchTerm;
    public $currentPage = 1;

    public function render()
    {
        $query = '%' . $this->searchTerm . '%';

        return view('livewire.search', [
            'category' => Category::where(function ($sub_query) {
                $sub_query->where('name', 'like', '%' . $this->searchTerm . '%');
            })->paginate(1)
        ]);
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }
}
