# doctrine-sub-query-sample

## Installation

```bash
$ git clone git@github.com:ttskch/doctrine-sub-query-sample.git
$ cd doctrine-sub-query-sample
$ composer install
$ bin/console doctrine:migrations:migrate -n
```

## Usage

```bash
$ symfony serve -d
```
```
$ curl localhost:8000 | jq .
[
  {
    "id": 2,
    "post_id": 1,
    "content": "newer comment for post1",
    "created_at": {
      "date": "2020-01-02 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "published": true
  },
  {
    "id": 3,
    "post_id": 2,
    "content": "older comment for post2",
    "created_at": {
      "date": "2020-01-03 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "published": true
  }
]
```
```
$ curl localhost:8000/1 | jq .
[
  {
    "id": 2,
    "post_id": 1,
    "content": "newer comment for post1",
    "created_at": {
      "date": "2020-01-02 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "published": true
  }
]
```
```
$ curl localhost:8000/2 | jq .
[
  {
    "id": 3,
    "post_id": 2,
    "content": "older comment for post2",
    "created_at": {
      "date": "2020-01-03 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "published": true
  }
]
```
```
$ curl localhost:8000/3 | jq .
[]
```
