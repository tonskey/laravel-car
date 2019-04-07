<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarFormRequest;
use App\Car;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sortBy = 'id';
        $sortDirection = 'ASC';

        if (request('sortby') || request('sortdir')) {
            $sortBy = request('sortby');
            $sortDirection = request('sortdir');
        }

        $cars = Car::orderBy($sortBy, $sortDirection)->paginate(6);

        return view('car/index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarFormRequest $request)
    {
        $car = Car::create($request->all());

        alert()->success('Автомобіль створено успішно.');

        return redirect()->route('car.edit', $car->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('car/show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('car/edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarFormRequest $request, Car $car)
    {
        $car->update($request->all());

        alert()->success('Автомобіль змінено успішно.');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);

        alert()->success('Автомобіль видалено успішно.');

        return redirect('/car');
    }
}
