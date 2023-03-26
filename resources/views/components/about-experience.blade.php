<div class="mt-20 mb-32 px-4 lg:flex lg:mb-40 lg:px-20">
    <div class="lg:basis-5/12">
        <h1 class="text-3xl">Experience</h1>
    </div>
    <div class="lg:basis-7/12">
        <div class="grid grid-cols-2 lg:grid-cols-3 col-span-2 gap-4 lg:gap-5 pt-10 lg:pt-0">
            @foreach ($jobs as $job)
            <div style="max-width: 210px;">
                <p>{{ $job['period'] }}</p>
                <a href="#" class="text-purple-dark hover:underline">
                    <p>{{ $job['company'] }}</p>
                </a>
                <p>{{ $job['title'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
