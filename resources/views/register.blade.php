<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1> Sing Up </h1>
    <form action="sing Up" method="POST">
        @csrf
        <div>
            <x-input Titulo="Name" type="text"nombre="name"/>
        </div>

        <div>
            <x-input Titulo="Password" type="text"nombre="email"/>
        </div>
        <div>
            <x-input Titulo="Password" type="text"nombre="password">
        </div>


        <div>
            <x-input Titulo="birthday" type="date"nombre="birthday"/>
        </div>

        <button type="submit">Submit</button>
</div>
