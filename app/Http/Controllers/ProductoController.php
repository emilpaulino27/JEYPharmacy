<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $categorias = Categoria::all();
        $categoriaSeleccionada = $producto->id_categoria ?? null;
        return view('producto.create', compact('producto', 'categorias', 'categoriaSeleccionada'));
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
        $categorias = Categoria::all();
        $categoriaSeleccionada = $producto->id_categoria ?? null;

        return view('producto.edit', compact('producto', 'categorias', 'categoriaSeleccionada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        // Obtener el archivo del formulario
        $file = $request->file('imagen');

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
        // Obtén el producto que se va a eliminar
        $producto = Producto::find($id);

        // Verifica si el producto existe
        if ($producto) {
            // Elimina la foto del storage
            Storage::delete('public/images/' . $producto->imagen);

            // Elimina el producto de la base de datos
            $producto->delete();

            // Redirige a la ruta de productos.index con un mensaje de éxito
            return redirect()->route('productos.index')
                ->with('success', 'Producto deleted successfully');
        }

        // Si el producto no existe, redirige con un mensaje de error
        return redirect()->route('productos.index')
            ->with('error', 'Producto not found');
    }
}
