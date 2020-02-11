<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ProductManagementFormRequest;

class ProductManagementController extends Controller
{
    /**
     * ProductService object
     * @var ProductService
     */
    protected $productService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('backend.product.index', [
            'products' => $this->productService->getAllData()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductManagementFormRequest $request
     * @return RedirectResponse
     */
    public function store(ProductManagementFormRequest $request): RedirectResponse
    {
        $this->productService->saveProduct($request->all());

        return redirect()->route('product.index')->with('status', "Product Saved Successfullly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return View
     */
    public function edit(Product $product): View
    {
        return view('backend.product.edit',[
            'data' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductManagementFormRequest  $request
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function update(ProductManagementFormRequest $request, Product $product): RedirectResponse
    {
        $this->productService->updateProduct($request->all(), $product);

        return redirect()->route('product.index')->with('status', "Product Updated Successfullly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        $this->productService->deleteProduct($product->id);

        return redirect()->route('product.index')->with('status', "Product Deleted Successfullly");
    }
}
