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
Authorization-Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ
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
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
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
Authorization - Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ
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
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
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
Authorization - Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ
```

Sample Request

```
curl --location --request DELETE 'localhost:8000/api/products/10' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
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
Authorization - Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ
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
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
--data-raw '{
	"customer" : "Anthony",
	"star" : 3,
	"review" : "This is the most awesome review ever"
}'
```

```
Sample Output

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
AuthorizationBearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ
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
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
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
Authorization - Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ
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
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
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
Authorization - Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ
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
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMzM1NDhjOTI1N2Y0MzRhZWMzYTkwODljZTk2MTEwYzIwNzgzNGI3MWE5MmUwZDM2ZDQwZmVmMjBmMDFlYzg0ODk1OTU1ZmE5MzcwMmQ0NWYiLCJpYXQiOjE1ODc1MTU2MjEsIm5iZiI6MTU4NzUxNTYyMSwiZXhwIjoxNjE5MDUxNjE4LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.KYKL0n9RurIEM8FDYhCgQgX5vccC9ZFfrHNAf7oQ8sOxHXZPv3fj6pEK-Ma-FKKL08CO9LmHUgEhxpxpRSENcEgZDwUtJxn7xtL68ttlM0K4FFA6hY6EcQXC6H_yzTB02CrD6p061M7B-6M2ZJ8MjZmTiPhqvMjRaG3W59PCFUXNPsyUPZkNq3ZGFHhlh12ZwgA8r0LE4PLCQwpICF4ACdLBh3FgmX3PeH28xj-Iks9JkjqsclVYBYbbM3gIlwJK2K3QUhME6yoT0xLC2hss1ql-dyjf4KZAPyr9nRG_Q741Ie-_D120QePTKqFNf11kfJSTEKohfAGa3I0bvS9HOKdB2z0ibBHz8SQQbSeD2LSab8KthKKpUN3mvhgSicq5DghZ0uxfUZ_KuaSoy_mxXcbTRtb5ffe20eLap-bGWL9RBZUru0R20xGViOyAXDSLWFQMNN6KYxyZypu56nJSzrZZQ4j4fLkdxehG6qEwy-r5g0AGEdk1tn4dDkAgspP6OfbkowVutbAflzkTNuPt6BDPw19dK1vcXLTct8JGuXiEj4T9bdKjVWfhCoiFOanpiLYx9H4_f2KyY8ite5ZsTlYcleCjIxxuJuIRyfK1x86mthzZL2G0bLeFMRNcxe4xxnYJL2MSQmXSzZe9trvc8Bpltyop-umJ75QGF5YUGeU",
    "refresh_token": "def50200bfddf16cfc3b1505f9b399fc21be67881150494183aae8dd569759135f6615dbc474277811adcce4ae98f8708bd4f6e5e65a9f59cfb4e1c16f68f16af07cef084a7cf9dfb0ddbb71bfa5c8e258d890a8460c4175994ef47f9f414cba9ebe7e7d59e0f540857330bca80734773cf82fcaa270c55d88b27c3f7ab4fea49777b75917944bc69782761791637b7460aa8569cf6b20941805d70bb58c901803a26df089c44a9e590501cbd30fde7440b683a92121d70475f1b43b5b382938dd9a55406cf377e44076c6bf985922d782835d8e4b3cbfe9fda314ece31030f8f02bd7030f237bc868a04fee1af98c639e390cf5c5ab9b7cbc2fce8489f06a271ddebe032e584a84794aec835536d43b7007cdaf0d9e62b6d6c572cb4b796e5aad90528e02702190ae3d0ac8479715b2404d0133f14d41d937c0b4bd8ba9146997fce2f5540c6945fdd96db43234d7a4bb81a6e7445f1c7ae63df0f33af029aa3c"
}
```