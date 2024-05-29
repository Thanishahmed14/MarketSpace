<!-- basic -->


<style>

/* Move the user menu to the right side with a fixed position */
.user-menu-div {
    margin-left: 90%;
    margin-top: 10px;
}

/* Style the menu toggle button */
.user-menu .menu-toggle {
    color: #fff;
    text-decoration: none;
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.user-menu .menu-toggle:hover {
    background-color: #555;
}

/* Style the dropdown menu */
.user-menu .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

/* Align dropdown menu items to the right */
.user-menu.active .dropdown-menu {
    display: block;
}

/* Style the dropdown menu items */
.user-menu .dropdown-menu li {
    list-style: none;
    margin-bottom: 8px;
}

.user-menu .dropdown-menu li a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.user-menu .dropdown-menu li a:hover {
    color: #555;
}

/* Style the login and register buttons */
.user-menu .nav-item {
    margin-bottom: 20px;/* Display buttons in one line */
}

.user-menu .nav-item a {
    color: #fff;
    text-decoration: none;
    padding: 8px 20px;
    margin-right: 10px;
    border-radius: 8px;
}

.user-menu .nav-item a.btn-primary {
    background-color: #007bff;
}

.user-menu .nav-item a.btn-primary:hover {
    background-color: #0056b3;
}

.user-menu .nav-item a.btn-success {
    background-color: #28a745;
}

.user-menu .nav-item a.btn-success:hover {
    background-color: #218838;
}





.content-container {
  width: 100%;

  max-width: 1200px; /* Adjust as needed */
  margin: 0 auto;
}

.product-details {
  display: flex;
  align-items: center;
  border: 1px solid #ccc; /* Optional: Add border for visual separation */
  padding: 20px;
}

.product-image {
  flex: 0 0 auto;
  margin-right: 100px;
}

.product-image img {
  max-width: 100%;
  height: auto;
}

.product-info {
  flex: 1 1 auto;
}

.product-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.product-description {
  margin-bottom: 15px;
}

.product-price {
  font-weight: bold;
  color: #06e336;
  margin-bottom: 10px;
}

.product-quantity {
  margin-bottom: 15px;
}

.product-quantity label {
  margin-right: 5px;
  color: red;
}

.add-to-cart-btn {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 30px;
  border-radius: 9px;
  width: 220px
}

.add-to-cart-btn:hover {
  background-color: #0056b3;
}





.navbar {
            background-color: black;
            list-style-type: none;
            height: 100px;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex; /* Use flexbox */
            justify-content: center; /* Center the items horizontally */
        }

        .navbar li {
            margin: 0 10px; /* Add margin for spacing between items */
        }

        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar li a:hover {
            color: gold;
        }









        .styled-table {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            border-collapse: collapse;
        }
        .styled-table th, .styled-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .styled-table th {
            background-color: #f2f2f2;
        }
        .styled-table tr:hover {
            background-color: #f5f5f5;
        }
        .styled-table .product-image {
            max-width: 50px;
            max-height: 50px;
        }

        .styled-table button{
            width: 100px;
        }





/* Your existing styles here */







</style>
