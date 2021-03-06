<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PhoneRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PhoneCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PhoneCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    private function getFieldsData($show = FALSE){
        return[
            [
                'name'=>'name',
                'label'=>'Phone',
                'type'=>'text',
            ],
            [
                'name'=>'description',
                'label'=>'Description',
                'type'=>($show ? 'textarea' : 'ckeditor'),
            ],
            [
                'name'=>'brand',
                'label'=>'Brand',
                'type'=>'select',
                'entity'=>'brand',
                'model'=> 'App\Models\Brand',
                'attribute'=>'name',
    
            ],
            [
                'name'=>'phonemodel',
                'label'=>'Model',
                'type'=>'select',
                'entity'=>'phonemodel',
                'model'=> 'App\Models\Phonemodel',
                'attribute'=>'name',

            ],
            [
                'name'=>'year_of_release',
                'label'=>'Year',
                'type'=>'number',
            ],
            [
                'label'=>'Phone Image',
                'name'=>'image',
                'type'=>'image',
                'crop'=>True, //set T to allow cropping F to disable
                'aspect_ratio'=>0,//set to 0 or remove the line to allow any aspect ratio
            ]
        ];
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Phone::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/phone');
        CRUD::setEntityNameStrings('phone', 'phones');

        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));

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
        CRUD::setValidation(PhoneRequest::class);


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

    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', FALSE);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}