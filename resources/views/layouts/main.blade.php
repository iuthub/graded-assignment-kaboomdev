<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            /* Include the padding and border in an element's total width and height */
            * {
              box-sizing: border-box;
              font-family: Nunito, san-serif;
            }

            /* Remove margins and padding from the list */
            ul {
              margin: 0;
              padding: 0;
            }

            /* Style the list items */
            ul li {
              position: relative;
              padding: 12px 8px 12px 40px;
              background: #eee;
              font-size: 18px;
              transition: 0.2s;
              display: flex;
              flex-flow: row nowrap;
              align-items: center;
              justify-content: flex-start;


              /* make the list items unselectable */
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            /* Set all odd list items to a different color (zebra-stripes) */
            ul li:nth-child(odd) {
              background: #f9f9f9;
            }

            /* Darker background-color on hover */
            ul li:hover {
              background: #ddd;
            }

            ul li .task {
                flex-grow: 1;
            }

            ul li .action {
                margin: 5px 15px;
                vertical-align: middle;
            }

            ul li a {
                color: grey;
            }
         
            /* Style the header */
            .header {
              background-color: #f44336;
              padding: 30px 40px;
              color: white;
              text-align: center;
            }

            /* Clear floats after the header */
            .header:after {
              content: "";
              display: table;
              clear: both;
            }

            /* Style the input */
            input {
              margin: 0;
              border: none;
              border-radius: 0;
              width: 75%;
              padding: 10px;
              float: left;
              font-size: 16px;
            }

            /* Style the "Add" button */
            .addBtn {
              padding: 10px;
              width: 25%;
              background: #d9d9d9;
              color: #555;
              float: left;
              text-align: center;
              font-size: 16px;
              cursor: pointer;
              transition: 0.3s;
              border-radius: 0;
              border: none;
            }

            .addBtn:hover {
              background-color: #bbb;
            }
            
            
            button.no-styles {
              border: none;
              background: none;
              font-size: 1em;
              cursor: pointer;
            }
            
            nav {
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding: 0.7em 0;
              border-bottom: 1px solid rgba(0,0,0,0.3);
            }
            nav h5 {
              font-weight: 400;
              margin: 0;
              font-size: 1.2rem;
            }
            .subheader {
              margin: 1.5rem 0;
            }
            
        </style>
    </head>
    <body>
      <x-nav-bar />
      <x-error-block/>
      <x-info-block/>
      @yield('content')
    </body>
</html>