<?php namespace webmuscets\TableManager;

class Table {
  public $items = [];
  public $fields = [];
  public $paginate = false;
  public $hasAction = false;

    public function render() {
      return view('table-manager::table', [
        'items' => $this->items,
        'fields' => $this->fields,
        'hasAction' => $this->hasAction,
        'paginate' => $this->paginate,
      ])->render();
    }
}