<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Search implementation with Laravel Scout</title>

    <style>
        .card-body{
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Keyword" v-model="query">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" @click="search()" v-if="!loading" >Search</button>
                        <button class="btn btn-outline-secondary" disabled="disabled" v-if="loading">Searching ...</button>
                    </div>
                </div>
            </div>

            <div class="alert alert-danger" role="alert" v-if="error">
                @{{ error }}
            </div>
        </div>
    </div>
    <br>
    <div id="products" class="row">
        <div class="col-4 mb-3" v-for="product in products">
            <div class="card">
                <img class="card-img-top" :src="product.image" alt="@{{ product.title }}">
                <div class="card-body">
                    <h5 class="card-title">@{{ product.title }}</h5>
                    <p class="card-text">@{{ product.description }}</p>
                    <div class="row">
                        <div class="col">
                            <p class="lead">@{{ product.price }}$</p>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-block">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .row -->
    <br>
    <hr>
    <br>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
<script src="/js/vue-search.js"></script>

</body>
</html>