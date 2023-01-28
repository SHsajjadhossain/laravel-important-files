
{{-- custom slug create start --}}
Str::slug($request->product_name)."-".Str::random(5).auth()->id()
{{-- custom slug create end --}}