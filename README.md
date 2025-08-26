# 📌 Core PHP with MVC Architecture

This repository contains a practical implementation of the **MVC (Model-View-Controller)** pattern using **Core PHP**.  
The goal is to demonstrate how routing, database connection, and clean code structure can be achieved without using frameworks.  

Each component is organized into a **separate folder** for clarity and practice.

---

## **1. MVC Overview**

1. **M – Model**  
   - Represents the **data layer**.  
   - Handles database interaction using **PDO**.  
   - Example: `Post.php`  

2. **V – View**  
   - Represents the **presentation layer**.  
   - Contains `.php` files with HTML templates and partials (header, nav, footer).  
   - Example: `home.view.php`  

3. **C – Controller**  
   - Represents the **logic layer**.  
   - Handles incoming requests, processes data with Models, and returns Views.  
   - Example: `HomeController.php`


---

## **2. Core Components**

### **2.1 Router**
- Handles all incoming requests.
- Maps URLs to specific controllers and actions.  
📂 *File:* `Router.php`

### **2.2 Database Connection**
- Uses **PDO** for secure database access.  
- Credentials are stored in `config/config.php`.  
📂 *File:* `Database.php`

### **2.3 Controllers**
- Each controller contains methods for handling specific routes.  
- Example:  
  - `HomeController.php` → Home page  
  - `PostController.php` → Manage posts  

### **2.4 Views**
- Clean separation of UI from logic.  
- Example partials: `header.php`, `nav.php`, `footer.php`.  
📂 *Folder:* `views/layout/`

### **2.5 Models**
- Responsible for querying and managing database records.  
- Example: `Post.php`


