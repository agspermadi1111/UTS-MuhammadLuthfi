@extends('layouts.app')

@section('title', 'Friends')

@section('content')

<a href="/friends/create" class=" btn card-link btn-primary">Tambah Teman</a><br>
    @foreach ($friends as $friend)
<br>
        <div class="card-header" style="width: 18rem;">
            <div class="card-body">
                <a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a>
                <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
                <p class="card-text">{{ $friend['alamat'] }}</p>

                <form action="/friends/{{ $friend['id'] }}" method="POSt">
                    <button href="/friends/{{ $friend['id'] }}/edit" class="card-link btn-success">Edit Teman</button>
                    @csrf
                    @method('DELETE')
                    <button class="card-link btn-danger">Delete Teman</button>
                </form>
            </div>
        </div>

    @endforeach
    <div>
        {{ $friends->links() }}
    </div>
@endsection
