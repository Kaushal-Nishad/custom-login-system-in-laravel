<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <h1>Welcome, This is Dashboard</h1>
    @auth
        <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
        </form>
    @endauth
</div>
