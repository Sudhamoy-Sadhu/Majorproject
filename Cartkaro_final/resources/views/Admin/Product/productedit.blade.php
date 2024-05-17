<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="dashboard_layout.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="staffadd.css">
</head>

<body>
    <section class="container">
        <header> Edit Product </header>
        <form action="/product/{id}/update" method="POST" class="form">
            <div class="input-box">
                <label>Name</label><br><input type="text" value="{{old('name', $products->name)}}">
            </div>
            <div class="input-box">
                <label>Description</label><br><input type="text" value="{{old('description', $products->Description)}}">
            </div>
            <div class="input-box">
                <label>Price</label><br><input type="text" value="{{old('price', $products->Price)}}">
            </div>

            <div class="input-box position">

                <label>Categories</label><br>
                <div class="column">
                    <div class="select-box">
                        <select value="{{old('categories', $products->categories)}}">
                            <option value="Rice">Rice</option>
                            <option value="Biscuits">Biscuits</option>
                            <option value="Wheat">Wheat</option>
                            <option value="Oil">Oil</option>
                            <option value="Sugar">Sugar</option>
                        </select>

                    </div>
                </div>
            
                <div class="input-box">
                    <label>Upload your image here</label><br>
                    <div class="img-box">
                        <i class='bx bxs-cloud-upload'></i>
                        <label for="file-upload" class="custom-file-upload">
                            Drag and drop to browse to choose a file
                        </label>
                        <input id="file-upload" type="file" />
                    </div>
                </div>
                <div class="input-box">
                    <input type="submit" value="Save products" class="savechanges">
                </div>
        </form>
    </section>
</body>

</html>