# Syntax Guide

## JavaScript Syntax

### Variables
```javascript
let variableName = value;
const constantName = value;
var oldVariableName = value;
```
- `let` is used to declare a block-scoped variable.
- `const` is used to declare a block-scoped constant.
- `var` is used to declare a function-scoped variable (older syntax).

### Data Types
```javascript
let number = 123;
let string = "Hello, World!";
let boolean = true;
let array = [1, 2, 3];
let object = { key: "value" };
let undefinedVariable;
let nullVariable = null;
```
- JavaScript supports various data types including numbers, strings, booleans, arrays, objects, `undefined`, and `null`.

### Functions
```javascript
function functionName(parameters) {
    // function body
    return value;
}
```
- `function` keyword is used to declare a function.
- Functions can take parameters and return a value.

### Arrow Functions
```javascript
const functionName = (parameters) => {
    // function body
    return value;
}
```
- Arrow functions provide a shorter syntax for writing functions.
- They do not have their own `this` context.

### Conditional Statements
```javascript
if (condition) {
    // code to be executed if condition is true
} else if (anotherCondition) {
    // code to be executed if anotherCondition is true
} else {
    // code to be executed if all conditions are false
}
```
- `if`, `else if`, and `else` are used for conditional execution of code.

### Loops
```javascript
for (let i = 0; i < 10; i++) {
    // code to be executed 10 times
}

while (condition) {
    // code to be executed as long as condition is true
}

do {
    // code to be executed at least once and then repeatedly as long as condition is true
} while (condition);
```
- `for`, `while`, and `do...while` loops are used to execute code multiple times.

### Objects
```javascript
const objectName = {
    key: value,
    method() {
        // method body
    }
};
```
- Objects are collections of key-value pairs.
- Methods are functions defined within objects.

### Arrays
```javascript
const arrayName = [element1, element2, element3];
```
- Arrays are used to store multiple values in a single variable.

## HTML Syntax

### Elements
```html
<tagname>Content</tagname>
```
- HTML elements are defined by a start tag, content, and an end tag.

### Attributes
```html
<tagname attribute="value">Content</tagname>
```
- Attributes provide additional information about HTML elements.

### Common Tags
```html
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <h1>Heading</h1>
    <p>Paragraph</p>
    <a href="url">Link</a>
    <img src="image.jpg" alt="Description">
</body>
</html>
```
- `<!DOCTYPE html>` declares the document type.
- `<html>` is the root element.
- `<head>` contains meta-information.
- `<body>` contains the content of the document.
- `<h1>` to `<h6>` are heading tags.
- `<p>` is a paragraph tag.
- `<a>` is an anchor tag for links.
- `<img>` is an image tag.

### Forms
```html
<form action="submit.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Submit">
</form>
```
- `<form>` is used to create an HTML form for user input.
- `action` attribute specifies where to send the form data.
- `method` attribute specifies the HTTP method to use when sending form data.
- `<label>` defines a label for an `<input>` element.
- `<input>` is used to create an input field.

## CSS Syntax

### Selectors
```css
selector {
    property: value;
}
```
- CSS selectors are used to select the HTML elements you want to style.

### Classes and IDs
```css
.classname {
    property: value;
}

#idname {
    property: value;
}
```
- Classes are defined with a dot (`.`) and IDs with a hash (`#`).

### Common Properties
```css
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

h1 {
    color: #333;
    font-size: 24px;
}

p {
    line-height: 1.5;
    margin: 10px 0;
}
```
- `font-family` sets the font.
- `background-color` sets the background color.
- `color` sets the text color.
- `font-size` sets the size of the text.
- `line-height` sets the line height.
- `margin` sets the margin around elements.

## PHP Syntax

### Variables
```php
$variableName = value;
```
- Variables in PHP start with a `$` sign.

### Data Types
```php
$number = 123;
$string = "Hello, World!";
$boolean = true;
$array = array(1, 2, 3);
$object = (object) ['key' => 'value'];
$nullVariable = null;
```
- PHP supports various data types including numbers, strings, booleans, arrays, objects, and `null`.

### Functions
```php
function functionName($parameters) {
    // function body
    return $value;
}
```
- `function` keyword is used to declare a function.
- Functions can take parameters and return a value.

### Conditional Statements
```php
if ($condition) {
    // code to be executed if condition is true
} elseif ($anotherCondition) {
    // code to be executed if anotherCondition is true
} else {
    // code to be executed if all conditions are false
}
```
- `if`, `elseif`, and `else` are used for conditional execution of code.

### Loops
```php
for ($i = 0; $i < 10; $i++) {
    // code to be executed 10 times
}

while ($condition) {
    // code to be executed as long as condition is true
}

do {
    // code to be executed at least once and then repeatedly as long as condition is true
} while ($condition);
```
- `for`, `while`, and `do...while` loops are used to execute code multiple times.

### Arrays
```php
$array = array("value1", "value2", "value3");
```
- Arrays are used to store multiple values in a single variable.

### Associative Arrays
```php
$assocArray = array("key1" => "value1", "key2" => "value2");
```
- Associative arrays use named keys that you assign to them.

### Superglobals
```php
$_GET['key'];
$_POST['key'];
$_SESSION['key'];
$_COOKIE['key'];
```
- Superglobals are built-in variables that are always accessible, regardless of scope.
- `$_GET` is used to collect form data after submitting an HTML form with method="get".
- `$_POST` is used to collect form data after submitting an HTML form with method="post".
- `$_SESSION` is used to store session variables.
- `$_COOKIE` is used to retrieve cookie values.
