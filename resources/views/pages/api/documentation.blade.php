@extends('templates.main')
@section('title', 'API Documentation')
@section('content')
    <div class="container">
        <h1>API Documentation</h1>
        <p>Welcome to the API documentation page. Here you will find all the information you need to interact with our API.</p>
        
        <h2>Authentication</h2>
        <p>All API requests require an access token. You can obtain a token by logging in with your credentials.</p>
        <pre>
POST /api/login
Content-Type: application/json
{
    "email": "user@example.com",
    "password": "yourpassword"
}
        </pre>
        <p>The response will contain an access token that you should include in the `Authorization` header for all API requests:</p>
        <pre>
Authorization: Bearer your-access-token
        </pre>

        <h2>Endpoints</h2>
        
        <h3>Get All Products</h3>
        <p>Retrieve a list of all products.</p>
        <pre>
GET /api/products
Authorization: Bearer your-access-token
        </pre>
        
        <h3>Get a Single Product</h3>
        <p>Retrieve details of a specific product.</p>
        <pre>
GET /api/products/{id}
Authorization: Bearer your-access-token
        </pre>
        
        <h3>Create a New Product</h3>
        <p>Add a new product to the database.</p>
        <pre>
POST /api/products
Authorization: Bearer your-access-token
Content-Type: application/json
{
    "name": "Product Name",
    "price": 100.00,
    "description": "Product description here."
}
        </pre>
        
        <h3>Update a Product</h3>
        <p>Update details of an existing product.</p>
        <pre>
PUT /api/products/{id}
Authorization: Bearer your-access-token
Content-Type: application/json
{
    "name": "Updated Product Name",
    "price": 120.00,
    "description": "Updated product description."
}
        </pre>
        
        <h3>Delete a Product</h3>
        <p>Remove a product from the database.</p>
        <pre>
DELETE /api/products/{id}
Authorization: Bearer your-access-token
        </pre>

        <h3>Get All Orders</h3>
        <p>Retrieve a list of all orders.</p>
        <pre>
GET /api/orders
Authorization: Bearer your-access-token
        </pre>
        
        <h3>Create a New Order</h3>
        <p>Add a new order.</p>
        <pre>
POST /api/orders
Authorization: Bearer your-access-token
Content-Type: application/json
{
    "user_id": 1,
    "products": [
        {
            "product_id": 1,
            "quantity": 2
        },
        {
            "product_id": 2,
            "quantity": 1
        }
    ]
}
        </pre>

        <h3>Delete an Order</h3>
        <p>Remove an order from the database.</p>
        <pre>
DELETE /api/orders/{id}
Authorization: Bearer your-access-token
        </pre>

        <h3>Get All Vendors</h3>
        <p>Retrieve a list of all vendors.</p>
        <pre>
GET /api/vendors
Authorization: Bearer your-access-token
        </pre>

        <h3>Get a Single Vendor</h3>
        <p>Retrieve details of a specific vendor.</p>
        <pre>
GET /api/vendors/{id}
Authorization: Bearer your-access-token
        </pre>

        <h3>Create a New Vendor</h3>
        <p>Add a new vendor to the database.</p>
        <pre>
POST /api/vendors
Authorization: Bearer your-access-token
Content-Type: application/json
{
    "name": "Vendor Name",
    "email": "vendor@example.com",
    "phone": "123456789"
}
        </pre>

        <h3>Update a Vendor</h3>
        <p>Update details of an existing vendor.</p>
        <pre>
PUT /api/vendors/{id}
Authorization: Bearer your-access-token
Content-Type: application/json
{
    "name": "Updated Vendor Name",
    "email": "updated@example.com",
    "phone": "987654321"
}
        </pre>

        <h3>Delete a Vendor</h3>
        <p>Remove a vendor from the database.</p>
        <pre>
DELETE /api/vendors/{id}
Authorization: Bearer your-access-token
        </pre>

        <h2>Responses</h2>
        <p>All responses are returned in JSON format. A typical successful response will look like this:</p>
        <pre>
{
    "success": true,
    "data": {...},
    "message": "Request processed successfully."
}
        </pre>
        <p>In case of an error, the response will look like this:</p>
        <pre>
{
    "success": false,
    "message": "Error message here."
}
        </pre>
    </div>
@endsection
