@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Imie</label>
                    <input type="text" name="name" id="name" placeholder="Imie" class="bg-gray-100 border -2 w-full p-4 rounded-lg" value="">
                
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nazwisko" class="sr-only">Nazwisko</label>
                    <input type="text" name="nazwisko" id="nazwisko" placeholder="Nazwisko" class="bg-gray-100 border -2 w-full p-4 rounded-lg" value="">
                
                    @error('nazwisko')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Adres email" class="bg-gray-100 border -2 w-full p-4 rounded-lg" value="">
                
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                
                </div>
                <div class="mb-4">
                    <label for="telefon" class="sr-only">Telefon</label>
                    <input type="text" name="telefon" id="telefon" placeholder="Numer Telefonu" class="bg-gray-100 border -2 w-full p-4 rounded-lg" value="">
                
                    @error('telefon')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Hasło</label>
                    <input type="password" name="password" id="password" placeholder="Hasło" class="bg-gray-100 border -2 w-full p-4 rounded-lg" value="">
                
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Powtórz hasło</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Powtórz hasło" class="bg-gray-100 border -2 w-full p-4 rounded-lg" value="">
                
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Zatwierdź</button>
                </div>

            </form>
        </div>
    </div>
@endsection