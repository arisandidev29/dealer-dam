<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(15);
        return view("product.index",[
            "title" => "product Dealer Dam",
            "products" => $product
        ]);

        return "ok";
    }

    /**
     * Show the form for cureating a new resource.
     */
    public function create()
    {
        return view("product.tambah",[
            "title" => "Tambah Product"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => "required",
            "tahun" => ['required'],
            'harga' => ['required'],
            'type' => 'required',
            'deskripsi' => ['required','min:20'],
            'product_pic' => ['required',File::image()->types(['jpg','png','jpeg'])->min("1kb")->max("2mb")]
        ]);

        $currentProduct = Product::create([
            "name" => $request->input("name"),
            "tahun" => $request->input("tahun"),
            "harga" => $request->input("harga"),
            "type" => $request->input("type"),
            "deskripsi" => $request->input("deskripsi"),
        ]);


        $currentProduct->image = $request->file("product_pic")->store("motor");
        $currentProduct->save();

        Session::flash("success",'Berhasil Tambah Product');


        return back();



    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, string $id)
    {
        $product = Product::find($id);


        return view("product.product", [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product , string $id)
    {
               $product = Product::find($id);

               return view("product.edit",[
                'title' => "edit product",
                'product' => $product 
               ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, string $id)
    {


         $validated = $request->validate([
            'name' => "required",
            "tahun" => ['required'],
            'harga' => ['required'],
            'type' => 'required',
            'deskripsi' => ['required','min:20'],
            'product_pic' => ['nullable',File::image()->types(['jpg','png','jpeg'])->min("1kb")->max("2mb")]
        ]);    

         $product = Product::find($id);

         $product->name = $request->input("name");
         $product->tahun = $request->input("tahun");
         $product->harga = $request->input("harga");
         $product->type = $request->input("type");
         $product->deskripsi = $request->input("deskripsi");

         if(!is_null($request->file("product_pic"))) {
            $product->image = $request->file("product_pic")->store("motor");
         }

         $product->save();

         Session::flash("success",'Berhasil Update Product');
         return back();



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, string $id)
    {
        Product::find($id)->delete();

        return redirect(route("product"));
    }

    // search product

    public function search(Request $request)
    {
        $keyword = $request->input("keyword");

        $searchProduct = Product::where("name","like","%$keyword%")->get();
        return view("product.search",[
            'title' => "Search $keyword",
            "keyword" => $keyword,
            'products' => $searchProduct
        ]);        
    }

    // filter per category

    public function category(Request $request)
    {
        $category = $request->input("category");

        if($product = Product::where("type",$category)->get()) {
             return view("product.category",[
                'title' => "category $category",
                'products' => $product,
                'category' => $category 
             ]);

        }

        return abort(404);


    }
}
