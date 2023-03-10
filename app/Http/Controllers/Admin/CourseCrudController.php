<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CourseCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE) {
        return [
            [
                'name'=> 'title',
                'label' => 'Title',
                'type'=> 'text'
            ],
            [
                'name' => 'info',
                'label' => 'Info',
                'type' => ($show ? "text": 'summernote'),
                'view' => 'partials/richtext'
            ],
            [   
                'label'     => "Teacher",
                'type'      => "select",
                'name'      => 'teachers', 
               

                'entity'    => 'teachers', 
                'model'     => "App\Models\Teacher", 
                'attribute' => 'name', 
                'pivot'     => true, 
            ],
            [   
                'label'     => "Organization",
                'type'      => "select",
                'name'      => 'organizations', 
               

                'entity'    => 'organizations', 
                'model'     => "App\Models\Organization", 
                'attribute' => 'name', 
                'pivot'     => true, 
            ],
            [   
                'label'     => "Settlement",
                'type'      => "select",
                'name'      => 'settlements', 
               

                'entity'    => 'settlements', 
                'model'     => "App\Models\Settlement", 
                'attribute' => 'name', 
                'pivot'     => true, 
            ],
            [
                'label' => "Resources",
                'name' => "file",
                'type' => 'upload',
                'view' => 'partials/file',
                'upload' => true,
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
        CRUD::setModel(\App\Models\Course::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/course');
        CRUD::setEntityNameStrings('course', 'courses');
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
        CRUD::column('title');
        CRUD::column('info');
        CRUD::addColumn([
            'name'              => 'date',
            'label'             => 'Date',
            'type'              => 'datetime',
            'format'            => 'DD-MM-YYYY',
        ]);
        CRUD::column('start');
        CRUD::column('end');
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
        CRUD::addColumn([
            'name'              => 'created_at',
            'label'             => 'Created',
            'type'              => 'datetime',
            'format'            => 'HH:MM:SS DD-MM-YYYY',
        ]);
        CRUD::addColumn([
            'name'              => 'updated_at',
            'label'             => 'Updated',
            'type'              => 'datetime',
            'format'            => 'HH:MM:SS DD-MM-YYYY',
        ]);

   


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
        CRUD::setValidation(CourseRequest::class);

        CRUD::field('title');
        CRUD::field('date');
        CRUD::field('start');
        CRUD::field('end');

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
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
