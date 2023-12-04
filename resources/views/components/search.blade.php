<div>
    <form action="#" method="GET">
        @csrf

        <input type="text" id="search" name="search" value="{{ request('search') }}"
            class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 shadow"
            placeholder="Search By Name, Faculty, Role">
    </form>
</div>
