<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-8 lg:px-12">
            <table class="table-fixed bg-white">
            <thead>
                <tr>
                <th>No</th>
                <th class="w-1/4">Name</th>
                </tr>
            </thead>
            <tbody>
            @php $number = 1; @endphp
            @foreach($users as $user)
                <tr>
                <td class="w-1/2">{{$number++}}</td>
                <td class="w-1/4">{{$user->name}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>
</x-app-layout>
