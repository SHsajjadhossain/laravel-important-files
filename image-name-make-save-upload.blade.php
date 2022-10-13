//  photo upload start

$new_product_photo = time() . '_' . uniqid() . Auth::id() . '.' . $request->file('product_photo')->getClientOriginalExtension();
Image::make($request->file('product_photo'))->resize(600, 470)->save(base_path('public/uploads/product_photoes/' . $new_product_photo));

//  photo upload end