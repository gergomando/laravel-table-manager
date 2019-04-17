<?php namespace webmuscets\TableManager;

class Table {
	public $items = [];
	public $fields = [];
	public $hasAction = false;

  	public function render() {
    	return view('table-manager::table', [
    		'items' => $this->items,
    		'fields' => $this->fields,
    		'hasAction' => $this->hasAction,
    	])->render();
  	}
}