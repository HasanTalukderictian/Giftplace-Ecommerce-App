<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12 mb-4 mt-4">
            <h2 class="font-weight-bold">LATEST PROJECT</h2>
        </div>
    </div>

    <div class="row">
        @php
            // Fetch all products that should be shown on the frontend
            $products = \App\Models\Product::where('show_in_frontend', 'yes')->orderBy('created_at', 'desc')->get();
        @endphp

        @foreach($products as $product)
        <!-- Dynamic Product Card -->
        <div class="col-md-4 col-sm-6 col-12 mb-4">
            <div class="card border-2 shadow-lg h-100">
                <div class="card-img-container">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top img-fluid" alt="{{ $product->name }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Add some custom CSS for hover effect and image size -->
<style>
    .card {
        transition: transform 0.3s ease;
        height: 100%;
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card-title {
        font-weight: bold;
        margin-top: 10px;
    }
    .card-img-container {
        height: 300px; /* Set a fixed height for the image container */
        overflow: hidden;
    }
    .card-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure the image covers the entire container without distortion */
    }
</style>
