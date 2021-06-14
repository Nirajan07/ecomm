<html>
<body>
<form action="/submit" method="POST" enctype="multipart/form-data">
  @csrf
  <h2>Create Product</h2>

Product Name: <input type="text" name="name" id=""><br><br>
  Description: <textarea name="description" id="" cols="30"  rows="10"></textarea><br><br>
Image: <input type="file" name="image_upload" id=""><br><br>
Price: <input type="text" name="price" id=""><br><br>
Old Price: <input type="text" name="old_price" id=""><br><br>
 
      
      <label for="category">Select a category:</label>
  <select name="parent_id" class="form-control">
      <option value="0">Select a category</option>
     @foreach ($categories as $category)
    <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? "selected": '' }}>{{ $category->name }}</option>
                    @endforeach
                  </select>
                  {{-- <select name="category_id" id="">
                        <option value="0">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select> --}}
  
 <br><br> <button type="submit">Submit Data</button>

  
</form>
</body>
</html>