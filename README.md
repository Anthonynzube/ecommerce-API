# Ecommerce REST API

A REST API for an ecommerce application using [Laravel](https://laravel.com), it features the users, products, and reviews


## Usage


## Products


### Show all products


```GET Request``` 

```localhost:8000/api/products```

This request displays all the products available

Sample Request

```curl --location --request GET 'localhost:8000/api/products'```

Sample Output

```
{
    "data": [
        {
            "name": "omnis",
            "totalPrice": 340.2,
            "discount": 10,
            "href": {
                "link": "http://localhost:8000/api/products/2"
            }
        },
        {
            "name": "autem",
            "totalPrice": 266.05,
            "discount": 15,
            "href": {
                "link": "http://localhost:8000/api/products/3"
            }
        },
        {
            "name": "impedit",
            "totalPrice": 722.4,
            "discount": 20,
            "href": {
                "link": "http://localhost:8000/api/products/4"
            }
        }
    ],
    "links": {
        "first": "http://localhost:8000/api/products?page=1",
        "last": "http://localhost:8000/api/products?page=17",
        "prev": null,
        "next": "http://localhost:8000/api/products?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 17,
        "path": "http://localhost:8000/api/products",
        "per_page": 3,
        "to": 3,
        "total": 50
    }
}
```

### Show a particular product


```GET Request```

```http://localhost:8000/api/products/1```

This request shows all the details of any particular product

Sample Request

```curl --location --request GET 'http://localhost:8000/api/products/1'```

Sample Output

```
{
    "data": {
        "name": "omnis",
        "description": "Dolorem assumenda soluta iusto numquam sit eius. Sunt aliquam culpa eveniet dicta possimus suscipit officiis officiis. Voluptas et earum sed sint est. Nesciunt omnis ipsum architecto saepe sequi laborum.",
        "price": 378,
        "stock": 1,
        "discount": 10,
        "totalPrice": 340.2,
        "rating": 3.5,
        "href": {
            "reviews": "http://localhost:8000/api/products/2/review"
        }
    }
}
```


### Create a product


```POST Request```

```localhost:8000/api/products/```

This request creates a product

HEADERS

```
Accept-application/json
Content-Type-application/json
Authorization-Bearer Token
```
BODY raw

```
{
	"name" : "Black Trousers",
	"description" : "Black Cotton trousers",
	"price" : "500",
	"stock" : "15",
	"discount" : "10"
}
```

Sample Request

```
curl --location --request POST 'localhost:8000/api/products/' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer Token' \
--data-raw '{
	"name" : "IPhone 8",
	"description" : "The best phone with wireless charging",
	"price" : "1000",
	"stock" : "20",
	"discount" : "20"
}'
```

Sample Output

```
{
    "data": {
        "name": "Black Trousers",
        "description": "Black Cotton trousers",
        "price": "500",
        "stock": "15",
        "discount": "10",
        "totalPrice": 450,
        "rating": "No rating yet",
        "href": {
            "reviews": "http://localhost:8000/api/products/52/review"
        }
    }
}
```


### Update a product


```PUT Request```

```localhost:8000/api/products/55```

This request updates a product

HEADERS

```
Accept - application/json
Content - Typeapplication/json
Authorization - Bearer Token
```

BODY raw

```
{

	"description" : "The best phone with wireless charging updated"

}
```

Sample Request

```
curl --location --request PUT 'localhost:8000/api/products/55' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer Token' \
--data-raw '{

	"description" : "The best phone with wireless charging updated"
}'
```

Sample Output

```
{
    "data": {
        "name": "impedit",
        "description": "The best phone with wireless charging updated",
        "price": 903,
        "stock": 2,
        "discount": 20,
        "totalPrice": 722.4,
        "rating": 2.4,
        "href": {
            "reviews": "http://localhost:8000/api/products/4/review"
        }
    }
}
```


### Delete a product


```DEL Request```

```localhost:8000/api/products/10```

This request deletes a product

HEADERS

```
Accept - application/json
Content-Type - application/json
Authorization - Bearer Token
```

Sample Request

```
curl --location --request DELETE 'localhost:8000/api/products/10' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer Token' \
--data-raw ''
```


## Reviews


### Create a Review


```POST Request```

```localhost:8000/api/products/5/review```

This request creates a review which is associated with a product

HEADERS

```
Accept - application/json
Content-Type - application/json
Authorization - Bearer Token
BODY raw
{
	"customer" : "Anthony",
	"star" : 3,
	"review" : "This is the most awesome review ever"
}
```

Sample Request

```
curl --location --request POST 'localhost:8000/api/products/5/review' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer Token' \
--data-raw '{
	"customer" : "Anthony",
	"star" : 3,
	"review" : "This is the most awesome review ever"
}'
```

Sample Output

```
{
    "data": {
        "id": 303,
        "customer": "Anthony",
        "body": "This is the most awesome review ever",
        "star": 3
    }
}
```


### Update a Review


```PUT Request```

```localhost:8000/api/products/5/review/301```

This request updates a review which is associated with a product

HEADERS

```
Acceptapplication/json
Content-Typeapplication/json
AuthorizationBearer Token
BODY raw
{
	"customer" : "Anthony updated",
	"review" : "This the best review updated",
	"star" : 4
}
```

Sample Request

```
curl --location --request PUT 'localhost:8000/api/products/5/review/301' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer Token' \
--data-raw '{
	"customer" : "Anthony updated",
	"review" : "This the best review updated",
	"star" : 4
}'
```

Sample Output

```
{
    "data": {
        "id": 23,
        "customer": "Anthony updated",
        "body": "This the best review updated",
        "star": 4
    }
}
```

### Delete a Review


```DEL Request```

```localhost:8000/api/products/5/review/301```

HEADERS

```
Accept - application/json
Content-Type - application/json
Authorization - Bearer Token
BODY raw
{
	"customer" : "Anthony updated",
	"review" : "This the best review updated",
	"star" : 4
}
```

Sample Request

```
curl --location --request DELETE 'localhost:8000/api/products/5/review/301' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer Token' \
--data-raw '{
	"customer" : "Anthony updated",
	"review" : "This the best review updated",
	"star" : 4
}'
```


### Show all reviews for a particular product


```GET Request```

```http://localhost:8000/api/products/4/review```

This request show all the reviews associated with any particular product

Sample Request

```curl --location --request GET 'http://localhost:8000/api/products/4/review'```

Sample Output

```
{
    "data": [
        {
            "id": 31,
            "customer": "Miss Christy Jacobson IV",
            "body": "Eum voluptas eum quo dolorem. Amet et quo illo nemo porro tempore et. Minus vero ab fugit quam perferendis velit. Voluptas ullam architecto id.",
            "star": "1"
        },
        {
            "id": 43,
            "customer": "Talia Doyle",
            "body": "Earum repellat provident quo. Mollitia dolores rerum voluptates consequuntur quidem autem ad. Cumque eum expedita quos est voluptatum. Minima voluptas sed est est.",
            "star": "3"
        },
        {
            "id": 76,
            "customer": "Prof. Yolanda Stamm",
            "body": "Sit enim voluptate quis omnis libero aut. Consequatur aut dolore voluptates aspernatur quo vero maiores. Iste quos enim sunt voluptatum aut.",
            "star": "3"
        },
        {
            "id": 101,
            "customer": "Mathew Greenholt",
            "body": "Qui rerum ipsa harum autem quidem amet eos. Esse reprehenderit vel natus voluptatem labore. Earum illo qui id nostrum a voluptatem.",
            "star": "5"
        },
        {
            "id": 154,
            "customer": "Reed Weimann",
            "body": "Id laboriosam est et id dolorum. Sed dignissimos aut ipsa nobis qui repellendus. Odit unde deserunt iusto nihil.",
            "star": "2"
        },
        {
            "id": 229,
            "customer": "Dr. Pascale Terry Sr.",
            "body": "Ut in accusantium exercitationem. Numquam in maxime veniam magni nihil. Quia cumque maiores ex accusantium tempore unde odit.",
            "star": "1"
        },
        {
            "id": 281,
            "customer": "Viviane Wolff",
            "body": "Ex quia illum ut quam tempora natus maiores. Ipsam occaecati qui minus sunt sunt non. Omnis earum aut et minima commodi. Aut vero beatae dolorum aut.",
            "star": "2"
        }
    ]
}
```


## OAuth


### Get Token


```POST Request``` 

```localhost:8000/oauth/token```

This request gets the access token associated with the user

HEADERS

```
Accept - application/json
Content-Type - application/json
Authorization - Bearer Token
BODY raw
{
	"grant_type" : "password",
	"client_id" : "2",
	"client_secret" : "fsMrrl8dPSg8r18HWo100DIOcTJU56lcMa3tRU1F",
	"username" : "emmet14@example.net",
	"password" : "password"
}
```

Sample Request

```
curl --location --request POST 'localhost:8000/oauth/token' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer Token' \
--data-raw '{
	"grant_type" : "password",
	"client_id" : "2",
	"client_secret" : "fsMrrl8dPSg8r18HWo100DIOcTJU56lcMa3tRU1F",
	"username" : "emmet14@example.net",
	"password" : "password"
}'
```

Sample Output

```
{
    "token_type": "Bearer",
    "expires_in": 31535998,
    "access_token": "Token",
    "refresh_token": "Token"
}
```