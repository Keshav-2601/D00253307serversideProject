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
    <h2>Add a new Blog</h2>
    <textarea id="content" placeholder="Write your content here"></textarea>
    <br>
    <button class="button" onclick="saveContent()">Save</button>
    <button class="button" onclick="cancelContent()">Cancel</button>
    <button class="button" onclick="backtomainpage()">Back</button>
    <Script>
          function backtomainpage(){
            window.location.href='/products';
          }

    </Script>
</body>
</html>
