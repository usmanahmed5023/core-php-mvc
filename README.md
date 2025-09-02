Core PHP with MVC Architecture

This repository contains a practical implementation of the MVC (Model-View-Controller) pattern using Core PHP.
The goal is to demonstrate how routing, request handling, database connection, authentication, and clean code structure can be achieved without using frameworks.

Each component is organized into a separate folder for clarity and practice.

1. MVC Overview

M – Model

Represents the data layer.

Handles database interaction using PDO.

Supports all SQL joins (INNER, LEFT, RIGHT, FULL).

Example: Post.php

V – View

Represents the presentation layer.

Contains .php files with HTML templates and partials (header, nav, footer).

Example: home.view.php

C – Controller

Represents the logic layer.

Handles incoming requests, processes data with Models, and returns Views.

Example: HomeController.php

2. Core Components
2.1 Router

Handles all incoming requests.

Supports multiple request types: GET, POST, PATCH, DELETE.

Maps URLs to specific controllers and actions.
📂 File: Router.php

2.2 Database Connection

Uses PDO for secure database access.

Handles queries, joins, and transactions.

Credentials are stored in config/config.php.
📂 File: Database.php

2.3 Service Container

Lightweight dependency injection system.

Manages core services like Database, Session, etc.

Improves refactoring and keeps the code maintainable.
📂 File: Container.php

2.4 Controllers

Each controller contains methods for handling specific routes.

Examples:

HomeController.php → Home page

PostController.php → Manage posts (CRUD)

AuthController.php → Login & Register

2.5 Views

Clean separation of UI from logic.

Example partials: header.php, nav.php, footer.php.
📂 Folder: views/layout/

2.6 Models

Responsible for querying and managing database records.

Example: Post.php

3. Implemented Features

✅ CRUD Operations (Create, Read, Update, Delete)

✅ User Authentication (Login, Register, Logout)

✅ Session Handling (user state, flash messages)

✅ Cookie Handling (remember me, preferences)

✅ Routing System (clean handling of multiple request types)

✅ Service Container (dependency injection)

✅ SQL Joins (INNER, LEFT, RIGHT, FULL)

✅ Refactoring Techniques (code reuse, clean structure)

✅ Composer Autoloading (PSR-4)

Conclusion

This project is not just a simple MVC demo, but a complete learning resource for Core PHP developers.
It covers everything from routing and request handling to authentication, sessions, cookies, CRUD, and refactoring — all implemented with a clean structure.

By exploring this project, you’ll understand how popular frameworks like Laravel or Symfony manage their core under the hood, and how you can apply the same principles in your own projects.