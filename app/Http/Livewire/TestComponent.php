<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{

    public $htmlData = 1, $title = '';

    public function render()
    {
        // $this->title = 'Overview';
        return  view('livewire.test-component');

    }

    public function overview()
    {
        $this->htmlData = 1;
        $this->title = 'Overview';
    }

    public function chart()
    {
        $this->htmlData = 2;
        $this->title = 'Chart';
    }

    public function darkPool()
    {
        $this->htmlData = 3;
        $this->title = 'DarkPool';
    }
    public function divergences()
    {
        $this->htmlData = 4;
        $this->title = 'Divergences';
    }
    public function cycleData()
    {
        $this->htmlData = 5;
        $this->title = 'Cycle Data';
    }
    public function pivotPoints()
    {
        $this->htmlData = 6;
        $this->title = 'Pivot Points';
    }
    public function cheatSheet()
    {
        $this->htmlData = 7;
        $this->title = 'Cheat Sheet';
    }
    public function allTrades()
    {
        $this->htmlData = 8;
        $this->title = 'All Trades';
    }
    public function snapshots()
    {
        $this->htmlData = 9;
        $this->title = 'Snapshots';
    }

    






}
