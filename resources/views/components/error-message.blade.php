@if ($errors->any())
<div class="bg-red-50 text-red-700 p-4 rounded-lg border border-red-200 mb-6">
    <div class="font-bold mb-2">入力エラーがあります</div>
    <ul class="list-disc list-inside text-sm">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif