<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();
        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

<<<<<<< HEAD
=======
    public function productVw(Request $request)
    {
        $search = $request->input('search');
        $products = Producto::where('nombre', 'like', '%'.$search.'%')
                        ->orWhere('marca', 'like', '%'.$search.'%')
                        ->orWhereHas('categoria', function ($query) use ($search) {
                            $query->where('nombre', 'like', '%'.$search.'%');
                        })
                        ->get();
        return view('productos', compact('products'));
    }

    public function mostrarProductos()
    {
        $productos = Producto::limit(6)->get(); // Obtener los primeros 6 productos

        return view('home.userpage', compact('productos'));
    }
    public function showDetail($id)
    {
        $producto = Producto::find($id);
        $moreProducts = Producto::inRandomOrder()->limit(4)->get();

        return view('detalle_productos', compact('producto', 'moreProducts'));
    }
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        return view('producto.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

<<<<<<< HEAD
        $producto = Producto::create($request->all());
=======
        // Obtener el archivo del formulario
        $file = $request->file('imagen');

        // Generar un nombre único para el archivo
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        // Mover el archivo al directorio de almacenamiento deseado
        $file->storeAs('public/images', $filename);

        //$producto = Producto::create($request->all());

        $producto = new Producto;
        $producto->imagen = $filename;
        $producto->marca = $request->input('marca');
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->id_categoria = $request->input('id_categoria');
        $producto->cant_disponible = $request->input('cant_disponible');
        $producto->presentacion = $request->input('presentacion');
        $producto->fecha_vencimiento = $request->input('fecha_vencimiento');
        $producto->restriccion = $request->input('restriccion');
        $producto->save();
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

<<<<<<< HEAD
=======
        // Generar un nombre único para el archivo
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        // Mover el archivo al directorio de almacenamiento deseado
        $file->storeAs('public/images', $filename);

        // Eliminar la imagen anterior si existe
        if ($producto->imagen) {
            Storage::delete('public/images/' . $producto->imagen);
        }

        $producto->imagen = $filename;
        $producto->marca = $request->input('marca');
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->id_categoria = $request->input('id_categoria');
        $producto->cant_disponible = $request->input('cant_disponible');
        $producto->presentacion = $request->input('presentacion');
        $producto->fecha_vencimiento = $request->input('fecha_vencimiento');
        $producto->restriccion = $request->input('restriccion');
        $producto->save();
        
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}
