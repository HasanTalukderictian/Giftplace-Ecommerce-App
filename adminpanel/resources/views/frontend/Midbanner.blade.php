 @php
    // Fetch the latest record from the Midbanner table
    $midbanner = \App\Models\Midbanner::latest()->first();
    //  dd($midbanner);
@endphp


<div class="container-fluid">
    <h2 class="text-center mt-5 mb-5">A look at our numbers</h2>
    <div class="row g-0"> <!-- Use g-0 to remove gutters between columns -->
        <div class="col-md-6 p-0"> <!-- Remove padding for this column -->
            <!-- Dynamic Image on the left -->
            <img src="{{ asset('storage/' . $midbanner->image) }}" alt="Interior Design" class="img-fluid w-100 h-100"> <!-- Make image responsive -->
        </div>
        <div class="col-md-6" style="background: #f3f3f3; padding: 0;"> <!-- Remove padding -->
            <!-- Numbers and Description on the right -->
            <div class="row">
                <div class="col-md-6 number-box">
                    <h3 class="mt-3 p-4">{{ $midbanner->totalCategory }}</h3>
                    <h4 class="px-4">{{ $midbanner->Category }}</h4>
                </div>
                <div class="col-md-6 number-box">
                    <h3 class="mt-3 p-4">{{ $midbanner->totalproduct }}</h3>
                    <h4 class="px-4">{{ $midbanner->producttype }}</h4>
                </div>
            </div>
            <div class="mt-2 numbers-description p-4">
                <!-- Decode HTML content in description -->
                <p>{!! $midbanner->description !!}</p>
            </div>
            <div class="numbers-description p-4">
               <button class="btn btn-primary font-italic font-weight-bold">BOOK APPOINTMENT</button>

            </div>
        </div>
    </div>

    <style>
        .btn-primary:hover {
        background-color: #d83613 !important;
        border-color: #d83613 !important;
    }
    </style>
