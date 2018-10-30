<!doctype html>
<html ng-strict-di>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Angular Material Starter</title>

    <meta name="theme-color" content="#0690B7">

    <link rel="manifest" href="manifest.json">

    <style><?php require(public_path("css/critical.css")) ?></style>
    <link href="{!! asset('css/all.css') !!}" media="all" rel="stylesheet" type="text/css" />



</head>
<body>

    <app-shell>
        <div id="app-shell-header">
            <img src="img/icons/logo.svg" width="171" height="41">
        </div>
        <div id="app-shell-content">
            <div ng-app="TodoApp">
                <div ng-controller="TodoController" class="todo">
                    <form ng-submit="new()">
                        <label>Todo list:</label> <input type="text" ng-model="todoText">
                        <button type="submit">+</button>
                    </form>
                    <ul>
                        <li ng-repeat="todo in todolist | orderBy: 'done'">
                            <del ng-show="todo.done">
                               <% todo.text %>
                            </del>
                            <span ng-show="!todo.done">
                                <% todo.text %>
                            </span>
                            
                            <a href="" ng-click="todo.done = !todo.done">✓</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </app-shell>
<app-root></app-root>
<script type="text/javascript" src="{!! asset('js/lib.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/custom.js') !!}"></script>

</body>
</html>
