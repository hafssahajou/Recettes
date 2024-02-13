<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="min-h-screen flex items-center justify-center">
    
        <form method="post" action="{{ route('recipes.store') }}" enctype="multipart/form-data" class="w-full max-w-xl p-6 bg-red-100 rounded-lg shadow-lg">
            <h1 class="text-center text-2xl text-gray-800 mb-6">Add a Recipe</h1>
            @csrf
            @method('post')
        
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Name of the Recipe</label>
                <input type="text" name="title" id="title" placeholder="Enter the name" class="block w-full mt-1 px-3 py-2 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900">
            </div>
        
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="3" placeholder="Enter a description" class="block w-full mt-1 px-3 py-2 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900"></textarea>
            </div>
        
            <div class="mb-4">
                <label for="steps" class="block text-sm font-medium text-gray-700">Steps</label>
                <textarea name="steps" id="steps" rows="3" placeholder="Enter the steps" class="block w-full mt-1 px-3 py-2 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900"></textarea>
            </div>
        
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <input type="text" name="category_id" id="category" placeholder="Enter the category" class="block w-full mt-1 px-3 py-2 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900">
            </div>
        
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="cooking_time" class="block text-sm font-medium text-gray-700">Cooking Time (minutes)</label>
                    <input type="number" name="cooking_time" id="cooking_time" min="0" placeholder="Enter cooking time" class="block w-full mt-1 px-3 py-2 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900">
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                    <input type="file" name="image" id="image" class="block w-full mt-1 px-3 py-2 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900">
                </div>
            </div>
        
            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Submit</button>
        </form>
        
        
        
</div>

</body>

</html>