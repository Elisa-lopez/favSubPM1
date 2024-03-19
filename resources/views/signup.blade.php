<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h4 class="text-4xl mt-12 mb-22">Sing Up</h4>
    <form action="sing Up" method="POST">
        @csrf

            <x-input Titulo="Name" type="text"nombre="name"/>

            <x-input Titulo="Email" type="text"nombre="email"/>

            <x-input Titulo="Password" type="password"nombre="password">

            <x-input Titulo="Birthday" type="date"nombre="birthday"/>


        <button type="submit">Submit</button>
</div>
