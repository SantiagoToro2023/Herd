<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    <h1>Hello from the Job Listing page!</h1>

    <ul>
        @foreach ($jobs as $job)
        <li>
            <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year. 
        </li>
        @endforeach
    <ul>
</x-layout>