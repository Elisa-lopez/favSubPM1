<x-layout>
<div class="grid place-content-center h-screen">
<h2 class="text-green-500 text-center text-6xl">Log In</h2>

<form action="/login" method="POST">
 @csrf
       <div>
        <x-input Titulo="email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input Titulo="password" type="password" nombre="password"/>
        </div>

        <button type="submit" class="bg-green-400">log In</button>

</form>
</div>
</x-layout>
