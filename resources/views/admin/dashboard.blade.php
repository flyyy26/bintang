<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        *{
            font-family: "Rubik", sans-serif;
        }
    </style>
</head> -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container p-5 mx-auto">

        <h1 class="text-3xl font-bold mt-10">Welcome to the Admin Dashboard</h1>
        <p class="mt-4">Hello, {{ Auth::user()->name }}!</p>

        <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </form>
    </div>
@endsection