# Ecommerce REST API

A REST API for an ecommerce application using [Laravel](https://laravel.com), it features the users, products, and reviews

## Usage

### Products

Show all products

```GET Request``` 

```localhost:8000/api/products```

This request displays all the products available

Example Request

```curl --location --request GET 'localhost:8000/api/products'```

Show a particular product

```GET Request```

```http://localhost:8000/api/products/1```

This request shows all the details of any particular product

Example Request

```curl --location --request GET 'http://localhost:8000/api/products/1'```

Create a product

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
	"name" : "IPhone 8",
	"description" : "The best phone with wireless charging",
	"price" : "1000",
	"stock" : "20",
	"discount" : "20"
}
```


Example Request

Create a product

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
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
