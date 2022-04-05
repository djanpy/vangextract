@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Welcome back to VangExtract Dashboard, {{ Auth::user()->username }}!</h1>
            <livewire:show-position-i-s-s />
            <livewire:counter />
            <livewire:hello-world />
            <livewire:contact-form />
        @endauth

        @guest
            <h1>Homepage</h1>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Welcome to Vangextract, guest</h1>
                        <p>
                            This is a simple web application that allows you to extract data from the VANGUARD
                            API system.
                        </p>
                        <p>
                            You can use the search bar to search for a specific record.
                        </p>
                        <p>
                            You can also use the dropdown menu to select a specific table.
                        </p>
                        <p>
                            You can also use the "Export" button to export the data to a CSV file.
                        </p>
                    </div>
        @endguest
    </div>
@endsection
