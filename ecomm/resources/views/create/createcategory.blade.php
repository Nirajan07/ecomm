<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<form action="/createcategory" method="POST">
  @csrf

  <h2>Create Category</h2>
    Category Name: <input type="text" name="name" id=""><br><br>
  Description: <textarea name="description" id="" cols="30"  rows="10"></textarea><br><br>
  Category Slug: <input type="text" name="slug" id="slug" class="form-control" value="{{ old('name') }}"><br><br>
  <label for="cars">Select a category:</label>
  <select name="parent_id" class="form-control">
    <option value="0">Select a category</option>
    @foreach ($categories as $category)
    <option value="{{ $category->id }}" {{ $category->id == old('parent_id') ? "selected": '' }}>{{ $category->name }}</option>
                    @endforeach
  </select>
    <br><br><button type="submit" class="btn btn-default">Submit</button>
</form>