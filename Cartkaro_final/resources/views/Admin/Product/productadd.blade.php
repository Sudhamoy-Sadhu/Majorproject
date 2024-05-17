<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="dashboard_layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="staffadd.css">
</head>

@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif

<body>
    <section class="container">
        <header> Add New Product </header>
        <form method="post" action="/product/store" enctype="multipart/form-data">
            @csrf
            <div class="input-box">
                <label>Name</label><br><input type="text" name="name">
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name')}}</span>
                @endif
            </div>
            <div class="input-box">
                <label>Description</label><br><input type="text" name="Description">
                @if($errors->has('Description'))
                <span class="text-danger">{{ $errors->first('Description')}}</span>
                @endif
            </div>
            <div class="input-box">
                <label>Price</label><br><input type="text" name="Price">
                @if($errors->has('Price'))
                <span class="text-danger">{{ $errors->first('Price')}}</span>
                @endif
            </div>

            <div class="input-box position">

                <label>Categories</label><br>
                <div class="column">
                    <div class="select-box">
                        <select name="categories">
                            <option value="Rice">Rice</option>
                            <option value="Biscuits">Biscuits</option>
                            <option value="Wheat">Wheat</option>
                            <option value="Oil">Oil</option>
                            <option value="Sugar">Sugar</option>
                        </select>
                        @if($errors->has('categories'))
                        <span class="text-danger">{{ $errors->first('categories')}}</span>
                        @endif

                    </div>
                </div>
                
                <div class="input-box">
                    <label>Upload your image here</label><br>
                    @if($errors->has('proImage'))
                        <span class="text-danger">{{ $errors->first('proImage')}}</span>
                        @endif
                    <div class="img-box">
                        <i class='bx bxs-cloud-upload'></i>
                        <label for="file-upload" class="custom-file-upload">
                            Drag and drop to browse to choose a file
                        </label>
                        <input id="file-upload" type="file" name="proImage" />
                        
                    </div>
                </div>
                <div class="input-box">
                    <input type="submit" class="savechanges" value="Save changes">
                </div>
        </form>
    </section>
</body>

</html>