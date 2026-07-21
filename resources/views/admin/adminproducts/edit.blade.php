<x-app-layout>
    <form action="/admin/adminproducts/{{ $adminproduct->id }}" method="POST" enctype="multipart/form-data " class="grid w-[550px] justify-center mx-auto  gap-3 mt-36 border-4 border-black" >
        @csrf
        @method('PUT')
        {{-- name --}}
        <div class="mt-4">
            <label for="name">Name of the product</label>
            <input type="text" name="name" class="text-black" value="{{ $adminproduct->name }}" >
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <br>

        {{-- description --}}
        <div>
            <label for="description">Description
                <textarea name="description" id="description"
                class="text-black"  >{{ $adminproduct->description }}
                </textarea>
                @error('description')
               <p>{{ $message }}</p>
               @enderror
            </label>
        </div>

        {{-- price --}}
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" class="text-black" value={{ $adminproduct->price }}>
            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>


        {{-- image --}}
        <div>
            <label for="image">Insert an Image</label>
            <input type="file" name="image" >
            @error('image')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- category --}}
        <div>
            <label for="category"> category of product</label>
            <select name="category_id" class="text-black">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" class="text-black">
                        {{ $category->name }}
                    </option>
                @endforeach
              </select>
              @error('category_id')
                  <p>{{ $message }}</p>
              @enderror
        </div>
        <br>

        {{-- is featured --}}
        <div>
            <label for="is_featured">is featured ?</label>
            0
            <input type="checkbox" name="is_featured" value="0">
            1
            <input type="checkbox" name="is_featured" value="1">
            @error('is_featured')
                <p>{{ $message }}</p>
            @enderror
        </div>

        {{-- is stock --}}
        <div>
            <label for="is_stock">is stock ?</label>
            0
            <input type="checkbox" name="is_stock" value="0">
            1
            <input type="checkbox" name="is_stock" value="1">
            @error('is_stock')
                <p>{{ $message }}</p>
            @enderror
        </div>


        <button type="submit">Submit</button>

    </form>

</x-app-layout>
