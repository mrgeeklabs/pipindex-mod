# pipindex-mod

#### Run locally by invoking the following on your terminal.
`php -S localhost:9999`

#### Access at the following URL:
`http://localhost:9999/loginpoc/login.php`

### API Guidelines 
--

#### /loginpoc/check.php

POST `email`

If phone number found for email:
```
{
  "success": true,
  "message": +447540316037
}
```

If phone number not found for email:

```
{
  "success": false,
  "message": ""
}
```

If email does not exist in Salesforce:

```
{
  "success": false,
  "message": "Email does not exist in records."
}
```

#### /loginpoc/collect.php

POST `email`, `requestForInfo`, `requestForCall`, `phoneNumber`

Minimum 2 inputs required to work, such as, `email` and any other.

If data is succesfully populated in Salesforce, you'll get:

```
{
  "success": true,
  "message": "Information successfully captured from form."
}
```

If only email is supplied and no other secondary input:

```
{
  "success": false,
  "message": "No form data is supplied."
}
```

If email does not exist in Salesforce:

```
{
  "success": false,
  "message": "Email does not exist in records."
}
```
