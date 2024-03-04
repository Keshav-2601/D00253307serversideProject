<!DOCTYPE html>
<html>
<head>
    <style>
        #content {
            width: 100%;
            height: 200px;
            border: 2px solid black;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form method='post' action="{{ route('Product.store') }}">
    @csrf
    @method("post")
    <h2>Add a new Blog</h2>
    <input type="text" name="name" placeholder="Enter product name">
    <textarea id="content" name="content" placeholder="Write your content here"></textarea>
    <br>
    <input type="submit" class="button">
    <input type="button" class="button" onclick="backtomainpage()" value="Back">
</form>
    <script>
        function backtomainpage(){
            window.location.href = "/products";
        }
    </script>
</body>
</html>
