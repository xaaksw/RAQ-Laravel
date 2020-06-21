@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading ">
                <h2>Add New Product</h2>
            </div>
        </div>

        <div class="col-md-8">
            <div class="contact-form">
                    <form action="/products" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">

                                <fieldset>   
                                    <label for="image" class="control-label col-md-6">image</label>
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color:#f33f3f;color:whitesmoke">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file" name="file">
                                            <label class="custom-file-label" for="file" style="color:#f33f3f">Choose file</label>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name" class="control-label col-md-6">Name</label>
                                    <input type="text" name="name" id="name" class="form-control border rounded">
                                    
                                    
                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="price" class="control-label col-md-6">price</label>
                                    <input name="price" id="price" class="form-control border rounded">
                                    
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="category" class="control-label col-md-6">Category</label>

                                    <select class="form-control" name="category" id="category">
                                        <option value="">Selectt</option>
                                        <option value="cat2">cat2</option>
                                        <option value="cat3">cat3</option>
                                        <option value="cat4">cat4</option>
                                      </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <br />
                                    <label for="description" class="control-label col-md-6">description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control border rounded"></textarea>
                                    
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit"  class="filled-button">Add Product</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>

    </div>
</div>
@endsection