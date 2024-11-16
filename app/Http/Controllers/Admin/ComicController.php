
<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ComicController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel(Comic::class);
        $this->crud->setRoute(backpack_url('comic'));
        $this->crud->setEntityNameStrings('truyện tranh', 'truyện tranh');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'title', 'type' => 'text', 'label' => 'Tên Truyện']);
        $this->crud->addColumn(['name' => 'author_id', 'type' => 'select', 'label' => 'Tác Giả', 'entity' => 'author', 'attribute' => 'name']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Tên Truyện']);
        $this->crud->addField(['name' => 'slug', 'type' => 'text', 'label' => 'Slug']);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Mô Tả']);
        $this->crud->addField(['name' => 'cover_image', 'type' => 'image', 'label' => 'Ảnh Bìa']);
        $this->crud->addField(['name' => 'author_id', 'type' => 'select2', 'label' => 'Tác Giả', 'entity' => 'author', 'attribute' => 'name', 'model' => 'App\Models\Author']);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
