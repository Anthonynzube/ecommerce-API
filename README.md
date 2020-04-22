# Ecommerce REST API

A REST API for an ecommerce application using [Laravel](https://laravel.com), it features the users, products, and reviews


## Usage


## Products


### Show all products


```GET Request``` 

```localhost:8000/api/products```

This request displays all the products available

Example Request

```curl --location --request GET 'localhost:8000/api/products'```


### Show a particular product


```GET Request```

```http://localhost:8000/api/products/1```

This request shows all the details of any particular product

Example Request

```curl --location --request GET 'http://localhost:8000/api/products/1'```


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
	"name" : "IPhone 8",
	"description" : "The best phone with wireless charging",
	"price" : "1000",
	"stock" : "20",
	"discount" : "20"
}
```

Example Request

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

Example Request

```
curl --location --request PUT 'localhost:8000/api/products/55' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMDU3YTE4NTljOGMzNjliN2FkNGViN2MwY2U4NWQ2OGFlZjY3Yzk3YWNiOWU5ZDg5ZThjMWE0MmM3ODM2ODdlZjUyZDIyNzMyYzQyYzk1ODgiLCJpYXQiOjE1ODczOTI1MjQsIm5iZiI6MTU4NzM5MjUyNCwiZXhwIjoxNjE4OTI4NTIzLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.jU8tcue7YapiuBctZjBcXtoIhBXcjTNJq6agnqaUuFMT8265GlRFzL7gDfpvLSxNai8mCvR6I63AVnXbow-P4qe8aGM2mpZITuoQHO5ExJ_CLp19giPuWvteUUo--6z2a_yR6KBQ4HV0bAZLHdgfNYUzEy9nOEoRPdeMDXL_kaEqulBV-a54rD_j6lWvhgQH0htOVzeHkwT0Iv3E8lAd5ecObvvzDmNKC74xZ09vC9aWrcNh3CTv6Okcnt5SwmJiZ08TRDREOeOTZFnPqWapsOVufmb7I_C342RDJhrtLvzHNzdJc4UOaDge66TTK5nc7pQzcBAm39m9VmKXUSpC3Icr-aRnLbF_InyQJkXwbp1nk9ZB4mO2UYsrcL4W5sOftz3HJfpE-Qjl2KZxa-U8BDwxqrgNDxBTatGEzPa7co2c0MX6qkxMG-1QDqvh94P_wsKxiMREV9BG9BP2-Bi1zqByrUNPax0OmmL79A4qAKdtssW2LLJrSfzKbISeU7WidN00ToKYbSBt-Qk0aT7qlqrF6IMqXC9AjaYFy0EhUZNs12nP0nuPllFstzVFpZD2ulHHJpBZJ7mX0kic4n56q4BDHNC_UhmDmzv417XMxU6A6dqYpp50dn3Xawa4cReUoc4PjQx1BRsIXlzTbY5ifcoqts5MWcHWThfK8rRGiHQ' \
--data-raw '{

	"description" : "The best phone with wireless charging updated"
}'
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

Example Request

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

Example Request

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

Example Request

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

Example Request

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

```http://localhost:8000/api/products/1/review```

This request show all the reviews associated with any particular product

Example Request

```curl --location --request GET 'http://localhost:8000/api/products/1/review'```


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

Example Request

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