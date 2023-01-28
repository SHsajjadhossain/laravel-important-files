//  photo upload start

$new_product_photo = time() . '_' . uniqid() . Auth::id() . '.' . $request->file('product_photo')->getClientOriginalExtension();

// delete old photo
        unlink(base_path('public/uploads/product_photoes/'.Product::find($id)->product_photo));

Image::make($request->file('product_photo'))->resize(600, 470)->save(base_path('public/uploads/product_photoes/' . $new_product_photo));

//  photo upload end