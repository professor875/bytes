<x-layout>
    @guest 
        <h1 class="text-4xl">Welcome you are not logged in !!</h1>
<br>
        <a href="{{ route('user.create') }}" class="px-6 py-2 rounded-lg bg-green-500">Register</a>
    @endguest

    @auth 
        <p class="text-4xl">HELLO {{ $user->firstName }} !!</p>
<br>
        <a href="{{ route('user.show', $user->id) }}" class="px-6 py-2 rounded-lg bg-green-500">Profile</a>
        <a href="{{ route('user.logout', $user->id) }}" class="px-6 py-2 rounded-lg bg-red-500">Logout?</a>
        
    @endauth
</x-layout>