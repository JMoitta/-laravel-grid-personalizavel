<?php

namespace App\Http\Controllers;

use App\Category;

use App\Table\Table;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $table;

    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->table
            ->model(Category::class)
            ->columns([
                [
                    'label' => 'Nome',
                    'name' => 'name',
                ]
            ])
            ->filters([
                [
                    'name' => 'id',
                    'operator' => 'LIKE',
                ],
                [
                    'name' => 'name',
                    'operator' => 'LIKE',
                ],
            ])
            ->addEditAction('categories.edit')
            ->addDeleteAction('categories.destroy')
            ->paginate(5)
            ->search();
        return view('categories.index', ['table' => $this->table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
