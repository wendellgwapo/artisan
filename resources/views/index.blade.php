<!-- <header>
    <a href="#">
        <h1 class="font-bold text-center">Worker List</h1>
    </a>
</header>
<section class="mt-10">
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left">
            <thead class="text-xs uppercase">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Field
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Application Form
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</section> -->
<!-- @include('partials.header') -->
    <h1 class="text-3x1 font-bold">
        Help!
    </h1>

    <ul>
        @foreach ($student as $student)

        <li>{{ $worker-> }} {{ $worker->gender_count }}</li>

        @endforeach
    </ul>
<!-- @include('partials.footer') -->