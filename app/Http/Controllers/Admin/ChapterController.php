
<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chapter;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ChapterController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel(Chapter::class);
        $this->crud->setRoute(backpack_url('chapter'));
        $this->crud->setEntityNameStrings('chương', 'chương');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'title', 'type' => 'text', 'label' => 'Tên Chương']);
        $this->crud->addColumn(['name' => 'comic_id', 'type' => 'select', 'label' => 'Truyện', 'entity' => 'comic', 'attribute' => 'title']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Tên Chương']);
        $this->crud->addField(['name' => 'chapter_number', 'type' => 'number', 'label' => 'Số Chương']);
        $this->crud->addField(['name' => 'content', 'type' => 'ckeditor', 'label' => 'Nội Dung']);
        $this->crud->addField(['name' => 'comic_id', 'type' => 'select2', 'label' => 'Truyện', 'entity' => 'comic', 'attribute' => 'title', 'model' => 'App\Models\Comic']);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
