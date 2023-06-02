<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Restaurant;
use App\Models\Product;
use App\Models\Type;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Facades\Auth;



class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user_id = Auth::id(); 
        $restaurants = Restaurant::all()->where('user_id', $user_id);
        //dd($restaurants);

        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $restaurants = Restaurant::all();
        $types = Type::orderBy('name', 'asc')->get();
        $products = Product::orderBy('name', 'asc')->get();

        return view ('restaurants.create', compact('types', 'products', 'restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        $data = $request-> validate([
            'restaurant_name' => 'required|min:1|max:50',
            'address' => 'required|max:50',
            'vat' => 'required|max:11|min:11',
            'types' => 'required',
            'restaurant_image' => 'nullable|image'
        ]);

        $data['user_id'] = Auth::id();
        
        if ($request->hasFile('restaurant_image')) {
            $image = Storage::put('uploads', $data['restaurant_image']);
            $data['restaurant_image'] = $image;
        }
        
        $new_restaurant = Restaurant::create($data);
        
        if(isset($data['types'])){
            $new_restaurant->types()->attach($data['types']);
        }
        

        return to_route('dashboard', $new_restaurant);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        $products = Product::all()->where('restaurant_id', $restaurant->id);
        $types = Type::orderBy('name', 'asc')->get();

        if ($restaurant->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('restaurants.show', compact('restaurant', 'types', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        $types = Type::orderBy('name', 'asc')->get();
        
        if ($restaurant->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('restaurants.edit', compact('restaurant', 'types'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $data = $request-> validate([
            'restaurant_name' => 'required|min:1|max:50',
            'address' => 'required|max:50',
            'vat' => 'required|max:11|min:11',
            'types' => 'required',
            'restaurant_image' => 'nullable|image'
        ]); 
        
        if ($request->hasFile('restaurant_image')) {
            $image = Storage::put('uploads', $data['restaurant_image']);
            $data['restaurant_image'] = $image;
        }
        
        $restaurant->update($data);
        
        if(isset($data['types'])){
            $restaurant->types()->sync($data['types']);
        } else {
            $restaurant->types()->sync([]);
        }

        return to_route('restaurants.index', $restaurant);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
      
        return to_route('dashboard');
    }
}
