@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Home</h1>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"># ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Original Title</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Date of release</th>
                        <th scope="col">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($movies as $movie)
                        <tr>
                            <th scope="row">{{ $movie->id }}</th>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->original_title }}</td>
                            <td>{{ $movie->nationality }}</td>
                            <td>{{ $movie->date }}</td>
                            <td>{{ $movie->vote }}</td>
                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
