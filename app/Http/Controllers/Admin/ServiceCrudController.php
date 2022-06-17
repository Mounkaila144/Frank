<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ServiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServiceCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Service::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service');
        CRUD::setEntityNameStrings('service', 'services');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function autoSetupShowOperation()
    {
        CRUD::column('id');
        CRUD::column('nom');
        $this->crud->addColumn([
            'name'=> 'image',
            'label'=> 'Image',
            'type'=> 'image',
            'prefix'=>'storage/',
            'height'=>'300px',
            'width'=>'300px',

        ]);
        $this->crud->addColumn([
            'label'=>'Categories',
            'type'=>'select',
            'entity'=>'categories',
            'name'=>'categories_id',

        ]);
        CRUD::column('description');
        CRUD::column('prix');
        CRUD::column('created_at');
        CRUD::column('updated_at');    }
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('nom');
        $this->crud->addColumn([
            'name'=> 'image',
            'label'=> 'Image',
            'type'=> 'image',
            'prefix'=>'storage/',
            'width'=>'50px',
            'height'=>'50px'
        ]);
        $this->crud->addColumn([
            'label'=>'Categories',
            'type'=>'select',
            'entity'=>'categories',
            'name'=>'categories_id',

        ]);
        CRUD::column('description');
        CRUD::column('prix');
        CRUD::column('created_at');
        CRUD::column('updated_at');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ServiceRequest::class);

        CRUD::field('nom');
        CRUD::addField([
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'upload'    => true, // set to true to allow cropping, false to disable
        ]);
        CRUD::addfield([
            'label'=>'Categories',
            'type'=>'select',
            'entity'=>'categories',
            'name'=>'categories_id',
        ]);
        CRUD::field('description');
        CRUD::field('prix');
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
