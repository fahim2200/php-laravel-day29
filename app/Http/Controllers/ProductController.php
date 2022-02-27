<?php


namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    protected $products;
    protected $product;

    public function index()
    {
        return view('product.add');
    }

    public function create(Request $request)
    {
//        return $request->all();
        $this->product = new Product();
        $this->product->name = $request->name;
        $this->product->category = $request->category;
        $this->product->brand = $request->brand;
        $this->product->price = $request->price;
        $this->product->description = $request->description;
        $this->product->image = $request->image;
        $this->product->save();

        return redirect()->back()->with('message', 'Product info save sucessfully,');

    }


    public function manage()
    {
        $this->products = Product::orderBy('id', 'desc')->get();
//        return Student::
        return view('product.manage', ['products' => $this->products]);
    }


    public function edit($id)
    {
        $this->product = Product::find($id);

        return view('product.edit',['product'=> $this->product]);
    }

    public function update(Request $request, $id)
    {
        $this->product = new Product();
        $this->product->name = $request->name;
        $this->product->category = $request->category;
        $this->product->brand = $request->brand;
        $this->product->price = $request->price;
        $this->product->description = $request->description;
        $this->product->image = $request->image;
        $this->product->save();

        return redirect('/product-manage')->with('message', 'Product Info Update Successfully');
    }

    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();

        return redirect('/product-manage')->with('message', 'Product Info Delete Successfully');

    }
}

