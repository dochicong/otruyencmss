
<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class AuthorController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel(Author::class);
        $this->crud->setRoute(backpack_url('author'));
        $this->crud->setEntityNameStrings('tác giả', 'tác giả');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Tên Tác Giả']);
        $this->crud->addColumn(['name' => 'bio', 'type' => 'textarea', 'label' => 'Tiểu Sử']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Tên Tác Giả']);
        $this->crud->addField(['name' => 'bio', 'type' => 'textarea', 'label' => 'Tiểu Sử']);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
