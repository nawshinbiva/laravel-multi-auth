<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3 ">
        <h3 class="text-white text-center">Product Operarions</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create product</h3>
                    </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="" class="form-label h5">Name</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Enter Name" name="name">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label h5">SKU</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Enter Stock Keeping Unit" name="sku">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label h5">Price</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Enter Price e.g. $300" name="price">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label h5">Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="5"  placeholder="Write a description for the product"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label h5">Image</label>
                        <input type="file" class="form-control form-control-lg" placeholder="Upload Image" name="image">
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary">Submit</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
